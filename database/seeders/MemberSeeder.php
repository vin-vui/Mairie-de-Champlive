<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;
use Faker\Generator;
use Illuminate\Container\Container;

class MemberSeeder extends Seeder
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

        $member = new Member;
        $member-> lastname = 'Dupond';
        $member-> firstname = 'Linette';
        $member-> position = 'Maire';
        $member-> image = '';
        $member->save();


         for ($i = 1; $i <= 10; $i++) { /**Fait parti de la fonction $faker, et dit que l'on ajoute 1000 données aléatoires */
             $member = new Member;
             $member->lastname = $this->faker->word();
             $member->firstname = $this->faker->word();
             $member->position = $this->faker->randomElement(['Maire', 'Premier adjoint', 'Deuxième adjoint', 'Conseiller']);
             $member->image = '';
             $member->save();
         }
    }
}
