# Sensitive Content

[![license](https://img.shields.io/github/license/nearata/flarum-ext-sensitive-content?style=flat)](https://github.com/Nearata/flarum-ext-sensitive-content/blob/main/UNLICENSE)
[![packagist](https://img.shields.io/packagist/v/nearata/flarum-ext-sensitive-content?style=flat)](https://packagist.org/packages/nearata/flarum-ext-sensitive-content)
[![changelog](https://img.shields.io/github/release-date/nearata/flarum-ext-sensitive-content?label=last%20release%20date)](https://github.com/Nearata/flarum-ext-sensitive-content/blob/main/CHANGELOG.md)

> Hide content to non-allowed groups.

## Preview

**NOTE**: only allowed groups can see this element block.

in this example, only admins are allowed to see this

![preview](screenshot.png)

## Install

```sh
composer require nearata/flarum-ext-sensitive-content:"*"
```

## Update

```sh
composer update nearata/flarum-ext-sensitive-content:"*"
php flarum cache:clear
```

## Remove

```sh
composer remove nearata/flarum-ext-sensitive-content
php flarum cache:clear
```

## How to use

```bash
[sensitive-content]this is a sensitive content[/sensitive-content]
```
