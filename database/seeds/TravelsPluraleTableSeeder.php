<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsPluraleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {  
        for ($i = 0; $i < 10; $i++){
            $travel = new Travel();
            $travel->localita = 'stringa';
            $travel->save();
        }//chiusura ciclo for
    } //chiusura run
}
