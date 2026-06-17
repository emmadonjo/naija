# Contributing to Naija

Thanks for considering a contribution! This package is mostly data (37 states' worth of LGAs, towns, and villages) plus a small PHP API on top of it, so most contributions fall into one of two categories: **data fixes/additions** or **code changes**. Guidelines for both are below.

## Getting started

```bash
git clone git@github.com:emmadonjo/naija.git
cd naija
composer install
vendor/bin/pest
```

All tests should pass before you start and before you open a PR.

## Contributing data (states, LGAs, areas)

Each state lives in its own file at `resources/data/<state_key>.json` (the key is the state's lowercase name with spaces/hyphens replaced by underscores, e.g. `akwa_ibom.json`, `cross_river.json`). Every file must follow the same shape:

```json
{
    "name": { "common": "Abia", "official": "Abia State", "short_code": "AB" },
    "capital": "Umuahia",
    "political_zone": "South East",
    "date_created": "27-08-1991",
    "population": { "male": 2006420, "female": 1927737 },
    "website": "https://abiastate.gov.ng",
    "logo": "/images/logos/abia.png",
    "flag": "/images/flags/abia.png",
    "demonym": "",
    "nick_name": "God's Own State",
    "languages": { "english": "English", "igbo": "Igbo" },
    "lga": {
        "1": {
            "name": "Aba North",
            "official": "Aba North Local Government",
            "areas": ["Aba", "Azuaba", "Eziama", "..."]
        }
    }
}
```

When adding or fixing data:

- **LGA keys are sequential strings starting at `"1"`** (`"1"`, `"2"`, ... `"n"`) — no gaps, no skipped numbers.
- **`official` must start with the LGA's `name`** and end with `"Local Government"` (or `"Area Council"` for the Federal Capital Territory's six area councils — that's the one legitimate exception).
- **No duplicate LGA names within a state**, and **no duplicate area names within an LGA** (case-insensitive).
- **No leading/trailing whitespace** in any name or area string.
- **`areas` must be non-empty** — if you don't have real data for an LGA yet, leave it out of your PR rather than committing a placeholder `[]`; an empty array will fail the test suite (see below).
- Match the existing inline-array formatting style (`"areas": ["A", "B", "C"]` on one line), not one entry per line.

### Use only legitimate sources

Cite where the data came from. Acceptable sources, roughly in order of preference:

1. Wikipedia's article for the state (`https://en.wikipedia.org/wiki/<State>_State`) and, where it exists, `List_of_villages_in_<State>_State`.
2. Wikipedia articles for individual LGAs.
3. The state government's official website.
4. INEC (`inecnigeria.org`) ward/polling-unit directories.

Avoid scraped aggregator sites, AI-generated "top 10 towns" listicles, or anything you can't verify against a primary source. If you're fixing or adding a state's data, **add the sources you used to the `## Sources` section of `README.md`**, under that state's existing heading (or a new one, in alphabetical order, if it doesn't have a section yet).

### Verify your LGA list against the current official count

Nigerian states occasionally have their LGA boundaries adjusted, and several of this repo's files have historically had copy-paste mistakes (an LGA's `official` field accidentally lifted from a different state, a wrong `capital`, etc.) or a stale LGA count. Before submitting, cross-check the state's current LGA list against its Wikipedia article (or another authoritative source) and call out in your PR description if you found and fixed a discrepancy.

## Contributing code

- Keep changes scoped — this is a small, focused package; avoid introducing new abstractions or dependencies unless they're clearly needed.
- Follow the existing code style in `src/` (PSR-4 autoloading under `Emmadonjo\Naija\`).
- Add or update tests for any behavior change.

## Tests

The test suite is split by concern:

- `tests/Unit/NaijaTest.php` / `tests/Unit/StateTest.php` — the public API (`Naija::state()`, `Naija::states()`, `Naija::where()`, and the `State` getters).
- `tests/Unit/DataIntegrityTest.php` — runs structural checks (described above) against **every** file in `resources/data/`. If you add or edit a state file, this is what will catch most mistakes — run it directly while you work:
  ```bash
  vendor/bin/pest tests/Unit/DataIntegrityTest.php
  ```
- `tests/Unit/PerformanceTest.php` — verifies `Naija::state()` caches per-process (no repeated disk reads for the same state) and that loading all states stays within a sane time budget. If you change the caching logic in `Naija::state()`, make sure these still pass.

Run the full suite with:

```bash
vendor/bin/pest
```

## Submitting a PR

1. Fork the repo and create a branch off `main`.
2. Make your changes, with tests passing locally.
3. Open a PR describing what changed and, for data changes, which sources you used.
4. CI runs the same test suite on push — keep it green.
