<?php

use Illuminate\Database\Seeder;

class Reserve_roomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10;$i++){
            $param=['reserve_id'=>$i+1,
            'room_id'=>'1',
            'stay_day'=>'2',
            'price'=>'10000',
            
        ];
    
        DB::table('reserve_room')->insert($param);
    
        }
        }
}
