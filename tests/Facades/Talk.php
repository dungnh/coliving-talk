<?php

namespace Nahid\Talk\Tests\Facades;

use Nahid\Talk\Tests\TestCase;

/**
 * This is the Talk facade test class.
 */
class Talk extends TestCase
{
    public function testFacadeResolvesTalkBinding()
    {
        $root = \Nahid\Talk\Facades\Talk::getFacadeRoot();
        $this->assertInstanceOf(\Nahid\Talk\Talk::class, $root);
        $this->assertSame($this->app->make('talk'), $root);
    }
}
