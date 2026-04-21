<?php

namespace Nahid\Talk\Tests;

use Nahid\Talk\TalkServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

/**
 * This is the abstract test case class.
 */
abstract class TestCase extends OrchestraTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getPackageProviders($app)
    {
        return [TalkServiceProvider::class];
    }
}
