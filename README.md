<p align="center">
<a href="https://github.com/emmadonjo/naija/actions"><img src="https://github.com/emmadonjo/naija/actions/workflows/tests.yml/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/emmadonjo/naija"><img src="https://img.shields.io/packagist/dt/emmadonjo/naija" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/emmadonjo/naija"><img src="https://img.shields.io/packagist/v/emmadonjo/naija" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/emmadonjo/naija"><img src="https://img.shields.io/packagist/l/emmadonjo/naija" alt="License"></a>
</p>

Naija is a PHP package that provides data about States, Local Government Areas, cities, and towns in Nigeria.

This package is inspired by [https://github.com/Mercyware/Nigerian-States](https://github.com/Mercyware/Nigerian-States).

With this package you can retrieve the following state-related information:

-   Name
-   Capital
-   Political Zone
-   Creation Date
-   Polution - Male and female
-   Website
-   Logo
-   Flag
-   Nick Name
-   Languages
-   Local Governments Areas
-   Areas - villages, towns, and cities

## Usage

Install via:

```php
    composer require emmadonjo/naija
```

```php
use Emmadonjo\Naija\Naija;

// get list of states with minimal information
$states = Naija::states();

// get the comprehensive information of a state
$state = Naija::state('Abia');

// get name
$state->getName();

// get nick name
$state->getNickName();

// get official name
$state->getOfficialName();

// get short code
$state->getShortCode();

// get capital
$state->getCapital();

// get geo political zone
$state->getGeoPoliticalZone();

// get date created
$state->getDateCreated();

// get population
$state->getPopulation();

// get website
$state->getWebsite();

// get logo
$state->getLogo();

// get flag
$state->getFlag();


// get languages
$state->getLanguages();

// get LGAs
$state->getLgas();

// get areas - villages, cities, and towns
$state->getAreas();
```

**Display assets - logos and flags**
To display logos and flags of states, you can copy the assets to the `images` folder in the accessible location of your application.

For example, if you are developing with laravel, copy:

-   `resources/logos` to `public/images/logos`, and
-   `resources/flags` to `public/images/flags`

Then you can access the assets as follows:

-   `/images/logos/abia.png`
-   `/images/flags/abia.png`

## To Do

-   Populate areas (villages, cities, and towns) for most of the remaining states

## Sources

-   [https://currentaffairs.ng/state/](https://currentaffairs.ng/state/)
-   [https://en.wikipedia.org/wiki/States_of_Nigeria](https://en.wikipedia.org/wiki/States_of_Nigeria)
-   [https://www.nipc.gov.ng/nigeria-states/abia-state/](https://www.nipc.gov.ng/nigeria-states/abia-state/)
-   [https://en.wikipedia.org/wiki/List_of_nicknames_of_Nigerian_states](https://en.wikipedia.org/wiki/List_of_nicknames_of_Nigerian_states)
-   [https://www.mindat.org/feature-8636368.html](https://www.mindat.org/feature-8636368.html)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Osun_State](https://en.wikipedia.org/wiki/List_of_villages_in_Osun_State)
