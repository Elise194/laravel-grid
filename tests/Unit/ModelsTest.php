<?php

namespace Tests\Unit;

use Orchestra\Testbench\TestCase;
use Tests\Setup\Setup;
use Tests\Setup\TestModels\User;

class ModelsTest extends TestCase
{
    use Setup;

    public function testUserExists()
    {
        $user = User::find(1);
        $this->assertNotNull($user);
    }
}
