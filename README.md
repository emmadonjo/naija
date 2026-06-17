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

## Sources

### General

-   [https://en.wikipedia.org/wiki/States_of_Nigeria](https://en.wikipedia.org/wiki/States_of_Nigeria)
-   [https://en.wikipedia.org/wiki/List_of_nicknames_of_Nigerian_states](https://en.wikipedia.org/wiki/List_of_nicknames_of_Nigerian_states)
-   [https://currentaffairs.ng/state/](https://currentaffairs.ng/state/)

### Abia State

-   [https://en.wikipedia.org/wiki/Abia_State](https://en.wikipedia.org/wiki/Abia_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Abia_State](https://en.wikipedia.org/wiki/List_of_villages_in_Abia_State)
-   [https://www.nipc.gov.ng/nigeria-states/abia-state/](https://www.nipc.gov.ng/nigeria-states/abia-state/)
-   [https://abiastate.gov.ng](https://abiastate.gov.ng)

### Adamawa State

-   [https://en.wikipedia.org/wiki/List_of_villages_in_Adamawa_State](https://en.wikipedia.org/wiki/List_of_villages_in_Adamawa_State)
-   [https://www.nipc.gov.ng/nigeria-states/adamawa-state/](https://www.nipc.gov.ng/nigeria-states/adamawa-state/)
-   [https://inecnigeria.org/wp-content/uploads/2019/02/ADAMAWA-LGA.pdf](https://inecnigeria.org/wp-content/uploads/2019/02/ADAMAWA-LGA.pdf)
-   [https://www.nigeriahousingmarket.com/guides/local-government-adamawa-list-headquarters](https://www.nigeriahousingmarket.com/guides/local-government-adamawa-list-headquarters)
-   [https://soluap.com/adamawa-list-of-226-council-wards-and-21-local-government-areas/](https://soluap.com/adamawa-list-of-226-council-wards-and-21-local-government-areas/)

### Akwa Ibom State

-   [https://en.wikipedia.org/wiki/Akwa_Ibom_State](https://en.wikipedia.org/wiki/Akwa_Ibom_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Akwa_Ibom_State](https://en.wikipedia.org/wiki/List_of_villages_in_Akwa_Ibom_State)
-   [https://www.inecnigeria.org/wp-content/uploads/2019/02/PU_Directory_Revised_January_2015_Akwa_Ibom.pdf](https://www.inecnigeria.org/wp-content/uploads/2019/02/PU_Directory_Revised_January_2015_Akwa_Ibom.pdf)
-   [https://akwaibomstate.gov.ng/local-government-areas-in-akwa-ibom-state/](https://akwaibomstate.gov.ng/local-government-areas-in-akwa-ibom-state/)

### Anambra State

-   [https://en.wikipedia.org/wiki/Anambra_State](https://en.wikipedia.org/wiki/Anambra_State)
-   [https://en.wikipedia.org/wiki/Onitsha](https://en.wikipedia.org/wiki/Onitsha)
-   [https://en.wikipedia.org/wiki/Ogbaru](https://en.wikipedia.org/wiki/Ogbaru)
-   [https://en.wikipedia.org/wiki/Ayamelum](https://en.wikipedia.org/wiki/Ayamelum)
-   [https://www.legit.ng/1210013-local-governments-anambra-state-towns.html](https://www.legit.ng/1210013-local-governments-anambra-state-towns.html)
-   [https://geo.mycyber.org/nigeria/anambra-west/](https://geo.mycyber.org/nigeria/anambra-west/)
-   [https://www.mindat.org/feature-8636368.html](https://www.mindat.org/feature-8636368.html)

### Bauchi State

-   [https://en.wikipedia.org/wiki/Bauchi_State](https://en.wikipedia.org/wiki/Bauchi_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Bauchi_State](https://en.wikipedia.org/wiki/List_of_villages_in_Bauchi_State)
-   [https://www.bauchistate.gov.ng](https://www.bauchistate.gov.ng)

### Bayelsa State

-   [https://en.wikipedia.org/wiki/Bayelsa_State](https://en.wikipedia.org/wiki/Bayelsa_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Bayelsa_State](https://en.wikipedia.org/wiki/List_of_villages_in_Bayelsa_State)
-   [https://en.wikipedia.org/wiki/Yenagoa](https://en.wikipedia.org/wiki/Yenagoa)
-   [https://en.wikipedia.org/wiki/Ogbia_Local_Government_Area](https://en.wikipedia.org/wiki/Ogbia_Local_Government_Area)
-   [https://en.wikipedia.org/wiki/Southern_Ijaw_Local_Government_Area](https://en.wikipedia.org/wiki/Southern_Ijaw_Local_Government_Area)

### Benue State

-   [https://en.wikipedia.org/wiki/Benue_State](https://en.wikipedia.org/wiki/Benue_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Benue_State](https://en.wikipedia.org/wiki/List_of_villages_in_Benue_State)
-   [https://en.wikipedia.org/wiki/Makurdi](https://en.wikipedia.org/wiki/Makurdi)
-   [https://en.wikipedia.org/wiki/Otukpo](https://en.wikipedia.org/wiki/Otukpo)

### Borno State

-   [https://en.wikipedia.org/wiki/Borno_State](https://en.wikipedia.org/wiki/Borno_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Borno_State](https://en.wikipedia.org/wiki/List_of_villages_in_Borno_State)
-   [https://en.wikipedia.org/wiki/Maiduguri](https://en.wikipedia.org/wiki/Maiduguri)
-   [https://en.wikipedia.org/wiki/Hawul_Local_Government_Area](https://en.wikipedia.org/wiki/Hawul_Local_Government_Area)

### Cross River State

-   [https://en.wikipedia.org/wiki/Cross_River_State](https://en.wikipedia.org/wiki/Cross_River_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Cross_River_State](https://en.wikipedia.org/wiki/List_of_villages_in_Cross_River_State)
-   [https://en.wikipedia.org/wiki/Abi,_Cross_River](https://en.wikipedia.org/wiki/Abi,_Cross_River)
-   [https://en.wikipedia.org/wiki/Biase](https://en.wikipedia.org/wiki/Biase)
-   [https://en.wikipedia.org/wiki/Yakurr](https://en.wikipedia.org/wiki/Yakurr)
-   [https://en.wikipedia.org/wiki/Yala,_Nigeria](https://en.wikipedia.org/wiki/Yala,_Nigeria)
-   [https://www.nigeriahousingmarket.com/guides/cross-river/local-government-list-headquarters-2026](https://www.nigeriahousingmarket.com/guides/cross-river/local-government-list-headquarters-2026)
-   [https://www.legit.ng/1211230-18-local-governments-cross-river-state-headquarters.html](https://www.legit.ng/1211230-18-local-governments-cross-river-state-headquarters.html)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-bekwarra-cross-river-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-bekwarra-cross-river-state/)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-yala-cross-river-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-yala-cross-river-state/)
-   [https://www.crossriverhub.com/about-yakurr-local-government-area/](https://www.crossriverhub.com/about-yakurr-local-government-area/)
-   [https://www.crossriverstate.gov.ng](https://www.crossriverstate.gov.ng)

### Delta State

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

### Ebonyi State

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
-   [https://www.nipc.gov.ng/nigeria-states/ebonyi-state/](https://www.nipc.gov.ng/nigeria-states/ebonyi-state/)
-   [https://www.inecnigeria.org/wp-content/uploads/2019/02/PU_Directory_Revised_January_2015_Ebonyi.pdf](https://www.inecnigeria.org/wp-content/uploads/2019/02/PU_Directory_Revised_January_2015_Ebonyi.pdf)
-   [https://www.nigeriahousingmarket.com/guides/ebonyi/local-government-list-headquarters-2026](https://www.nigeriahousingmarket.com/guides/ebonyi/local-government-list-headquarters-2026)
-   [https://ebonyistate.gov.ng](https://ebonyistate.gov.ng)
-   [https://www.vanguardngr.com/2023/05/renaming-of-afikpo-south-lga-remains-significant-feat-ukpai/](https://www.vanguardngr.com/2023/05/renaming-of-afikpo-south-lga-remains-significant-feat-ukpai/)

### Edo State

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
-   [https://www.nipc.gov.ng/nigeria-states/edo-state/](https://www.nipc.gov.ng/nigeria-states/edo-state/)
-   [https://www.inecnigeria.org/wp-content/uploads/2019/02/EDO-STATE-LGA.pdf](https://www.inecnigeria.org/wp-content/uploads/2019/02/EDO-STATE-LGA.pdf)
-   [https://www.nigeriahousingmarket.com/guides/local-government-edo-list-headquarters](https://www.nigeriahousingmarket.com/guides/local-government-edo-list-headquarters)
-   [https://edostate.gov.ng](https://edostate.gov.ng)

### Ekiti State

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
-   [https://www.nigeriahousingmarket.com/guides/ekiti/local-government-list-headquarters-2026](https://www.nigeriahousingmarket.com/guides/ekiti/local-government-list-headquarters-2026)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-emure-l-g-a-ekiti-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-emure-l-g-a-ekiti-state/)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-oye-l-g-a-ekiti-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-oye-l-g-a-ekiti-state/)
-   [https://www.medianigeria.com/history-of-moba-lga-ekiti-state/](https://www.medianigeria.com/history-of-moba-lga-ekiti-state/)
-   [https://geo.mycyber.org/nigeria/ado-ekiti-lga/](https://geo.mycyber.org/nigeria/ado-ekiti-lga/)
-   [https://geo.mycyber.org/nigeria/efon-alaaye-lga/](https://geo.mycyber.org/nigeria/efon-alaaye-lga/)
-   [https://geo.mycyber.org/nigeria/ijero-ekiti-lga/](https://geo.mycyber.org/nigeria/ijero-ekiti-lga/)
-   [https://geo.mycyber.org/nigeria/ikere-ekiti-town-arean/](https://geo.mycyber.org/nigeria/ikere-ekiti-town-arean/)
-   [https://geo.mycyber.org/nigeria/ikole-lga/](https://geo.mycyber.org/nigeria/ikole-lga/)
-   [https://geo.mycyber.org/nigeria/ise-orun-lga/](https://geo.mycyber.org/nigeria/ise-orun-lga/)
-   [https://geo.mycyber.org/nigeria/moba-lga/](https://geo.mycyber.org/nigeria/moba-lga/)
-   [https://geo.mycyber.org/nigeria/oye-lga/](https://geo.mycyber.org/nigeria/oye-lga/)
-   [https://www.ekitistate.gov.ng/about-ekiti/local-government](https://www.ekitistate.gov.ng/about-ekiti/local-government)

### Enugu State

-   [https://en.wikipedia.org/wiki/Enugu_State](https://en.wikipedia.org/wiki/Enugu_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Enugu_State](https://en.wikipedia.org/wiki/List_of_villages_in_Enugu_State)
-   [https://en.wikipedia.org/wiki/Aninri](https://en.wikipedia.org/wiki/Aninri)
-   [https://en.wikipedia.org/wiki/Awgu](https://en.wikipedia.org/wiki/Awgu)
-   [https://en.wikipedia.org/wiki/Enugu_East](https://en.wikipedia.org/wiki/Enugu_East)
-   [https://en.wikipedia.org/wiki/Enugu_North](https://en.wikipedia.org/wiki/Enugu_North)
-   [https://en.wikipedia.org/wiki/Enugu_South](https://en.wikipedia.org/wiki/Enugu_South)
-   [https://en.wikipedia.org/wiki/Ezeagu](https://en.wikipedia.org/wiki/Ezeagu)
-   [https://en.wikipedia.org/wiki/Igbo_Etiti](https://en.wikipedia.org/wiki/Igbo_Etiti)
-   [https://en.wikipedia.org/wiki/Igbo_Eze_North](https://en.wikipedia.org/wiki/Igbo_Eze_North)
-   [https://en.wikipedia.org/wiki/Igbo_Eze_South](https://en.wikipedia.org/wiki/Igbo_Eze_South)
-   [https://en.wikipedia.org/wiki/Isi_Uzo](https://en.wikipedia.org/wiki/Isi_Uzo)
-   [https://en.wikipedia.org/wiki/Nkanu_East](https://en.wikipedia.org/wiki/Nkanu_East)
-   [https://en.wikipedia.org/wiki/Nkanu_West](https://en.wikipedia.org/wiki/Nkanu_West)
-   [https://en.wikipedia.org/wiki/Nsukka](https://en.wikipedia.org/wiki/Nsukka)
-   [https://en.wikipedia.org/wiki/Oji_River](https://en.wikipedia.org/wiki/Oji_River)
-   [https://en.wikipedia.org/wiki/Udenu](https://en.wikipedia.org/wiki/Udenu)
-   [https://en.wikipedia.org/wiki/Udi,_Enugu](https://en.wikipedia.org/wiki/Udi,_Enugu)
-   [https://en.wikipedia.org/wiki/Uzo_Uwani](https://en.wikipedia.org/wiki/Uzo_Uwani)
-   [https://www.nigeriahousingmarket.com/guides/enugu/local-government-list-headquarters-2026](https://www.nigeriahousingmarket.com/guides/enugu/local-government-list-headquarters-2026)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-ezeagu-l-g-a-enugu-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-ezeagu-l-g-a-enugu-state/)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-nsukka-l-g-a-enugu-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-nsukka-l-g-a-enugu-state/)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-udi-l-g-a-enugu-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-udi-l-g-a-enugu-state/)
-   [https://enugustate.gov.ng](https://enugustate.gov.ng)

### Federal Capital Territory

-   [https://en.wikipedia.org/wiki/Federal_Capital_Territory_(Nigeria)](https://en.wikipedia.org/wiki/Federal_Capital_Territory_(Nigeria))
-   [https://en.wikipedia.org/wiki/Abuja](https://en.wikipedia.org/wiki/Abuja)
-   [https://en.wikipedia.org/wiki/Abaji,_Nigeria](https://en.wikipedia.org/wiki/Abaji,_Nigeria)
-   [https://en.wikipedia.org/wiki/Abuja_Municipal_Area_Council](https://en.wikipedia.org/wiki/Abuja_Municipal_Area_Council)
-   [https://en.wikipedia.org/wiki/Bwari](https://en.wikipedia.org/wiki/Bwari)
-   [https://en.wikipedia.org/wiki/Gwagwalada](https://en.wikipedia.org/wiki/Gwagwalada)
-   [https://en.wikipedia.org/wiki/Kuje](https://en.wikipedia.org/wiki/Kuje)
-   [https://en.wikipedia.org/wiki/Kwali_Area_Council](https://en.wikipedia.org/wiki/Kwali_Area_Council)
-   [https://inecnigeria.org/wp-content/uploads/2023/01/FCT.pdf](https://inecnigeria.org/wp-content/uploads/2023/01/FCT.pdf)
-   [https://www.nigeriahousingmarket.com/abuja/area-councils-abuja-list-headquarters](https://www.nigeriahousingmarket.com/abuja/area-councils-abuja-list-headquarters)
-   [https://www.premiumtimesng.com/news/headlines/858237-analysis-what-makes-abujas-area-councils-different-from-lgas-in-36-states.html](https://www.premiumtimesng.com/news/headlines/858237-analysis-what-makes-abujas-area-councils-different-from-lgas-in-36-states.html)
-   [https://fcta.gov.ng](https://fcta.gov.ng)

### Gombe State

-   [https://en.wikipedia.org/wiki/Gombe_State](https://en.wikipedia.org/wiki/Gombe_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Gombe_State](https://en.wikipedia.org/wiki/List_of_villages_in_Gombe_State)
-   [https://en.wikipedia.org/wiki/Akko,_Nigeria](https://en.wikipedia.org/wiki/Akko,_Nigeria)
-   [https://en.wikipedia.org/wiki/Balanga,_Nigeria](https://en.wikipedia.org/wiki/Balanga,_Nigeria)
-   [https://en.wikipedia.org/wiki/Billiri](https://en.wikipedia.org/wiki/Billiri)
-   [https://en.wikipedia.org/wiki/Dukku](https://en.wikipedia.org/wiki/Dukku)
-   [https://en.wikipedia.org/wiki/Funakaye](https://en.wikipedia.org/wiki/Funakaye)
-   [https://en.wikipedia.org/wiki/Bajoga](https://en.wikipedia.org/wiki/Bajoga)
-   [https://en.wikipedia.org/wiki/Kaltungo](https://en.wikipedia.org/wiki/Kaltungo)
-   [https://en.wikipedia.org/wiki/Kwami](https://en.wikipedia.org/wiki/Kwami)
-   [https://en.wikipedia.org/wiki/Nafada](https://en.wikipedia.org/wiki/Nafada)
-   [https://en.wikipedia.org/wiki/Shongom](https://en.wikipedia.org/wiki/Shongom)
-   [https://en.wikipedia.org/wiki/Yamaltu/Deba](https://en.wikipedia.org/wiki/Yamaltu/Deba)
-   [https://www.nipc.gov.ng/nigeria-states/gombe-state/](https://www.nipc.gov.ng/nigeria-states/gombe-state/)
-   [https://inecnigeria.org/wp-content/uploads/2023/01/GOMBE.pdf](https://inecnigeria.org/wp-content/uploads/2023/01/GOMBE.pdf)
-   [https://www.nigeriahousingmarket.com/guides/local-government-gombe-list-headquarters](https://www.nigeriahousingmarket.com/guides/local-government-gombe-list-headquarters)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-akko-l-g-a-gombe-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-akko-l-g-a-gombe-state/)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-balanga-l-g-a-gombe-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-balanga-l-g-a-gombe-state/)
-   [https://www.medianigeria.com/history-of-billiri-lga-gombe-state/](https://www.medianigeria.com/history-of-billiri-lga-gombe-state/)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-dukku-l-g-a-gombe-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-dukku-l-g-a-gombe-state/)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-kaltungo-l-g-a-gombe-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-kaltungo-l-g-a-gombe-state/)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-kwami-l-g-a-gombe-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-kwami-l-g-a-gombe-state/)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-nafada-l-g-a-gombe-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-nafada-l-g-a-gombe-state/)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-yamaltu-deba-l-g-a-gombe-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-yamaltu-deba-l-g-a-gombe-state/)
-   [https://geo.mycyber.org/nigeria/gombe_1/](https://geo.mycyber.org/nigeria/gombe_1/)
-   [https://geo.mycyber.org/nigeria/shongom/](https://geo.mycyber.org/nigeria/shongom/)
-   [https://geo.mycyber.org/nigeria/balanga/](https://geo.mycyber.org/nigeria/balanga/)
-   [https://geo.mycyber.org/nigeria/billiri/](https://geo.mycyber.org/nigeria/billiri/)
-   [https://geo.mycyber.org/nigeria/dukku/](https://geo.mycyber.org/nigeria/dukku/)
-   [https://geo.mycyber.org/nigeria/kwami/](https://geo.mycyber.org/nigeria/kwami/)
-   [https://geo.mycyber.org/nigeria/nafada/](https://geo.mycyber.org/nigeria/nafada/)
-   [https://geo.mycyber.org/nigeria/yamaltu-deba/](https://geo.mycyber.org/nigeria/yamaltu-deba/)
-   [https://gombestate.gov.ng](https://gombestate.gov.ng)

### Imo State

-   [https://en.wikipedia.org/wiki/Imo_State](https://en.wikipedia.org/wiki/Imo_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Imo_State](https://en.wikipedia.org/wiki/List_of_villages_in_Imo_State)
-   [https://en.wikipedia.org/wiki/Aboh_Mbaise](https://en.wikipedia.org/wiki/Aboh_Mbaise)
-   [https://en.wikipedia.org/wiki/Ahiazu_Mbaise](https://en.wikipedia.org/wiki/Ahiazu_Mbaise)
-   [https://en.wikipedia.org/wiki/Ehime_Mbano](https://en.wikipedia.org/wiki/Ehime_Mbano)
-   [https://en.wikipedia.org/wiki/Ezinihitte_Mbaise](https://en.wikipedia.org/wiki/Ezinihitte_Mbaise)
-   [https://en.wikipedia.org/wiki/Ideato_North](https://en.wikipedia.org/wiki/Ideato_North)
-   [https://en.wikipedia.org/wiki/Ideato_South](https://en.wikipedia.org/wiki/Ideato_South)
-   [https://en.wikipedia.org/wiki/Ihitte/Uboma](https://en.wikipedia.org/wiki/Ihitte/Uboma)
-   [https://en.wikipedia.org/wiki/Ikeduru](https://en.wikipedia.org/wiki/Ikeduru)
-   [https://en.wikipedia.org/wiki/Isiala_Mbano](https://en.wikipedia.org/wiki/Isiala_Mbano)
-   [https://en.wikipedia.org/wiki/Isu,_Imo](https://en.wikipedia.org/wiki/Isu,_Imo)
-   [https://en.wikipedia.org/wiki/Mbaitoli](https://en.wikipedia.org/wiki/Mbaitoli)
-   [https://en.wikipedia.org/wiki/Ngor_Okpala](https://en.wikipedia.org/wiki/Ngor_Okpala)
-   [https://en.wikipedia.org/wiki/Njaba](https://en.wikipedia.org/wiki/Njaba)
-   [https://en.wikipedia.org/wiki/Nkwerre](https://en.wikipedia.org/wiki/Nkwerre)
-   [https://en.wikipedia.org/wiki/Nwangele](https://en.wikipedia.org/wiki/Nwangele)
-   [https://en.wikipedia.org/wiki/Obowo](https://en.wikipedia.org/wiki/Obowo)
-   [https://en.wikipedia.org/wiki/Oguta](https://en.wikipedia.org/wiki/Oguta)
-   [https://en.wikipedia.org/wiki/Ohaji/Egbema](https://en.wikipedia.org/wiki/Ohaji/Egbema)
-   [https://en.wikipedia.org/wiki/Okigwe](https://en.wikipedia.org/wiki/Okigwe)
-   [https://en.wikipedia.org/wiki/Onuimo](https://en.wikipedia.org/wiki/Onuimo)
-   [https://en.wikipedia.org/wiki/Orlu,_Imo](https://en.wikipedia.org/wiki/Orlu,_Imo)
-   [https://en.wikipedia.org/wiki/Orsu](https://en.wikipedia.org/wiki/Orsu)
-   [https://en.wikipedia.org/wiki/Oru_East](https://en.wikipedia.org/wiki/Oru_East)
-   [https://en.wikipedia.org/wiki/Oru_West](https://en.wikipedia.org/wiki/Oru_West)
-   [https://en.wikipedia.org/wiki/Mgbidi,_Imo](https://en.wikipedia.org/wiki/Mgbidi,_Imo)
-   [https://en.wikipedia.org/wiki/Owerri_Municipal](https://en.wikipedia.org/wiki/Owerri_Municipal)
-   [https://en.wikipedia.org/wiki/Owerri_North](https://en.wikipedia.org/wiki/Owerri_North)
-   [https://en.wikipedia.org/wiki/Owerri_West](https://en.wikipedia.org/wiki/Owerri_West)
-   [https://www.nipc.gov.ng/nigeria-states/imo-state2/](https://www.nipc.gov.ng/nigeria-states/imo-state2/)
-   [https://www.nigeriahousingmarket.com/guides/local-government-imo-list-headquarters](https://www.nigeriahousingmarket.com/guides/local-government-imo-list-headquarters)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-nkwerre-l-g-a-imo-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-nkwerre-l-g-a-imo-state/)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-onuimo-l-g-a-imo-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-onuimo-l-g-a-imo-state/)
-   [https://www.medianigeria.com/list-of-towns-and-villages-in-oru-east-l-g-a-imo-state/](https://www.medianigeria.com/list-of-towns-and-villages-in-oru-east-l-g-a-imo-state/)
-   [https://imostate.gov.ng](https://imostate.gov.ng)

### Jigawa State

-   [https://en.wikipedia.org/wiki/Jigawa_State](https://en.wikipedia.org/wiki/Jigawa_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Jigawa_State](https://en.wikipedia.org/wiki/List_of_villages_in_Jigawa_State)
-   [https://en.wikipedia.org/wiki/Dutse](https://en.wikipedia.org/wiki/Dutse)
-   [https://en.wikipedia.org/wiki/Hadejia](https://en.wikipedia.org/wiki/Hadejia)
-   [https://en.wikipedia.org/wiki/Birniwa](https://en.wikipedia.org/wiki/Birniwa)
-   [https://en.wikipedia.org/wiki/Birnin_Kudu](https://en.wikipedia.org/wiki/Birnin_Kudu)
-   [https://en.wikipedia.org/wiki/Malam_Madori](https://en.wikipedia.org/wiki/Malam_Madori)
-   [https://jigawastate.gov.ng](https://jigawastate.gov.ng)

### Kaduna State

-   [https://en.wikipedia.org/wiki/Kaduna_State](https://en.wikipedia.org/wiki/Kaduna_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Kaduna_State](https://en.wikipedia.org/wiki/List_of_villages_in_Kaduna_State)
-   [https://en.wikipedia.org/wiki/Birnin_Gwari](https://en.wikipedia.org/wiki/Birnin_Gwari)
-   [https://en.wikipedia.org/wiki/Chikun](https://en.wikipedia.org/wiki/Chikun)
-   [https://en.wikipedia.org/wiki/Igabi](https://en.wikipedia.org/wiki/Igabi)
-   [https://en.wikipedia.org/wiki/Ikara](https://en.wikipedia.org/wiki/Ikara)
-   [https://en.wikipedia.org/wiki/Jaba,_Kaduna](https://en.wikipedia.org/wiki/Jaba,_Kaduna)
-   [https://en.wikipedia.org/wiki/Jema%27a](https://en.wikipedia.org/wiki/Jema%27a)
-   [https://en.wikipedia.org/wiki/Kachia](https://en.wikipedia.org/wiki/Kachia)
-   [https://en.wikipedia.org/wiki/Kagarko](https://en.wikipedia.org/wiki/Kagarko)
-   [https://en.wikipedia.org/wiki/Kajuru](https://en.wikipedia.org/wiki/Kajuru)
-   [https://en.wikipedia.org/wiki/Kafanchan](https://en.wikipedia.org/wiki/Kafanchan)
-   [https://en.wikipedia.org/wiki/Kaduna_North](https://en.wikipedia.org/wiki/Kaduna_North)
-   [https://en.wikipedia.org/wiki/Kaduna_South](https://en.wikipedia.org/wiki/Kaduna_South)
-   [https://en.wikipedia.org/wiki/Kaura,_Kaduna](https://en.wikipedia.org/wiki/Kaura,_Kaduna)
-   [https://en.wikipedia.org/wiki/Kauru](https://en.wikipedia.org/wiki/Kauru)
-   [https://en.wikipedia.org/wiki/Kubau](https://en.wikipedia.org/wiki/Kubau)
-   [https://en.wikipedia.org/wiki/Kudan,_Kaduna](https://en.wikipedia.org/wiki/Kudan,_Kaduna)
-   [https://en.wikipedia.org/wiki/Lere,_Kaduna](https://en.wikipedia.org/wiki/Lere,_Kaduna)
-   [https://en.wikipedia.org/wiki/Makarfi](https://en.wikipedia.org/wiki/Makarfi)
-   [https://en.wikipedia.org/wiki/Sabon_Gari,_Kaduna](https://en.wikipedia.org/wiki/Sabon_Gari,_Kaduna)
-   [https://en.wikipedia.org/wiki/Sanga,_Kaduna](https://en.wikipedia.org/wiki/Sanga,_Kaduna)
-   [https://en.wikipedia.org/wiki/Soba,_Kaduna](https://en.wikipedia.org/wiki/Soba,_Kaduna)
-   [https://en.wikipedia.org/wiki/Zangon_Kataf](https://en.wikipedia.org/wiki/Zangon_Kataf)
-   [https://en.wikipedia.org/wiki/Zaria](https://en.wikipedia.org/wiki/Zaria)
-   [https://en.wikipedia.org/wiki/Zonkwa](https://en.wikipedia.org/wiki/Zonkwa)
-   [https://kdsg.gov.ng](https://kdsg.gov.ng)

### Kano State

-   [https://en.wikipedia.org/wiki/Kano_State](https://en.wikipedia.org/wiki/Kano_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Kano_State](https://en.wikipedia.org/wiki/List_of_villages_in_Kano_State)
-   [https://en.wikipedia.org/wiki/Albasu](https://en.wikipedia.org/wiki/Albasu)
-   [https://en.wikipedia.org/wiki/Dala,_Kano](https://en.wikipedia.org/wiki/Dala,_Kano)
-   [https://en.wikipedia.org/wiki/Fagge](https://en.wikipedia.org/wiki/Fagge)
-   [https://en.wikipedia.org/wiki/Gezawa](https://en.wikipedia.org/wiki/Gezawa)
-   [https://en.wikipedia.org/wiki/Gwale](https://en.wikipedia.org/wiki/Gwale)
-   [https://en.wikipedia.org/wiki/Kano_(city)](https://en.wikipedia.org/wiki/Kano_(city))
-   [https://en.wikipedia.org/wiki/Kano_Municipal](https://en.wikipedia.org/wiki/Kano_Municipal)
-   [https://en.wikipedia.org/wiki/Kumbotso](https://en.wikipedia.org/wiki/Kumbotso)
-   [https://en.wikipedia.org/wiki/Tarauni](https://en.wikipedia.org/wiki/Tarauni)
-   [https://en.wikipedia.org/wiki/Ungogo](https://en.wikipedia.org/wiki/Ungogo)
-   [https://www.kanostate.gov.ng](https://www.kanostate.gov.ng)

### Katsina State

-   [https://en.wikipedia.org/wiki/Katsina_State](https://en.wikipedia.org/wiki/Katsina_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Katsina_State](https://en.wikipedia.org/wiki/List_of_villages_in_Katsina_State)
-   [https://en.wikipedia.org/wiki/Daura,_Katsina](https://en.wikipedia.org/wiki/Daura,_Katsina)
-   [https://en.wikipedia.org/wiki/Funtua](https://en.wikipedia.org/wiki/Funtua)
-   [https://en.wikipedia.org/wiki/Jibia](https://en.wikipedia.org/wiki/Jibia)
-   [https://en.wikipedia.org/wiki/Kankara](https://en.wikipedia.org/wiki/Kankara)
-   [https://en.wikipedia.org/wiki/Malumfashi](https://en.wikipedia.org/wiki/Malumfashi)
-   [http://www.katsinastate.gov.ng/](http://www.katsinastate.gov.ng/)

### Kebbi State

-   [https://en.wikipedia.org/wiki/Kebbi_State](https://en.wikipedia.org/wiki/Kebbi_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Kebbi_State](https://en.wikipedia.org/wiki/List_of_villages_in_Kebbi_State)
-   [https://en.wikipedia.org/wiki/Argungu](https://en.wikipedia.org/wiki/Argungu)
-   [https://en.wikipedia.org/wiki/Gwandu](https://en.wikipedia.org/wiki/Gwandu)
-   [https://en.wikipedia.org/wiki/Yauri](https://en.wikipedia.org/wiki/Yauri)
-   [https://en.wikipedia.org/wiki/Zuru](https://en.wikipedia.org/wiki/Zuru)
-   [http://www.kebbistate.gov.ng/](http://www.kebbistate.gov.ng/)

### Kogi State

-   [https://en.wikipedia.org/wiki/Kogi_State](https://en.wikipedia.org/wiki/Kogi_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Kogi_State](https://en.wikipedia.org/wiki/List_of_villages_in_Kogi_State)
-   [https://en.wikipedia.org/wiki/Idah](https://en.wikipedia.org/wiki/Idah)
-   [https://en.wikipedia.org/wiki/Dekina](https://en.wikipedia.org/wiki/Dekina)
-   [https://en.wikipedia.org/wiki/Mopa-Muro](https://en.wikipedia.org/wiki/Mopa-Muro)
-   [https://kogistate.gov.ng/](https://kogistate.gov.ng/)

### Kwara State

-   [https://en.wikipedia.org/wiki/Kwara_State](https://en.wikipedia.org/wiki/Kwara_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Kwara_State](https://en.wikipedia.org/wiki/List_of_villages_in_Kwara_State)
-   [https://kwarastate.gov.ng/](https://kwarastate.gov.ng/)

### Lagos State

-   [https://en.wikipedia.org/wiki/Lagos_State](https://en.wikipedia.org/wiki/Lagos_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Lagos_State](https://en.wikipedia.org/wiki/List_of_villages_in_Lagos_State)
-   [https://en.wikipedia.org/wiki/Ibeju-Lekki](https://en.wikipedia.org/wiki/Ibeju-Lekki)
-   [https://lagosstate.gov.ng/](https://lagosstate.gov.ng/)

### Nasarawa State

-   [https://en.wikipedia.org/wiki/Nasarawa_State](https://en.wikipedia.org/wiki/Nasarawa_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Nasarawa_State](https://en.wikipedia.org/wiki/List_of_villages_in_Nasarawa_State)
-   [https://nasarawastate.gov.ng/](https://nasarawastate.gov.ng/)

### Niger State

-   [https://en.wikipedia.org/wiki/Niger_State](https://en.wikipedia.org/wiki/Niger_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Niger_State](https://en.wikipedia.org/wiki/List_of_villages_in_Niger_State)
-   [https://nigerstate.gov.ng/](https://nigerstate.gov.ng/)

### Ogun State

-   [https://en.wikipedia.org/wiki/Ogun_State](https://en.wikipedia.org/wiki/Ogun_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Ogun_State](https://en.wikipedia.org/wiki/List_of_villages_in_Ogun_State)
-   [https://en.wikipedia.org/wiki/Imeko_Afon](https://en.wikipedia.org/wiki/Imeko_Afon)
-   [https://ogunstate.gov.ng/](https://ogunstate.gov.ng/)

### Ondo State

-   [https://en.wikipedia.org/wiki/Ondo_State](https://en.wikipedia.org/wiki/Ondo_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Ondo_State](https://en.wikipedia.org/wiki/List_of_villages_in_Ondo_State)
-   [https://ondostate.gov.ng/](https://ondostate.gov.ng/)

### Osun State

-   [https://en.wikipedia.org/wiki/Osun_State](https://en.wikipedia.org/wiki/Osun_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Osun_State](https://en.wikipedia.org/wiki/List_of_villages_in_Osun_State)
-   [https://en.wikipedia.org/wiki/Irepodun,_Osun_State](https://en.wikipedia.org/wiki/Irepodun,_Osun_State)
-   [https://en.wikipedia.org/wiki/Ifelodun,_Osun_State](https://en.wikipedia.org/wiki/Ifelodun,_Osun_State)
-   [https://www.osunstate.gov.ng/](https://www.osunstate.gov.ng/)

### Oyo State

-   [https://en.wikipedia.org/wiki/Oyo_State](https://en.wikipedia.org/wiki/Oyo_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Oyo_State](https://en.wikipedia.org/wiki/List_of_villages_in_Oyo_State)
-   [https://en.wikipedia.org/wiki/Ogbomosho_North](https://en.wikipedia.org/wiki/Ogbomosho_North)
-   [https://en.wikipedia.org/wiki/Ogbomosho_South](https://en.wikipedia.org/wiki/Ogbomosho_South)
-   [https://en.wikipedia.org/wiki/Oluyole,_Nigeria](https://en.wikipedia.org/wiki/Oluyole,_Nigeria)
-   [https://en.wikipedia.org/wiki/Ona_Ara](https://en.wikipedia.org/wiki/Ona_Ara)
-   [https://oyostate.gov.ng/](https://oyostate.gov.ng/)

### Plateau State

-   [https://en.wikipedia.org/wiki/Plateau_State](https://en.wikipedia.org/wiki/Plateau_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Plateau_State](https://en.wikipedia.org/wiki/List_of_villages_in_Plateau_State)
-   [https://en.wikipedia.org/wiki/Bassa,_Plateau_State](https://en.wikipedia.org/wiki/Bassa,_Plateau_State)
-   [https://www.plateaustate.gov.ng/](https://www.plateaustate.gov.ng/)

### Rivers State

-   [https://en.wikipedia.org/wiki/Rivers_State](https://en.wikipedia.org/wiki/Rivers_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Rivers_State](https://en.wikipedia.org/wiki/List_of_villages_in_Rivers_State)
-   [https://www.riversstate.gov.ng/](https://www.riversstate.gov.ng/)

### Sokoto State

-   [https://en.wikipedia.org/wiki/Sokoto_State](https://en.wikipedia.org/wiki/Sokoto_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Sokoto_State](https://en.wikipedia.org/wiki/List_of_villages_in_Sokoto_State)
-   [https://sokotostate.gov.ng](https://sokotostate.gov.ng)

### Taraba State

-   [https://en.wikipedia.org/wiki/Taraba_State](https://en.wikipedia.org/wiki/Taraba_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Taraba_State](https://en.wikipedia.org/wiki/List_of_villages_in_Taraba_State)
-   [https://tarabastate.gov.ng/](https://tarabastate.gov.ng/)

### Zamfara State

-   [https://en.wikipedia.org/wiki/Zamfara_State](https://en.wikipedia.org/wiki/Zamfara_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Zamfara_State](https://en.wikipedia.org/wiki/List_of_villages_in_Zamfara_State)
-   [https://en.wikipedia.org/wiki/Gusau](https://en.wikipedia.org/wiki/Gusau)
-   [https://zamfara.gov.ng/](https://zamfara.gov.ng/)

### Yobe State

-   [https://en.wikipedia.org/wiki/Yobe_State](https://en.wikipedia.org/wiki/Yobe_State)
-   [https://en.wikipedia.org/wiki/List_of_villages_in_Yobe_State](https://en.wikipedia.org/wiki/List_of_villages_in_Yobe_State)
-   [https://yobestate.gov.ng/](https://yobestate.gov.ng/)
