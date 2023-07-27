<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Trains;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<=10; $i++){
            $train = new Trains();

            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->text();
            $train->stazione_di_arrivo = $faker->text();
            $train->orario_di_partenza = $faker->time('H:i');
            $train->orario_di_arrivo = $faker->time('H:i');
            $train->codice_treno = $faker->randomNumber(4, true);
            $train->numero_carrozze = $faker->randomDigit();
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->data_partenza = $faker->date();

            $train->save();
        }
    }
}

