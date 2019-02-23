<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            \App\Post::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
                'slug' => $faker->slug(3),
                'type' => 'blog',
                'status' => 'published',
                'author_id' => 1
            ]);
        }
    }
}
