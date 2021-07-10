<?php

use Illuminate\Database\Seeder;

class TelefoneTalbeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');
        factory('App\Telefone',50)->create();
    }
}
