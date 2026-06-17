<?php

use Emmadonjo\Naija\Naija;

/**
 * Counts how many times the file-reading layer is hit, so caching can be
 * verified by behaviour (no repeated disk I/O) rather than by timing, which
 * would be flaky under different hardware/CI load.
 */
class CountingNaija extends Naija
{
    public static int $fileReads = 0;

    protected static function getFile(mixed $filePath): bool|string
    {
        static::$fileReads++;

        return parent::getFile($filePath);
    }
}

function resetNaijaCache(): void
{
    $property = new ReflectionProperty(Naija::class, 'states');
    $property->setAccessible(true);
    $property->setValue(null, []);
}

beforeEach(function () {
    resetNaijaCache();
    CountingNaija::$fileReads = 0;
});

test('repeated lookups of the same state are served from cache, not re-read from disk', function () {
    CountingNaija::state('Abia');
    CountingNaija::state('Abia');
    CountingNaija::state('Abia');

    expect(CountingNaija::$fileReads)->toBe(1);
});

test('looking up different states only reads each file once', function () {
    CountingNaija::state('Abia');
    CountingNaija::state('Lagos');
    CountingNaija::state('Abia');
    CountingNaija::state('Lagos');
    CountingNaija::state('Abia');

    expect(CountingNaija::$fileReads)->toBe(2);
});

test('the cache is case and whitespace insensitive, so lookups still hit the cache', function () {
    CountingNaija::state('abia');
    CountingNaija::state('  ABIA ');
    CountingNaija::state('Abia');

    expect(CountingNaija::$fileReads)->toBe(1);
});

test('loading every state once completes within a sane time budget', function () {
    $states = array_keys(Naija::states());

    $start = hrtime(true);

    foreach ($states as $name) {
        $state = Naija::state($name);
        // touch the most expensive derived getter too, since it merges and
        // sorts every LGA's areas for the whole state
        $state->getAreas();
    }

    $elapsedMs = (hrtime(true) - $start) / 1_000_000;

    // Generous budget: loading + parsing + flattening areas for all 37
    // states should be near-instant. This is a regression guard against
    // accidentally introducing quadratic behaviour or massively bloated
    // data, not a tight performance benchmark.
    expect($elapsedMs)->toBeLessThan(3000);
});

test('re-fetching all states a second time is markedly faster due to caching', function () {
    $states = array_keys(Naija::states());

    foreach ($states as $name) {
        Naija::state($name);
    }

    $start = hrtime(true);
    foreach ($states as $name) {
        Naija::state($name);
    }
    $cachedElapsedMs = (hrtime(true) - $start) / 1_000_000;

    // Purely cached lookups (no disk I/O, no json_decode) for all 37 states
    // should be extremely fast.
    expect($cachedElapsedMs)->toBeLessThan(50);
});
