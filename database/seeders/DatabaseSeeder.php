<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\catagories;
use App\Models\User;
use App\Models\Post;
use App\Models\Sample;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Sample::truncate();
        User::truncate();
        catagories::truncate();
        Post::truncate();

        // \App\Models\User::factory(15)->create();

        $user = \App\Models\User::factory()->create();

        // $sample = \App\Models\Sample::factory()->create();

        // $sample = Sample::create([
        //     'email' => 'd@gmail.com',
        //     'passwoed' => '12345'
        // ]);

        $personal = catagories::create([
            'name' => 'Personal',
            'Slug' => 'personal'
        ]);

        $family = catagories::create([
            'name' => 'Workin',
            'Slug' => 'workin'
        ]);

        $home = catagories::create([
            'name' => 'Homei',
            'Slug' => 'Homei'
        ]);

        Post::create([
            'user_id' => $user -> id,
            'catagories_id'=> $personal -> id,
            'title' => 'The first Title',
            'language' => 'English',
            'Slug'=> 'First',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur molestiae eveniet ipsum voluptas debitis repellendus sunt fugiat ratione dolor, adipisci quo, itaque nemo. Nobis quibusdam natus dolore, vero perspiciatis explicabo!</p>'
        ]);

        Post::create([
            'user_id' => $user -> id,
            'catagories_id'=> $family -> id,
            'title'=> 'The Second Title',
            'language'=> 'English',
            'Slug'=> 'Second',
            'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur molestiae eveniet ipsum voluptas debitis repellendus sunt fugiat ratione dolor, adipisci quo, itaque nemo. Nobis quibusdam natus dolore, vero perspiciatis explicabo!</p>'
        ]);

        Post::create([
            'user_id' => $user-> id,
            'catagories_id'=> $home-> id,
            'title'=> 'The Third Title',
            'language'=> 'English',
            'Slug'=> 'Third',
            'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur molestiae eveniet ipsum voluptas debitis repellendus sunt fugiat ratione dolor, adipisci quo, itaque nemo. Nobis quibusdam natus dolore, vero perspiciatis explicabo!</p>'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
