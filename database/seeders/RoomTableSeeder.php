<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('rooms')->count() === 0) {
            DB::table('rooms')->insert([
                [
                    'name' => 'P306',
                    'max' => 30
                ],
                [
                    'name' => 'L306',
                    'max' => 50
                ],
                [
                    'name' => 'F106',
                    'max' => 32
                ],
            ]);
        } else {
            echo 'rooms table is not empty' . PHP_EOL;
        }
    }
}
