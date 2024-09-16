<?php

namespace Mak\Example\Test;

use Mak\Example\Models\Example;

class ExampleTest extends FeatureTestCase
{
    /**
     * @test
     */
    public function test_all_items()
    {
        Example::forceCreate(['name' => 'Name 1']);
        Example::forceCreate(['name' => 'Name 2']);

        $response = $this->get('examples');

        $response->assertStatus(200);

        $response->assertSee('Name 1');
        $response->assertSee('Name 2');
    }
}