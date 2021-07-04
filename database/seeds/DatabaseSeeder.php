<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros')->insert([
            'titulo' => 'A cabana',
            'descricao' => 'Livro de grande sucesso'
            
        ]);
    }
}
