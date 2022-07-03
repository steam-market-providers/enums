# 🎮 Steam enums - simple list of useful values 👾
[![Build Status](https://circleci.com/gh/krepysh-spec/steam-enums.svg?style=shield)](https://circleci.com/gh/krepysh-spec/steam-enums)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/krepysh-spec/steam-enums/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/krepysh-spec/steam-enums/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/krepysh-spec/steam-enums/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/krepysh-spec/steam-enums/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/krepysh-spec/steam-enums/badges/build.png?b=main)](https://scrutinizer-ci.com/g/krepysh-spec/steam-enums/build-status/main)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/krepysh-spec/steam-enums/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)
[![Latest Stable Version](http://poser.pugx.org/krepysh-spec/steam-enums/v)](https://packagist.org/packages/krepysh-spec/steam-enums) 
[![Total Downloads](http://poser.pugx.org/krepysh-spec/steam-enums/downloads)](https://packagist.org/packages/krepysh-spec/steam-enums)
[![Latest Unstable Version](http://poser.pugx.org/krepysh-spec/steam-enums/v/unstable)](https://packagist.org/packages/krepysh-spec/steam-enums) 
[![License](http://poser.pugx.org/krepysh-spec/steam-enums/license)](https://packagist.org/packages/krepysh-spec/steam-enums)
[![PHP Version Require](http://poser.pugx.org/krepysh-spec/steam-enums/require/php)](https://packagist.org/packages/krepysh-spec/steam-enums)

---

This library has collected all the necessary values of filters, currencies, countries, categories, and so on from the Steam service.
If you are developing under steam, this library will come in handy.

### Why do you need
- Who works with api steam
- Who is parsing the site
- Who parses the marketplace
- And in other cases of working with the steam platform

### Install
```bash
composer require krepysh-spec/steam-enums
```

### Implementation List

- [x] Steam App (Now only popular games CS:GO, Dota 2)
- [x] Steam Currency
- [x] Steam Language
- [x] Steam Global tag
- [ ] Steam Countries
- [ ] Steam Platform
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

### Support

For support, email evgeniymykhalichenko@gmail.com or telegram @krep1sh

### License

MIT