<?php

declare(strict_types=1);

namespace Honed\Registry\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\Concerns\WithWorkbench;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use RefreshDatabase;
    use WithWorkbench;

    /**
     * Define the environment setup.
     *
     * @param  Application  $app
     * @return void
     */
    public function getEnvironmentSetUp($app)
    {
        config()->set('registry', require __DIR__.'/../config/registry.php');
        config()->set('database.default', 'testing');
    }
}
