<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Post::factory(100)->state(
            new Sequence(fn (Sequence $sequence) => [
                'created_at' => now()->addDays($sequence->index),
                'updated_at' => now()->addDays($sequence->index),
            ])
        )->create();
    }
}
