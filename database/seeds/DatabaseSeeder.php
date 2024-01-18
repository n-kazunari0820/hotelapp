<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(GuestsTableSeeder::class);
         $this->call(ReservesTableSeeder::class);
         $this->call(Room_typesTableSeeder::class);
         $this->call(RoomsTableSeeder::class);
         $this->call(Reserve_roomTableSeeder::class);
    }
}
