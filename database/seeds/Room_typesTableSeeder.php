<?php

use Illuminate\Database\Seeder;

class Room_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'room_name'=>'シングルルーム',
            'people_stay'=>'1'
        ];
        DB::table('room_types')->insert($param);
        $param=[
            'room_name'=>'ツインルーム',
            'people_stay'=>'2'
        ];
        DB::table('room_types')->insert($param);
        $param=[
            'room_name'=>'トリプルルーム',
            'people_stay'=>'3'
        ];
        DB::table('room_types')->insert($param);
        $param=[
            'room_name'=>'スイートルーム',
            'people_stay'=>'4'
        ];
        DB::table('room_types')->insert($param);
    }
}
