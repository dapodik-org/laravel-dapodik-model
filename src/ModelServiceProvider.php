<?php

namespace Dapodik\Model;

use Dapodik\Model\Commands\ModelCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ModelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-dapodik-model')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_dapodik_model_table')
            ->hasCommand(ModelCommand::class);
    }
}
