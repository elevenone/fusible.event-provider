# fusible.event-provider
Canned [Jnjxp\Event] configuration for [Aura\Di (3.x)]

[![Latest version][ico-version]][link-packagist]
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]

## Installation
```
composer require fusible/event-provider
```

## Usage

### [Aura\Di (3.x)]
See: [ Aura\Di > *Container Builder and Config Classes* ][Aura\Di docs].
```php
use Aura\Di\ContainerBuilder;

$builder = new ContainerBuilder();
$di = $builder->newConfiguredInstance([Fusible\EventProvider\Config::class]);
```

### [Radar.Project]
See: [ Radar.Project > Container Configuration > *Configuration (aka "Providers")* ][Radar.Project docs].
```php
use Radar\Adr\Boot;

$boot = new Boot();
$adr = $boot->adr([Fusible\EventProvider\Config::class]);
```


[Jnjxp\Event]: https://github.com/jnjxp/jnjxp.event
[Aura\Di (3.x)]: https://github.com/auraphp/Aura.Di/tree/3.x
[Radar.Project]: https://github.com/radarphp/Radar.Project
[Aura\Di docs]: https://github.com/auraphp/Aura.Di/blob/3.x/docs/config.md
[Radar.Project docs]: https://github.com/radarphp/Radar.Project/blob/1.x/docs/container.md#configuration-aka-providers

[ico-version]: https://img.shields.io/packagist/v/fusible/event-provider.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/fusible/fusible.event-provider/develop.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/fusible/fusible.event-provider.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/fusible/fusible.event-provider.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/fusible/event-provider
[link-travis]: https://travis-ci.org/fusible/fusible.event-provider
[link-scrutinizer]: https://scrutinizer-ci.com/g/fusible/fusible.event-provider
[link-code-quality]: https://scrutinizer-ci.com/g/fusible/fusible.event-provider
