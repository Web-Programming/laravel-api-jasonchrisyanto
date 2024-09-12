<?php

namespace Database\Seeders;

use App\Models\funding;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
        funding::create([
            'title'=> 'Bantuan Kemanusiaan',
            'desc'=> 'Bantuan untuk korban bencana alam',
            'image'=> 'bantuan-kemanusiaan.jpg',
            'progress'=> 0,
            'duration'=> '1 bulan',
            'collected'=> 0,
            'target'=> 1000000,
            'user_id'=> 1,
        ])
        ]);
    }
}
