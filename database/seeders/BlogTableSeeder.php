<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'blog_title' => 'Make your team a Design driven company',
                'blog_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard.',
                'blog_image' => 'blogs/1.jpg',
                'blog_create_by' => 'test',
            ],
            [
                'blog_title' => 'The newest web framework that changed the world',
                'blog_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard.',
                'blog_image' => 'blogs/2.jpg',
                'blog_create_by' => 'test',
            ],
            [
                'blog_title' => '5 ways to improve user retention for your startup',
                'blog_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard.',
                'blog_image' => 'blogs/3.jpg',
                'blog_create_by' => 'test',
            ],

        ];


        \DB::table('blogs')->insert($array); // Query Builder approach

    }
}
