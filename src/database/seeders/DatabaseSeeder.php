<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\TeamSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        if(User::count()==0) {
        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        $user->assignRole('super_admin');
    }
        // Panggil seeder tambahan di dalam method run()
        $this->call([
            TeamSeeder::class,
        ]);
        
        $this->call([
            MediaSeeder::class,
        ]);

        $this->call([
            HomecSeeder::class,
        ]);

        $this->call([
            HomeaSeeder::class,
        ]);

        $this->call([
            HomebSeeder::class,
        ]);

        $this->call([
            TitleSeeder::class,
        ]);

        $this->call([
            AbtpointSeeder::class,
        ]);

        $this->call([
            CourseSeeder::class,
        ]);

        $this->call([
            TestiSeeder::class,
        ]);
    }
}