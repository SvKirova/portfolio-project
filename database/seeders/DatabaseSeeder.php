<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Mimi Bloom',
            'email' => 'mimi@gmail.com',
            'password' => '123secret'
        ]);

        $this->call([PostsTableSeeder::class,
                     FaqsTableSeeder::class,
                     CoursesTableSeeder::class,
                     TestsTableSeeder::class]);
    }
}
