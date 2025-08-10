<?php

namespace Gillyware\Atlas\Tests;

use Gillyware\Atlas\Providers\AtlasServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [AtlasServiceProvider::class];
    }
}
