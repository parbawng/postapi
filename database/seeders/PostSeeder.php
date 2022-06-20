<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        for($i=1; $i<= 10; $i++){
            $post = new Post;

            $post->title = $faker->sentence();
            $post->content = $faker->paragraph();
            $post->cover_photo = $faker->imageUrl();
            $post->user_id = $faker->numberBetween(1,4);

            $post->save();
        }
    }
}
