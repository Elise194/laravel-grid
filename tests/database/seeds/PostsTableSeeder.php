<?php

use \Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $postBuilder = DB::table('posts');
        foreach ($this->getPostsData() as $postData) {
            $postBuilder->insert($postData);
        }
    }

    /**
     * @return array
     */
    public function getPostsData()
    {
        return [
            [
                'id' => 1,
                'name' => 'Article name 1',
                'description' => 'Content description 1',
                'content' => 'Post content 1',
                'user_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Article name 2',
                'description' => 'Content description 2',
                'content' => 'Post content 2',
                'user_id' => 2,
            ],
            [
                'id' => 3,
                'name' => 'Article name 3',
                'description' => 'Content description 3',
                'content' => 'Post content 3',
                'user_id' => 3,
            ],
            [
                'id' => 4,
                'name' => 'Article name 4',
                'description' => 'Content description 4',
                'content' => 'Post content 4',
                'user_id' => 4,
            ],
            [
                'id' => 5,
                'name' => 'Article name 5',
                'description' => 'Content description 5',
                'content' => 'Post content 5',
                'user_id' => 5,
            ],
            [
                'id' => 6,
                'name' => 'Article name 6',
                'description' => 'Content description 6',
                'content' => 'Post content 6',
                'user_id' => 6,
            ],
            [
                'id' => 7,
                'name' => 'Article name 7',
                'description' => 'Content description 7',
                'content' => 'Post content 7',
                'user_id' => 7,
            ],
            [
                'id' => 8,
                'name' => 'Article name 8',
                'description' => 'Content description 8',
                'content' => 'Post content 8',
                'user_id' => 8,
            ],
            [
                'id' => 9,
                'name' => 'Article name 9',
                'description' => 'Content description 9',
                'content' => 'Post content 9',
                'user_id' => 9,
            ],
            [
                'id' => 10,
                'name' => 'Article name 10',
                'description' => 'Content description 10',
                'content' => 'Post content 10',
                'user_id' => 10,
            ],
            [
                'id' => 11,
                'name' => 'Article name 11',
                'description' => 'Content description 11',
                'content' => 'Post content 11',
                'user_id' => 1,
            ],
        ];
    }
}
