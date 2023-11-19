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
        $param=[
            'people'=>'1'
        ];
        DB::table('people')->insert($param);

        $param=[
            'people'=>'2'
        ];
        DB::table('people')->insert($param);

        $param=[
            'people'=>'3'
        ];
        DB::table('people')->insert($param);

        $param=[
            'people'=>'4'
        ];
        DB::table('people')->insert($param);

        $param=[
            'people'=>'5'
        ];
        DB::table('people')->insert($param);

        $param=[
            'people'=>'6'
        ];
        DB::table('people')->insert($param);

        $param=[
            'people'=>'7'
        ];
        DB::table('people')->insert($param);

        $param=[
            'people'=>'8'
        ];
        DB::table('people')->insert($param);

        $param=[
            'people'=>'9'
        ];
        DB::table('people')->insert($param);

        $param=[
            'people'=>'10'
        ];
        DB::table('people')->insert($param);
    }
}
