<?php

use Emmadonjo\Naija\State;

test("Retrieve state attributes", function () {
    $data = json_decode(file_get_contents(__DIR__ . "/../../resources/data/abia.json"), true);

    $state = new State($data);

    expect($state->getAttributes())->toBeArray();
    expect($state->getName())->toBe('Abia');
    expect($state->getOfficialName())->toBe('Abia State');
    expect($state->getShortCode())->toBe('AB');
    expect($state->getCapital())->toBe('Umuahia');
    expect($state->getGeoPoliticalZone())->toBe('South East');
    expect($state->getDateCreated())->toBe('27-08-1991');

    $population = $state->getPopulation();
    expect($population['male'])->toEqual(2006420);
    expect($population['female'])->toEqual(1927737);

    expect($state->getWebsite())->toBe('https://abiastate.gov.ng');
    expect($state->getLogo())->toBe('/images/logos/abia.png');
    expect($state->getFlag())->toBeEmpty();
    expect($state->getDemonym())->toBeEmpty();
    expect($state->getNickName())->toBe("God's Own State");

    expect($state->getLanguages())->toBe([
        'english' => 'English',
        'igbo' => 'Igbo'
    ]);
    expect(count($state->getLanguages()))->toEqual(2);
    expect(count($state->getLgas()))->toEqual(14);
    expect(count($state->getAreas()))->toEqual(253);
});

test('set an attribute', function () {
    $state = new State([]);

    $state->set('name.common', 'Abia');

    expect($state->getName())->toBe('Abia');
});

test("set attributes", function () {
    $data = json_decode(file_get_contents(__DIR__ . "/../../resources/data/abia.json"), true);

    $state = new State([]);

    $state->setAttributes($data);

    expect($state->get('name.common'))->toBe('Abia');
});

test("get an attribute with empty key given", function () {
    $data = json_decode(file_get_contents(__DIR__ . "/../../resources/data/abia.json"), true);

    $state = new State([]);

    $state->setAttributes($data);

    expect($state->get())->toBeArray();
});
