<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use Faker\Generator;
use Illuminate\Container\Container;

class ServiceSeeder extends Seeder
{
    
    public function __construct()
    {
        $this->faker=$this->withFaker();
    }

    protected function withFaker(){
       return Container::getInstance()->make(Generator::class);
    }


    public function run(): void
    {
        $service = new Service;
        $service-> name = 'Maison des Services';
        $service-> address = '36 Rue du Moulin';
        $service-> cp = '25642';
        $service-> city = 'Roulans';
        $service-> mail = 'maison.services@gmail.com';
        $service-> phone = '03 84 32 58 96';
        $service->save();


        for ($i = 1; $i <= 10; $i++) { /**Fait parti de la fonction $faker, et dit que l'on ajoute 1000 données aléatoires */
            $service = new Service;
            $service->name = $this->faker->word();
            $service->address = $this->faker->word();
            $service->cp = $this->faker->randomNumber(5, true);
            $service->city = $this->faker->word();
            $service->phone = $this->faker->randomNumber(5, true);
            $service->mail = $this->faker->email();
            $service->save();
        }
    }


}
