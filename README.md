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
-   Population - Male and female
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

// get all the attributes of a state
$state->getAttributes();

// get name
$state->getName();

// get nickname
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

-   **Wikipedia**
    -   [https://en.wikipedia.org/wiki/States_of_Nigeria](https://en.wikipedia.org/wiki/States_of_Nigeria)
    -   [https://en.wikipedia.org/wiki/List_of_nicknames_of_Nigerian_states](https://en.wikipedia.org/wiki/List_of_nicknames_of_Nigerian_states)
    -   [https://en.wikipedia.org/wiki/List_of_villages_in_Osun_State](https://en.wikipedia.org/wiki/List_of_villages_in_Osun_State)
    -   [https://en.wikipedia.org/wiki/List_of_villages_in_Adamawa_State](https://en.wikipedia.org/wiki/List_of_villages_in_Adamawa_State)
    -   [https://en.wikipedia.org/wiki/Akwa_Ibom_State](https://en.wikipedia.org/wiki/Akwa_Ibom_State)
    -   [https://en.wikipedia.org/wiki/List_of_villages_in_Akwa_Ibom_State](https://en.wikipedia.org/wiki/List_of_villages_in_Akwa_Ibom_State)
    -   [https://en.wikipedia.org/wiki/Anambra_State](https://en.wikipedia.org/wiki/Anambra_State)
    -   [https://en.wikipedia.org/wiki/Onitsha](https://en.wikipedia.org/wiki/Onitsha)
    -   [https://en.wikipedia.org/wiki/Ogbaru](https://en.wikipedia.org/wiki/Ogbaru)
    -   [https://en.wikipedia.org/wiki/Ayamelum](https://en.wikipedia.org/wiki/Ayamelum)
    -   [https://en.wikipedia.org/wiki/Bauchi_State](https://en.wikipedia.org/wiki/Bauchi_State)
    -   [https://en.wikipedia.org/wiki/List_of_villages_in_Bauchi_State](https://en.wikipedia.org/wiki/List_of_villages_in_Bauchi_State)
    -   [https://en.wikipedia.org/wiki/Bayelsa_State](https://en.wikipedia.org/wiki/Bayelsa_State)
    -   [https://en.wikipedia.org/wiki/List_of_villages_in_Bayelsa_State](https://en.wikipedia.org/wiki/List_of_villages_in_Bayelsa_State)
    -   [https://en.wikipedia.org/wiki/Yenagoa](https://en.wikipedia.org/wiki/Yenagoa)
    -   [https://en.wikipedia.org/wiki/Ogbia_Local_Government_Area](https://en.wikipedia.org/wiki/Ogbia_Local_Government_Area)
    -   [https://en.wikipedia.org/wiki/Southern_Ijaw_Local_Government_Area](https://en.wikipedia.org/wiki/Southern_Ijaw_Local_Government_Area)
    -   [https://en.wikipedia.org/wiki/Benue_State](https://en.wikipedia.org/wiki/Benue_State)
    -   [https://en.wikipedia.org/wiki/List_of_villages_in_Benue_State](https://en.wikipedia.org/wiki/List_of_villages_in_Benue_State)
    -   [https://en.wikipedia.org/wiki/Makurdi](https://en.wikipedia.org/wiki/Makurdi)
    -   [https://en.wikipedia.org/wiki/Otukpo](https://en.wikipedia.org/wiki/Otukpo)
    -   [https://en.wikipedia.org/wiki/Borno_State](https://en.wikipedia.org/wiki/Borno_State)
    -   [https://en.wikipedia.org/wiki/List_of_villages_in_Borno_State](https://en.wikipedia.org/wiki/List_of_villages_in_Borno_State)
    -   [https://en.wikipedia.org/wiki/Maiduguri](https://en.wikipedia.org/wiki/Maiduguri)
    -   [https://en.wikipedia.org/wiki/Hawul_Local_Government_Area](https://en.wikipedia.org/wiki/Hawul_Local_Government_Area)
    -   [https://en.wikipedia.org/wiki/Cross_River_State](https://en.wikipedia.org/wiki/Cross_River_State)
    -   [https://en.wikipedia.org/wiki/List_of_villages_in_Cross_River_State](https://en.wikipedia.org/wiki/List_of_villages_in_Cross_River_State)
    -   [https://en.wikipedia.org/wiki/Abi,_Cross_River](https://en.wikipedia.org/wiki/Abi,_Cross_River)
    -   [https://en.wikipedia.org/wiki/Biase](https://en.wikipedia.org/wiki/Biase)
    -   [https://en.wikipedia.org/wiki/Yakurr](https://en.wikipedia.org/wiki/Yakurr)
    -   [https://en.wikipedia.org/wiki/Yala,_Nigeria](https://en.wikipedia.org/wiki/Yala,_Nigeria)
    -   [https://en.wikipedia.org/wiki/Delta_State](https://en.wikipedia.org/wiki/Delta_State)
    -   [https://en.wikipedia.org/wiki/List_of_villages_in_Delta_State](https://en.wikipedia.org/wiki/List_of_villages_in_Delta_State)
    -   [https://en.wikipedia.org/wiki/Aniocha_North](https://en.wikipedia.org/wiki/Aniocha_North)
    -   [https://en.wikipedia.org/wiki/Aniocha_South](https://en.wikipedia.org/wiki/Aniocha_South)
    -   [https://en.wikipedia.org/wiki/Bomadi](https://en.wikipedia.org/wiki/Bomadi)
    -   [https://en.wikipedia.org/wiki/Burutu](https://en.wikipedia.org/wiki/Burutu)
    -   [https://en.wikipedia.org/wiki/Ethiope_East](https://en.wikipedia.org/wiki/Ethiope_East)
    -   [https://en.wikipedia.org/wiki/Ika_North_East](https://en.wikipedia.org/wiki/Ika_North_East)
    -   [https://en.wikipedia.org/wiki/Ika_South](https://en.wikipedia.org/wiki/Ika_South)
    -   [https://en.wikipedia.org/wiki/Isoko_North](https://en.wikipedia.org/wiki/Isoko_North)
    -   [https://en.wikipedia.org/wiki/Isoko_South](https://en.wikipedia.org/wiki/Isoko_South)
    -   [https://en.wikipedia.org/wiki/Ndokwa_West](https://en.wikipedia.org/wiki/Ndokwa_West)
    -   [https://en.wikipedia.org/wiki/Ughelli_North](https://en.wikipedia.org/wiki/Ughelli_North)
    -   [https://en.wikipedia.org/wiki/Ughelli_South](https://en.wikipedia.org/wiki/Ughelli_South)
    -   [https://en.wikipedia.org/wiki/Uvwie](https://en.wikipedia.org/wiki/Uvwie)
    -   [https://en.wikipedia.org/wiki/Warri_South_West](https://en.wikipedia.org/wiki/Warri_South_West)
    -   [https://en.wikipedia.org/wiki/Ebonyi_State](https://en.wikipedia.org/wiki/Ebonyi_State)
    -   [https://en.wikipedia.org/wiki/List_of_villages_in_Ebonyi_State](https://en.wikipedia.org/wiki/List_of_villages_in_Ebonyi_State)
    -   [https://en.wikipedia.org/wiki/Afikpo_North](https://en.wikipedia.org/wiki/Afikpo_North)
    -   [https://en.wikipedia.org/wiki/Afikpo_South](https://en.wikipedia.org/wiki/Afikpo_South)
    -   [https://en.wikipedia.org/wiki/Ezza_South](https://en.wikipedia.org/wiki/Ezza_South)
    -   [https://en.wikipedia.org/wiki/Ikwo_(local_government)](https://en.wikipedia.org/wiki/Ikwo_(local_government))
    -   [https://en.wikipedia.org/wiki/Ishielu](https://en.wikipedia.org/wiki/Ishielu)
    -   [https://en.wikipedia.org/wiki/Izzi_(Ebonyi)](https://en.wikipedia.org/wiki/Izzi_(Ebonyi))
    -   [https://en.wikipedia.org/wiki/Ohaozara](https://en.wikipedia.org/wiki/Ohaozara)
    -   [https://en.wikipedia.org/wiki/Ohaukwu](https://en.wikipedia.org/wiki/Ohaukwu)
    -   [https://en.wikipedia.org/wiki/Onicha,_Ebonyi](https://en.wikipedia.org/wiki/Onicha,_Ebonyi)
    -   [https://en.wikipedia.org/wiki/Edo_State](https://en.wikipedia.org/wiki/Edo_State)
    -   [https://en.wikipedia.org/wiki/List_of_villages_in_Edo_State](https://en.wikipedia.org/wiki/List_of_villages_in_Edo_State)
    -   [https://en.wikipedia.org/wiki/Akoko_Edo](https://en.wikipedia.org/wiki/Akoko_Edo)
    -   [https://en.wikipedia.org/wiki/Egor](https://en.wikipedia.org/wiki/Egor)
    -   [https://en.wikipedia.org/wiki/Esan_Central](https://en.wikipedia.org/wiki/Esan_Central)
    -   [https://en.wikipedia.org/wiki/Esan_North-East](https://en.wikipedia.org/wiki/Esan_North-East)
    -   [https://en.wikipedia.org/wiki/Esan_South-East](https://en.wikipedia.org/wiki/Esan_South-East)
    -   [https://en.wikipedia.org/wiki/Esan_West](https://en.wikipedia.org/wiki/Esan_West)
    -   [https://en.wikipedia.org/wiki/Etsako_Central](https://en.wikipedia.org/wiki/Etsako_Central)
    -   [https://en.wikipedia.org/wiki/Etsako_East](https://en.wikipedia.org/wiki/Etsako_East)
    -   [https://en.wikipedia.org/wiki/Etsako_West](https://en.wikipedia.org/wiki/Etsako_West)
    -   [https://en.wikipedia.org/wiki/Igueben](https://en.wikipedia.org/wiki/Igueben)
    -   [https://en.wikipedia.org/wiki/Ikpoba_Okha](https://en.wikipedia.org/wiki/Ikpoba_Okha)
    -   [https://en.wikipedia.org/wiki/Oredo](https://en.wikipedia.org/wiki/Oredo)
    -   [https://en.wikipedia.org/wiki/Orhionmwon](https://en.wikipedia.org/wiki/Orhionmwon)
    -   [https://en.wikipedia.org/wiki/Ovia_North-East](https://en.wikipedia.org/wiki/Ovia_North-East)
    -   [https://en.wikipedia.org/wiki/Ovia_South-West](https://en.wikipedia.org/wiki/Ovia_South-West)
    -   [https://en.wikipedia.org/wiki/Owan_East](https://en.wikipedia.org/wiki/Owan_East)
    -   [https://en.wikipedia.org/wiki/Owan_West](https://en.wikipedia.org/wiki/Owan_West)
    -   [https://en.wikipedia.org/wiki/Uhunmwonde](https://en.wikipedia.org/wiki/Uhunmwonde)
    -   [https://en.wikipedia.org/wiki/Ekiti_State](https://en.wikipedia.org/wiki/Ekiti_State)
    -   [https://en.wikipedia.org/wiki/List_of_villages_in_Ekiti_State](https://en.wikipedia.org/wiki/List_of_villages_in_Ekiti_State)
    -   [https://en.wikipedia.org/wiki/Ado_Ekiti](https://en.wikipedia.org/wiki/Ado_Ekiti)
    -   [https://en.wikipedia.org/wiki/Ekiti_East](https://en.wikipedia.org/wiki/Ekiti_East)
    -   [https://en.wikipedia.org/wiki/Omuo](https://en.wikipedia.org/wiki/Omuo)
    -   [https://en.wikipedia.org/wiki/Ekiti_South-West](https://en.wikipedia.org/wiki/Ekiti_South-West)
    -   [https://en.wikipedia.org/wiki/Ekiti_West](https://en.wikipedia.org/wiki/Ekiti_West)
    -   [https://en.wikipedia.org/wiki/Emure](https://en.wikipedia.org/wiki/Emure)
    -   [https://en.wikipedia.org/wiki/Ido-Osi](https://en.wikipedia.org/wiki/Ido-Osi)
    -   [https://en.wikipedia.org/wiki/Ijero_Ekiti](https://en.wikipedia.org/wiki/Ijero_Ekiti)
    -   [https://en.wikipedia.org/wiki/Ikere-Ekiti](https://en.wikipedia.org/wiki/Ikere-Ekiti)
    -   [https://en.wikipedia.org/wiki/Ikole](https://en.wikipedia.org/wiki/Ikole)
    -   [https://en.wikipedia.org/wiki/Ilejemeje](https://en.wikipedia.org/wiki/Ilejemeje)
    -   [https://en.wikipedia.org/wiki/Irepodun/Ifelodun](https://en.wikipedia.org/wiki/Irepodun/Ifelodun)
    -   [https://en.wikipedia.org/wiki/Ise/Orun](https://en.wikipedia.org/wiki/Ise/Orun)
    -   [https://en.wikipedia.org/wiki/Gbonyin](https://en.wikipedia.org/wiki/Gbonyin)
    -   [https://en.wikipedia.org/wiki/Oye,_Ekiti](https://en.wikipedia.org/wiki/Oye,_Ekiti)
    -   [https://en.wikipedia.org/wiki/Moba,_Nigeria](https://en.wikipedia.org/wiki/Moba,_Nigeria)

-   **NIPC** (Nigerian Investment Promotion Commission)
    -   [https://www.nipc.gov.ng/nigeria-states/abia-state/](https://www.nipc.gov.ng/nigeria-states/abia-state/)
    -   [https://www.nipc.gov.ng/nigeria-states/adamawa-state/](https://www.nipc.gov.ng/nigeria-states/adamawa-state/)
    -   [https://www.nipc.gov.ng/nigeria-states/ebonyi-state/](https://www.nipc.gov.ng/nigeria-states/ebonyi-state/)
    -   [https://www.nipc.gov.ng/nigeria-states/edo-state/](https://www.nipc.gov.ng/nigeria-states/edo-state/)

-   **INEC Nigeria**
    -   [https://inecnigeria.org/wp-content/uploads/2019/02/ADAMAWA-LGA.pdf](https://inecnigeria.org/wp-content/uploads/2019/02/ADAMAWA-LGA.pdf)
    -   [https://www.inecnigeria.org/wp-content/uploads/2019/02/PU_Directory_Revised_January_2015_Akwa_Ibom.pdf](https://www.inecnigeria.org/wp-content/uploads/2019/02/PU_Directory_Revised_January_2015_Akwa_Ibom.pdf)
    -   [https://www.inecnigeria.org/wp-content/uploads/2019/02/PU_Directory_Revised_January_2015_Ebonyi.pdf](https://www.inecnigeria.org/wp-content/uploads/2019/02/PU_Directory_Revised_January_2015_Ebonyi.pdf)
    -   [https://www.inecnigeria.org/wp-content/uploads/2019/02/EDO-STATE-LGA.pdf](https://www.inecnigeria.org/wp-content/uploads/2019/02/EDO-STATE-LGA.pdf)

-   **Nigeria Housing Market**
    -   [https://www.nigeriahousingmarket.com/guides/local-government-adamawa-list-headquarters](https://www.nigeriahousingmarket.com/guides/local-government-adamawa-list-headquarters)
    -   [https://www.nigeriahousingmarket.com/guides/cross-river/local-government-list-headquarters-2026](https://www.nigeriahousingmarket.com/guides/cross-river/local-government-list-headquarters-2026)
    -   [https://www.nigeriahousingmarket.com/guides/ebonyi/local-government-list-headquarters-2026](https://www.nigeriahousingmarket.com/guides/ebonyi/local-government-list-headquarters-2026)
    -   [https://www.nigeriahousingmarket.com/guides/local-government-edo-list-headquarters](https://www.nigeriahousingmarket.com/guides/local-government-edo-list-headquarters)
    -   [https://www.nigeriahousingmarket.com/guides/ekiti/local-government-list-headquarters-2026](https://www.nigeriahousingmarket.com/guides/ekiti/local-government-list-headquarters-2026)

-   **Legit.ng**
    -   [https://www.legit.ng/1210013-local-governments-anambra-state-towns.html](https://www.legit.ng/1210013-local-governments-anambra-state-towns.html)
    -   [https://www.legit.ng/1211230-18-local-governments-cross-river-state-headquarters.html](https://www.legit.ng/1211230-18-local-governments-cross-river-state-headquarters.html)

-   **Media Nigeria**
    -   [https://www.medianigeria.com/list-of-towns-and-villages-in-bekwarra-cross-river-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-bekwarra-cross-river-state/)
    -   [https://www.medianigeria.com/list-of-towns-and-villages-in-yala-cross-river-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-yala-cross-river-state/)
    -   [https://www.medianigeria.com/list-of-towns-and-villages-in-emure-l-g-a-ekiti-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-emure-l-g-a-ekiti-state/)
    -   [https://www.medianigeria.com/list-of-towns-and-villages-in-oye-l-g-a-ekiti-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-oye-l-g-a-ekiti-state/)
    -   [https://www.medianigeria.com/history-of-moba-lga-ekiti-state/](https://www.medianigeria.com/history-of-moba-lga-ekiti-state/)

-   **Current Affairs NG**
    -   [https://currentaffairs.ng/state/](https://currentaffairs.ng/state/)

-   **Mindat.org**
    -   [https://www.mindat.org/feature-8636368.html](https://www.mindat.org/feature-8636368.html)

-   **Soluap**
    -   [https://soluap.com/adamawa-list-of-226-council-wards-and-21-local-government-areas/](https://soluap.com/adamawa-list-of-226-council-wards-and-21-local-government-areas/)

-   **Geo MyCyber**
    -   [https://geo.mycyber.org/nigeria/anambra-west/](https://geo.mycyber.org/nigeria/anambra-west/)
    -   [https://geo.mycyber.org/nigeria/ado-ekiti-lga/](https://geo.mycyber.org/nigeria/ado-ekiti-lga/)
    -   [https://geo.mycyber.org/nigeria/efon-alaaye-lga/](https://geo.mycyber.org/nigeria/efon-alaaye-lga/)
    -   [https://geo.mycyber.org/nigeria/ijero-ekiti-lga/](https://geo.mycyber.org/nigeria/ijero-ekiti-lga/)
    -   [https://geo.mycyber.org/nigeria/ikere-ekiti-town-arean/](https://geo.mycyber.org/nigeria/ikere-ekiti-town-arean/)
    -   [https://geo.mycyber.org/nigeria/ikole-lga/](https://geo.mycyber.org/nigeria/ikole-lga/)
    -   [https://geo.mycyber.org/nigeria/ise-orun-lga/](https://geo.mycyber.org/nigeria/ise-orun-lga/)
    -   [https://geo.mycyber.org/nigeria/moba-lga/](https://geo.mycyber.org/nigeria/moba-lga/)
    -   [https://geo.mycyber.org/nigeria/oye-lga/](https://geo.mycyber.org/nigeria/oye-lga/)

-   **Cross River Hub**
    -   [https://www.crossriverhub.com/about-yakurr-local-government-area/](https://www.crossriverhub.com/about-yakurr-local-government-area/)

-   **Akwa Ibom State Government**
    -   [https://akwaibomstate.gov.ng/local-government-areas-in-akwa-ibom-state/](https://akwaibomstate.gov.ng/local-government-areas-in-akwa-ibom-state/)

-   **Bauchi State Government**
    -   [https://www.bauchistate.gov.ng](https://www.bauchistate.gov.ng)

-   **Cross River State Government**
    -   [https://www.crossriverstate.gov.ng](https://www.crossriverstate.gov.ng)

-   **Ebonyi State Government**
    -   [https://ebonyistate.gov.ng](https://ebonyistate.gov.ng)

-   **Edo State Government**
    -   [https://edostate.gov.ng](https://edostate.gov.ng)

-   **Ekiti State Government**
    -   [https://www.ekitistate.gov.ng/about-ekiti/local-government](https://www.ekitistate.gov.ng/about-ekiti/local-government)

-   **Vanguard Nigeria**
    -   [https://www.vanguardngr.com/2023/05/renaming-of-afikpo-south-lga-remains-significant-feat-ukpai/](https://www.vanguardngr.com/2023/05/renaming-of-afikpo-south-lga-remains-significant-feat-ukpai/)
