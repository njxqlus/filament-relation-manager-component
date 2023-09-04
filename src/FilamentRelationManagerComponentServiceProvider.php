<?php

namespace Njxqlus\Filament\Components;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentRelationManagerComponentServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-relation-manager-component';

    public static string $viewNamespace = 'filament-relation-manager-component';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);

        $configFileName = $package->shortName();

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }
}
