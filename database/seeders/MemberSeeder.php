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
        $member-> name = 'Dupond';
        $member-> nickname = 'Linette';
        $member-> function = 'Maire';
        $member-> photo = '';
        $member->save();


         for ($i = 1; $i <= 10; $i++) { /**Fait parti de la fonction $faker, et dit que l'on ajoute 1000 données aléatoires */
             $member = new Member;
             $member->name = $this->faker->word();
             $member->nickname = $this->faker->word();
             $member->function = $this->faker->randomElement(['Maire', 'Premier adjoint', 'Deuxième adjoint', 'Conseiller']);
             $member->photo = '';
             $member->save();
         }
    }
}
