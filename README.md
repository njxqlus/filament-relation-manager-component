# Use Filament Relation Manager Everywhere!

[![Latest Version on Packagist](https://img.shields.io/packagist/v/njxqlus/filament-relation-manager-component.svg?style=flat-square)](https://packagist.org/packages/njxqlus/filament-relation-manager-component)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/njxqlus/filament-relation-manager-component/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/njxqlus/filament-relation-manager-component/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/njxqlus/filament-relation-manager-component/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/njxqlus/filament-relation-manager-component/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/njxqlus/filament-relation-manager-component.svg?style=flat-square)](https://packagist.org/packages/njxqlus/filament-relation-manager-component)


<img alt="banner" class="filament-hidden" src="https://github.com/njxqlus/filament-relation-manager-component/blob/main/.github/banner.png?raw=true">

Use Filament Relation Manager Everywhere!

## Installation

You can install the package via composer:

```bash
composer require njxqlus/filament-relation-manager-component
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-relation-manager-component-views"
```

## Usage

Example below shows how to use different relation managers in tabs without lazy load.

```php
public static function form(Form $form): Form
{
    return $form
        ->schema([           
            Forms\Components\Tabs::make()->tabs([
                Forms\Components\Tabs\Tab::make('Versions')->schema([
                    \Njxqlus\Filament\Components\Forms\RelationManager::make()->manager(RelationManagers\VersionsRelationManager::class)->lazy(false)
                ]),
                Forms\Components\Tabs\Tab::make('Stands')->schema([
                    \Njxqlus\Filament\Components\Forms\RelationManager::make()->manager(RelationManagers\StandsRelationManager::class)->lazy(false)
                ]),
                Forms\Components\Tabs\Tab::make('Contexts')->schema([
                    \Njxqlus\Filament\Components\Forms\RelationManager::make()->manager(RelationManagers\ContextsRelationManager::class)->lazy(false)
                ]),
            ])
        ]);
}
    
public static function infolist(Infolist $infolist): Infolist
{
    return $infolist->schema([       
        Infolists\Components\Tabs::make()->tabs([
            Infolists\Components\Tabs\Tab::make('Versions')->schema([
                \Njxqlus\Filament\Components\Infolists\RelationManager::make()->manager(RelationManagers\VersionsRelationManager::class)->lazy(false)
            ]),
            Infolists\Components\Tabs\Tab::make('Stands')->schema([
                \Njxqlus\Filament\Components\Infolists\RelationManager::make()->manager(RelationManagers\StandsRelationManager::class)->lazy(false)
            ]),
            Infolists\Components\Tabs\Tab::make('Contexts')->schema([
                \Njxqlus\Filament\Components\Infolists\RelationManager::make()->manager(RelationManagers\ContextsRelationManager::class)->lazy(false)
            ]),
        ])
    ]);
}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mikael Ahabalyants](https://github.com/njxqlus)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
