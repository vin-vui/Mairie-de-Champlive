<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Deliberation;
use Faker\Generator;
use Illuminate\Container\Container;

class DeliberationSeeder extends Seeder
{
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    public function run(): void
    {
        $deliberation = new Deliberation;
        $deliberation->title = 'Délibération septembre';
        $deliberation->date = '22-05-23';
        $deliberation->file = '';
        $deliberation->save();

        for ($i = 1; $i <= 20; $i++) { /**Fait parti de la fonction $faker, et dit que l'on ajoute 1000 données aléatoires */
            $deliberation = new Deliberation;
            $deliberation->title = $this->faker->word();
            $deliberation->date = $this->faker->date();
            $deliberation->file = '';
            $deliberation->save();
        }
    }


}
