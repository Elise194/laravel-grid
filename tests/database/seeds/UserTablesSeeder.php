<?php

use \Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTablesSeeder extends Seeder
{
    public function run()
    {
        $usersBuilder = DB::table('users');
        foreach ($this->getUsersData() as $userData) {
            $usersBuilder->insert($userData);
        }
    }

    /**
     * Test users data
     *
     * @return array
     */
    protected function getUsersData()
    {
        return  [
            [
                'id' => 1,
                'name' => 'Mike',
                'email' => 'mike@mail.ru',
            ],
            [
                'id' => 2,
                'name' => 'Liza',
                'email' => 'liza@mail.ru',
            ],
            [
                'id' => 3,
                'name' => 'Josh',
                'email' => 'josh@mail.ru',
            ],
            [
                'id' => 4,
                'name' => 'Patric',
                'email' => 'patric@mail.ru',
            ],
            [
                'id' => 5,
                'name' => 'Peter',
                'email' => 'peter@mail.ru',
            ],
            [
                'id' => 6,
                'name' => 'Paul',
                'email' => 'paul@mail.ru',
            ],
            [
                'id' => 7,
                'name' => 'Monika',
                'email' => 'monika@mail.ru',
            ],
            [
                'id' => 8,
                'name' => 'Rachel',
                'email' => 'rachel@mail.ru',
            ],
            [
                'id' => 9,
                'name' => 'Alex',
                'email' => 'alex@mail.ru',
            ],
            [
                'id' => 10,
                'name' => 'Dora',
                'email' => 'dora@mail.ru',
            ],
        ];
    }
}
