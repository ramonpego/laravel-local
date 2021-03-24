<?php

namespace RamonPego\Local;

use RamonPego\Local\Commands\LocalCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CommandServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-local')
            ->hasConfigFile('local-config')
            ->hasCommand(LocalCommand::class);
    }
}
