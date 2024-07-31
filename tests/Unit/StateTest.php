<?php

use Emmadonjo\Naija\State;

test("Retrieve state attributes", function () {
    $data = json_decode(file_get_contents(__DIR__ . "/../../resources/data/abia.json"), true);

    $state = new State($data);

    expect($state->getAttributes())->toBeArray();
    expect($state->getName())->toBe('Abia');
    expect($state->getOfficialName())->toBe('Abia State');
    expect($state->getOfficialName())->toBe('Abia State');
    expect($state->getStateCapital())->toBe('Umuahia');
    expect($state->getGeoPoliticalZone())->toBe('South East');
    expect($state->getDateCreated())->toBe('27-08-1991');
    
    $population = $state->getPopulation();
    expect($population['male'])->toEqual(2006420);
    expect($population['female'])->toEqual(1927737);

    expect($state->getStateWebsite())->toBe('https://abiastate.gov.ng');
    expect($state->getStateLogo())->toBe('/images/logos/abia.png');
    expect($state->getStateFlag())->toBeEmpty();
    expect($state->getStateDemonym())->toBeEmpty();
    expect($state->getStateNickName())->toBe("God's Own State");

    expect(count($state->getStateLanguages()))->toEqual(2);
    expect(count($state->getStateLgas()))->toEqual(14);
    expect(count($state->getStateAreas()))->toEqual(131);
});
