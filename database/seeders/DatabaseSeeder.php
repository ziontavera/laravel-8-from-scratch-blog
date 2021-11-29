<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        Post::factory(20)->create();

        // user seeder
        // $user = User::factory()->create();

        // // category seeder
        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // $hobbies = Category::create([
        //     'name' => 'Hobbies',
        //     'slug' => 'hobbies'
        // ]);

        // // posts seeder
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'Family Post',
        //     'slug' => 'family',
        //     'excerpt' => '<p>Family related posts. </p>',
        //     'body' => "<p>Fake words are simply made up words that appear to be real, but actually don't exist and don't have any meaning. They initially appear real because they can be pronounced which makes it seem like they would be real words. This leads to the question of why in the world would anyone needs to find fake words or use a fake word generator? It does seem a bit strange at first, but there are actually a number of legitimate reasons why people find this free nonsense word tool useful. Below we list a few of the more common reasons that people might want to generate random pseudo words. </p>",
        // ]);


        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'Work Post',
        //     'slug' => 'work',
        //     'excerpt' => '<p>Work related posts. </p>',
        //     'body' => "<p>Fake words are simply made up words that appear to be real, but actually don't exist and don't have any meaning. They initially appear real because they can be pronounced which makes it seem like they would be real words. This leads to the question of why in the world would anyone needs to find fake words or use a fake word generator? It does seem a bit strange at first, but there are actually a number of legitimate reasons why people find this free nonsense word tool useful. Below we list a few of the more common reasons that people might want to generate random pseudo words. </p>",
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $hobbies->id,
        //     'title' => 'Hobbies Post',
        //     'slug' => 'hobbies',
        //     'excerpt' => '<p>Hobbies related posts. </p>',
        //     'body' => "<p> Fake words are simply made up words that appear to be real, but actually don't exist and don't have any meaning. They initially appear real because they can be pronounced which makes it seem like they would be real words. This leads to the question of why in the world would anyone needs to find fake words or use a fake word generator? It does seem a bit strange at first, but there are actually a number of legitimate reasons why people find this free nonsense word tool useful. Below we list a few of the more common reasons that people might want to generate random pseudo words.</p>",
        // ]);
    }
}
