<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $param = [
            'content' => '和輝',
            
        ];
        DB::table('people')->insert($param);
        $param = [
            'content' => '和',
           ];
        DB::table('people')->insert($param);
         }
}