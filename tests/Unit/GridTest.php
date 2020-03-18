<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Setup\Setup;
use Orchestra\Testbench\TestCase;

class GridTest extends TestCase
{
    use Setup;

    public function testGridInit()
    {
        $this->assertEquals(true, true);
    }
}
