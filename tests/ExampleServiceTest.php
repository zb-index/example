<?php

namespace Mak\Example\Test;

use Mak\Example\ExampleService;
use PHPUnit\Framework\TestCase;

class ExampleServiceTest extends TestCase
{
    /**
     * @test
     */
    public function trest_example_result()
    {
        $sut = new ExampleService;
        $this->assertEquals('bar', $sut->exampleMethod());
    }
}