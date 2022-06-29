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
        
        User::factory()->create([
            'name' => 'Okay',
            'name' => 'Dhruvang'
        ]);

        // dd($user->id());
        Post::factory(20)->create();

    }
}
