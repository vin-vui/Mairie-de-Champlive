<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = new User;
        $user->name = 'mairie-champlive';
        $user->email = 'mairie.champlive@wanadoo.fr';
        $user->password = Hash::make('test');

        $user->save();

    }
}
