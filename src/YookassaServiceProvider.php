<?php

namespace Oxyage\Laravel\Yookassa;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class YookassaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-cashier-yookassa')
            ->hasConfigFile()
            ->hasViews();
//            ->hasMigration('create_laravel-cashier-yookassa_table');
    }
}
