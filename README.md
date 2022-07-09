# 🎮 Steam enums - simple list of useful values 👾
[![Build Status](https://circleci.com/gh/steam-market-providers/enums.svg?style=shield)](https://circleci.com/gh/steam-market-providers/enums)
[![Latest Stable Version](http://poser.pugx.org/steam-market-providers/parser-manager/v)](https://packagist.org/packages/steam-market-providers/parser-manager)
[![Total Downloads](http://poser.pugx.org/steam-market-providers/parser-manager/downloads)](https://packagist.org/packages/steam-market-providers/parser-manager)
[![Latest Unstable Version](http://poser.pugx.org/steam-market-providers/parser-manager/v/unstable)](https://packagist.org/packages/steam-market-providers/parser-manager)
[![License](http://poser.pugx.org/steam-market-providers/parser-manager/license)](https://packagist.org/packages/steam-market-providers/parser-manager) 
[![PHP Version Require](http://poser.pugx.org/steam-market-providers/parser-manager/require/php)](https://packagist.org/packages/steam-market-providers/parser-manager)

This library has collected all the necessary values of filters, currencies, countries, categories, and so on from the Steam service.
If you are developing under steam, this library will come in handy.

### Why do you need
- Who works with api steam
- Who is parsing the site
- Who parses the marketplace
- And in other cases of working with the steam platform

### Install
```bash
composer require steam-market-providers/enums
```

### Implementation List

- [x] Steam App
- [x] Steam Currency
- [x] Steam Language
- [x] Steam Global tag
- [x] Steam Platform
- [x] Steam Countries
- [ ] Steam Players
- [ ] Steam Visuals
- [ ] Steam Themes moods
- [ ] Steam Genre
- [ ] Steam Sub genre
- [ ] Steam Top level genre

### How to use
Get app id
```php
echo \KrepyshSpec\SteamEnums\SteamApp::CSGO->name; // CSGO
echo \KrepyshSpec\SteamEnums\SteamApp::CSGO->value; // 730
```
Get all from ***SteamApp***
```php
$all = \KrepyshSpec\SteamEnums\SteamApp::cases();
var_dump($all);

/**
 array(2) {
   [0]=>
   enum(KrepyshSpec\SteamEnums\SteamApp::CSGO)
   [1]=>
   enum(KrepyshSpec\SteamEnums\SteamApp::Dota2)
 }
 **/
```

### Steam App
Total app games ***2***
```php
echo SteamApp::Dota2->name // USD
echo SteamApp::Dota2->value; // 570
```

### Steam Currency
Total currencies ***32***
```php
echo SteamCurrency::USD->name; // USD
echo SteamCurrency::USD->value; // 1
```

### Steam Language
Total languages ***28***
```php
echo SteamLanguage::English->name; // English
echo SteamLanguage::English->value; // english
```

### Steam Global tag
Total tags ***431***

Using here [Steam browse tag](https://store.steampowered.com/tag/browse/)
```php
echo SteamGlobalTag::Survival->name; // Survival
echo SteamGlobalTag::Survival->value; // 1662
```

### Steam Platforms
Total platforms ***3***
```php
echo SteamPlatform::MacOS->name; // MacOS
echo SteamPlatform::MacOS->value; // mac
```

### Steam Countries
Total countries ***259***

```php
echo SteamCountry::United_States->name; // United_States
echo SteamCountry::United_States->value; // US
```

### Support

For support, email evgeniymykhalichenko@gmail.com or telegram @krep1sh

### License

MIT