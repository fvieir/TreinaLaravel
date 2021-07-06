<?php

use Illuminate\Database\Seeder;

class LivrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('livros')->insert([
          //  'titulo' => 'A Cabana',
            //'descricao' => 'Livro com varias cópias vendidas'
        //]);

        factory('App\Livro',1)->create();
    }
}
