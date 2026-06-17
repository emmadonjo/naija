<?php

use Emmadonjo\Naija\Naija;

/**
 * These tests guard the structural contract of every state JSON file in
 * resources/data/*.json. The data is hand-maintained, so the most likely
 * regressions are copy-paste mistakes between files (e.g. one state's LGA
 * carrying another state's official name), missing/duplicate LGAs, and
 * empty area lists — exactly the class of bugs found and fixed across this
 * dataset. Catching them here is cheaper than catching them in production.
 */

function dataFiles(): array
{
    $files = glob(__DIR__ . '/../../resources/data/*.json');

    return array_values(array_filter($files, fn ($file) => basename($file) !== 'states.json'));
}

dataset('state_files', fn () => dataFiles());

test('every state file is present and matches the minified states index', function () {
    $states = Naija::states();
    $fileKeys = array_map(fn ($file) => basename($file, '.json'), dataFiles());

    expect(count($fileKeys))->toEqual(37);
    expect(array_diff($fileKeys, array_keys($states)))->toBeEmpty();
    expect(array_diff(array_keys($states), $fileKeys))->toBeEmpty();
});

test('state file contains valid, non-empty JSON', function (string $file) {
    $contents = file_get_contents($file);
    $data = json_decode($contents, true);

    expect(json_last_error())->toBe(JSON_ERROR_NONE);
    expect($data)->toBeArray();
})->with('state_files');

test('state file has the required top-level structure', function (string $file) {
    $data = json_decode(file_get_contents($file), true);

    expect($data)->toHaveKeys([
        'name', 'capital', 'political_zone', 'date_created',
        'population', 'website', 'logo', 'flag', 'demonym',
        'nick_name', 'languages', 'lga',
    ]);

    expect($data['name'])->toHaveKeys(['common', 'official', 'short_code']);
    expect($data['name']['common'])->toBeString()->not->toBeEmpty();
    expect($data['name']['official'])->toBeString()->not->toBeEmpty();
    expect($data['name']['short_code'])->toBeString();
    expect(trim($data['name']['common']))->toBe($data['name']['common']);

    expect($data['capital'])->toBeString()->not->toBeEmpty();
    expect($data['political_zone'])->toBeString()->not->toBeEmpty();

    expect($data['population'])->toHaveKeys(['male', 'female']);
    expect($data['population']['male'])->toBeInt()->toBeGreaterThan(0);
    expect($data['population']['female'])->toBeInt()->toBeGreaterThan(0);

    expect($data['languages'])->toBeArray()->not->toBeEmpty();
    expect($data['languages'])->toHaveKey('english');
})->with('state_files');

test('state file has at least one LGA and LGA keys are sequential from 1', function (string $file) {
    $data = json_decode(file_get_contents($file), true);

    expect($data['lga'])->toBeArray()->not->toBeEmpty();

    $expectedKeys = array_map('strval', range(1, count($data['lga'])));
    expect(array_keys($data['lga']))->toEqual($expectedKeys);
})->with('state_files');

test('every LGA has a well-formed name, official title, and non-empty unique areas', function (string $file) {
    $data = json_decode(file_get_contents($file), true);

    $seenNames = [];

    foreach ($data['lga'] as $key => $lga) {
        expect($lga)->toHaveKeys(['name', 'official', 'areas'], "LGA \"$key\" in $file is missing a required key");

        $name = $lga['name'];
        expect($name)->toBeString()->not->toBeEmpty();
        expect(trim($name))->toBe($name, "LGA name \"$name\" in $file has leading/trailing whitespace");

        $lower = mb_strtolower($name);
        expect($seenNames)->not->toHaveKey($lower, "Duplicate LGA name \"$name\" in $file");
        $seenNames[$lower] = true;

        // Catches copy-paste bugs where an LGA's "official" field was lifted
        // from a different state/LGA entirely (e.g. "Bonny Local Government"
        // showing up inside Sokoto State).
        expect($lga['official'])->toStartWith($name, "Official title for \"$name\" in $file does not start with the LGA name — possible copy-paste bug");
        // The Federal Capital Territory uses "Area Council" instead of
        // "Local Government" for its subdivisions — both are legitimate.
        $endsWithExpectedSuffix = str_ends_with($lga['official'], 'Local Government')
            || str_ends_with($lga['official'], 'Area Council');
        expect($endsWithExpectedSuffix)->toBeTrue("Official title for \"$name\" in $file does not end with \"Local Government\" or \"Area Council\"");

        expect($lga['areas'])->toBeArray()->not->toBeEmpty("LGA \"$name\" in $file has no areas populated");

        $lowerAreas = array_map('mb_strtolower', $lga['areas']);
        expect(array_unique($lowerAreas))->toHaveCount(count($lowerAreas), "LGA \"$name\" in $file has duplicate area entries");

        foreach ($lga['areas'] as $area) {
            expect($area)->toBeString()->not->toBeEmpty();
            expect(trim($area))->toBe($area, "Area \"$area\" in LGA \"$name\" ($file) has leading/trailing whitespace");
        }
    }
})->with('state_files');
