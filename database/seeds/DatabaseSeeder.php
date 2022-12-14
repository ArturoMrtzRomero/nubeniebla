<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Arturo Martinez Romero',
            'email'=>'admin@dealpc.com',
            'password'=>bcrypt('frijol15')
            ]);
    }
}
