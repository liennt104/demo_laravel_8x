<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('students')->count() === 0) {
            DB::table('students')->insert([
                [
                    'name' => 'Nguyen Van A',
                    'class' => '15111',
                    'birthday' => '04/04/1994',
                    'phone' => '12312312313',
                ],
                [
                    'name' => 'Nguyen Van B',
                    'class' => '15112',
                    'birthday' => '04/04/1994',
                    'phone' => '12312312313',
                ],
                [
                    'name' => 'Nguyen Van C',
                    'class' => '15113',
                    'birthday' => '04/04/1994',
                    'phone' => '12312312313',
                ],
            ]);
        } else {
            echo 'students table not empty' . PHP_EOL;
        }
    }
}
