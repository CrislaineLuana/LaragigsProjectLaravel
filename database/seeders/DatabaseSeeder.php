<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //\App\Models\User::factory(1)->create();       
        $user = User::factory()->create([
            'name' => 'Crislaine',
            'email' => 'crislainedepaulalu@gmail.com',
            'password' => '123456'
        ]);
        \App\Models\Listing::factory(10)->create([
            'user_id' => $user->id
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
