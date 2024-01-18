<?php

use Illuminate\Database\Seeder;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create('ja_JP');
        for($i=0; $i <10; $i++){
            $param=[
                'guest_id'=>$faker->numberBetween(1,10),
                'number_of_people'=>$faker->numberBetween(1,10),
                'check_in'=>$faker->date(),
                'check_out'=> $faker->date(),
                'created_at'=>now(),
                'updated_at'=>now(),

            ];
            DB::table('reserves')->insert($param);
        }
    }
}
