<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Association;
use Faker\Generator;
use Illuminate\Container\Container;

class AssociationSeeder extends Seeder
{

/** Cette fonction permet d'ajouter des données dans le seeder, c'est un générateur de données */
    //  protected $faker; /** protected signifie que l'on protège la variable */

     public function __construct()
     {
         $this->faker=$this->withFaker();
     }

     protected function withFaker(){
        return Container::getInstance()->make(Generator::class);
     }
   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $association = new Association;
        $association->name = 'Les Pétanqueurs';
        $association->presentation = 'Nous sommes une association ou nous jouons à la pétanques tous les samedis';
        $association->contact = '03 84 32 56 80';
        $association->image = '';

        $association-> save();


         for ($i = 1; $i <= 1000; $i++) { /**Fait parti de la fonction $faker, et dit que l'on ajoute 1000 données aléatoires */
             $association = new Association;
             $association->name = $this->faker->word();
             $association->presentation = $this->faker->paragraph();
             $association->contact = $this->faker->word();
             $association->image = '';
             $association->save();
         }
    }
}
