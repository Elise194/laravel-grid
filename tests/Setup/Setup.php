<?php

namespace Tests\Setup;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Request;
use Orchestra\Testbench\Concerns\WithLoadMigrationsFrom;

trait Setup {

    use WithLoadMigrationsFrom;

    protected $connectionsToTransact = ['testing'];

    protected function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(realpath(__DIR__ . '/../database/migrations'));
        $this->registerSeedsFrom(__DIR__ . '/../database/seeds');
        $this->artisan('migrate', [
            '--path' => realpath(__DIR__ . '/../database/migrations'),
            '--realpath' => true,
            '--database' => 'testing'
        ]);
        $this->artisan('db:seed --class=DatabaseSeeder', []);
    }

    /**
     * Register seeds.
     *
     * @param  string  $path
     * @return void
     */
    protected function registerSeedsFrom($path)
    {
        foreach (glob("$path/*.php") as $filename)
        {
            include $filename;
            $classes = get_declared_classes();
            $class = end($classes);

            $command = Request::server('argv', null);
            if (is_array($command)) {
                $command = implode(' ', $command);
                if ($command == "artisan db:seed") {
                    Artisan::call('db:seed', ['--class' => $class]);
                }
            }

        }
    }

    protected function tearDown(): void
    {
        Artisan::call('migrate:reset');
        parent::tearDown();
    }
}
