<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Room::factory(10)->create();
        Student::factory(20)->create();
        // User::factory(10)->create();
        // $this->call([RoomTableSeeder::class]);
        // $this->call([StudentTableSeeder::class]);
    }
}
