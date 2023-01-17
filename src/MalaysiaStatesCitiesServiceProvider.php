<?php

namespace Aidanraskil\MalaysiaStatesCities;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Aidanraskil\MalaysiaStatesCities\Commands\MalaysiaStatesCitiesCommand;

class MalaysiaStatesCitiesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('malaysiastatescities')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_malaysiastatescities_table')
            ->hasCommand(MalaysiaStatesCitiesCommand::class);
    }
}
