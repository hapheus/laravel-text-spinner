# Laravel Text Spinner

![build](https://img.shields.io/github/workflow/status/hapheus/laravel-text-spinner/PHP%20Composer/master)
![PHP Composer](https://github.com/hapheus/laravel-text-spinner/workflows/PHP%20Composer/badge.svg?branch=master)
![PHP Code Sniffer](https://github.com/hapheus/laravel-text-spinner/workflows/PHP%20Code%20Sniffer/badge.svg?branch=master)
![PHP Unit Tests](https://github.com/hapheus/laravel-text-spinner/workflows/PHP%20Unit%20Tests/badge.svg?branch=master)

![Packagist](https://img.shields.io/packagist/l/hapheus/laravel-text-spinner)
![GitHub last commit](https://img.shields.io/github/last-commit/hapheus/laravel-text-spinner)
# Install 
Using `composer`
```
composer require hapheus/laravel-text-spinner
```
# Features
Spin's a set of nested strings into plain text.

Example: `"Foo{Bar|Foo}"` returns `"FooBar"` or `"FooFoo"`.

#  Usage
## 1. Using Class
```
$text = '{Ehlo|Hello|Howdy} {World|Earth|You}{!|?|.}';
$textSpinner = new HAF\TextSpinner\TextSpinner();
$spinnedText = $textSpinner->spin();
```
## 2. Using Laravel Facade
```
$text = '{Ehlo|Hello|Howdy} {World|Earth|You}{!|?|.}';
$spinnedText = app('text-spinner')->spin($text);
$spinnedText = App::make('text-spinner')->spin($text);
$spinnedText = TextSpinner::spin($text);
```

# Code Quality
![PHP Code Sniffer](https://github.com/hapheus/laravel-text-spinner/workflows/PHP%20Code%20Sniffer/badge.svg?branch=master)
![PHP Unit Tests](https://github.com/hapheus/laravel-text-spinner/workflows/PHP%20Unit%20Tests/badge.svg?branch=master)

```
composer test
composer check-style
```