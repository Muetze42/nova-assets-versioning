# Nova Assets Versioning

Many know the problem that after a package update you have to explain to the user that he has to clear the browser cache.

This package appends the hash of script and style files loaded via `Nova::script()` or `Nova::style()`.

## Installation

```
composer require norman-huth/nova-assets-versioning
```

## Example

### Without this package:

```html
<!-- Tool Styles -->
<link rel="stylesheet" href="/nova-api/styles/norman-huth-menu">

<!-- Tool Scripts -->
<script src="/nova-api/scripts/norman-huth-menu"></script>
```

### With this package:

```html
<!-- Tool Styles -->
<link rel="stylesheet" href="/nova-api/styles/norman-huth-menu?id=617a67680cd5dd5759b1963661ce40f1">

<!-- Tool Scripts -->
<script src="/nova-api/scripts/norman-huth-menu?id=cf9c832eb5de9f26626d5243e87f8814"></script>
```

---

[![More Laravel Nova Packages](https://raw.githubusercontent.com/Muetze42/asset-repo/main/svg/more-laravel-nova-packages.svg)](https://huth.it/nova-packages)

[![Stand With Ukraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner2-direct.svg)](https://vshymanskyy.github.io/StandWithUkraine/)

[![Woman. Life. Freedom.](https://raw.githubusercontent.com/Muetze42/Muetze42/2033b219c6cce0cb656c34da5246434c27919bcd/files/iran-banner-big.svg)](https://linktr.ee/CurrentPetitionsFreeIran)
