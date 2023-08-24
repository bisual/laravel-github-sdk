<?php

namespace Bisual\Github;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bisual\Github\Commands\GithubCommand;

class GithubServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-github-sdk')
            ->hasConfigFile();
            // ->hasViews()
            // ->hasMigration('create_laravel-github-sdk_table')
            // ->hasCommand(GithubCommand::class);
    }
}
