<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turmas')->insert(['name' => '101/2022',]);
        DB::table('turmas')->insert(['name' => '102/2022',]);
        DB::table('turmas')->insert(['name' => '201/2022',]);
        DB::table('turmas')->insert(['name' => '202/2022',]);
        DB::table('turmas')->insert(['name' => '301/2022',]);
        DB::table('turmas')->insert(['name' => '401/2022',]);
        DB::table('turmas')->insert(['name' => '402/2022',]);
        DB::table('turmas')->insert(['name' => '501/2022',]);
        DB::table('turmas')->insert(['name' => '502/2022',]);
        DB::table('turmas')->insert(['name' => '601/2022',]);
        DB::table('turmas')->insert(['name' => '602/2022',]);
        DB::table('turmas')->insert(['name' => '701/2022',]);
        DB::table('turmas')->insert(['name' => '702/2022',]);
        DB::table('turmas')->insert(['name' => '801/2022',]);
        DB::table('turmas')->insert(['name' => '802/2022',]);
        DB::table('turmas')->insert(['name' => '901/2022',]);
        DB::table('turmas')->insert(['name' => '902/2022',]);
    }
}
