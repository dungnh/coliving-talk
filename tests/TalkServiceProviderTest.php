<?php

namespace Nahid\Talk\Tests;

use Nahid\Talk\Talk;

/**
 * This is the service provider test class.
 */
class TalkServiceProviderTest extends TestCase
{
    public function testTalkIsInjectable()
    {
        $this->assertInstanceOf(Talk::class, $this->app->make(Talk::class));
    }
}
