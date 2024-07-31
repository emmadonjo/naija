<?php

use Emmadonjo\Naija\Exception\StateException;
use Emmadonjo\Naija\State;
use Emmadonjo\Naija\Loader;


test('load minified states data', function () {
    $states = Loader::states();

    expect($states)->toBeArray();

    expect(count($states))->toEqual(37);
});

test('load the data of a state', function () {
    $state = Loader::state('Abia');

    expect($state)->toBeInstanceOf(State::class);

    expect($state->getName())->toBe("Abia");
});

test('Throw exception for invalid state name', function () {
    Loader::state('Abi');
})
    ->throws(StateException::class);

test("Load state data irrespective of case", function () {
    $state = Loader::state('aBiA');

    expect($state)->toBeInstanceOf(State::class);

    expect($state->getName())->toBe("Abia");
});

test("Load state data irrespective of trailing spaces and case", function () {
    $state = Loader::state('  aBiA ');

    expect($state)->toBeInstanceOf(State::class);

    expect($state->getName())->toBe("Abia");
});

test("Filter states", function () {
    $states = Loader::where('name', "Abia");

    expect(count($states))->toEqual(1);

    expect(array_values($states)[0]['name'])->toBe("Abia");
});

test("Filter states with an operator", function () {
    $states = Loader::where('name', "!=", "Abia");

    expect(count($states))->toEqual(36);

    expect(array_values($states)[0]['name'])->toBe("Adamawa");
});

