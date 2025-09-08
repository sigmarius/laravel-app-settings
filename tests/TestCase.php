<?php

namespace Sigmarius\LaravelAppSettings\Tests;

use Sigmarius\LaravelAppSettings\Providers\LaravelAppSettingsProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelAppSettingsProvider::class
        ];
    }
}