<?php

namespace Aidanraskil\MalaysiaStatesCities\Tests;

use Aidanraskil\MalaysiaStatesCities\MalaysiaStatesCitiesServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Aidanraskil\\MalaysiaStatesCities\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            MalaysiaStatesCitiesServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_malaysiastatescities_table.php.stub';
        $migration->up();
        */
    }
}
