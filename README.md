# Wall Clock (PSR-20)
[![Latest Stable Version](http://poser.pugx.org/navarr/wall-clock/v)](https://packagist.org/packages/navarr/wall-clock)
[![Total Downloads](http://poser.pugx.org/navarr/wall-clock/downloads)](https://packagist.org/packages/navarr/wall-clock)
[![Latest Unstable Version](http://poser.pugx.org/navarr/wall-clock/v/unstable)](https://packagist.org/packages/navarr/wall-clock)
[![License](http://poser.pugx.org/navarr/wall-clock/license)](https://packagist.org/packages/navarr/wall-clock)  
![Tests](https://github.com/navarr/wall-clock/actions/workflows/commit.yml/badge.svg)
![Code Coverage](https://codecov.io/gh/navarr/wall-clock/branch/main/graph/badge.svg?token=BHTKOZZDR3)
[![Mutation Score](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fnavarr%2Fwall-clock%2Fmain)](https://dashboard.stryker-mutator.io/reports/github.com/navarr/wall-clock/main)

This library contains an implementation of PSR-20 that provides a new DateTimeImmutable instance everytime its called

## Installation

    composer require navarr/wall-clock:^1

## Usage

```php
use Navarr\WallClock\WallClock;

$clock = new WallClock();

$clock->now()->format('Y-m-d H:i:s') === date('Y-m-d H:i:s')
```
