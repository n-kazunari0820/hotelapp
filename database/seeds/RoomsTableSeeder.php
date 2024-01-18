<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=100 ; $i <110;$i++){
            $param=[
                'room_type_id'=>'1',
                'room_number'=>$i,
            ];
            DB::table('rooms')->insert($param);
        }
        for($i=200 ; $i <210;$i++){
            $param=[
                'room_type_id'=>'2',
                'room_number'=>$i,
            ];
            DB::table('rooms')->insert($param);
        }
        for($i=300 ; $i <310;$i++){
            $param=[
                'room_type_id'=>'3',
                'room_number'=>$i,
            ];
            DB::table('rooms')->insert($param);
        }
        for($i=400 ; $i <410;$i++){
            $param=[
                'room_type_id'=>'4',
                'room_number'=>$i,
            ];
            DB::table('rooms')->insert($param);
        }
       
    }
}
