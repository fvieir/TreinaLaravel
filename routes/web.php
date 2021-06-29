<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contato', function (){
    return "Pagina de contato";
});

Route::post('contato', function () {
    return 'Realizando um Post!';
});

Route::delete('contato' ,function () {
    return 'Realizando um delete';
});

Route::put('contato', function () {
    return 'Realizando um Put';
});

Route::match(['get', 'post'],'sobre', function () {
    return 'Trabalhando com varios verbos';
}); // função march permiti escolher quais metodos ficaram liberados

Route::any('todos', function () {
    return 'Todos os metodos';
}); // Libera todos os metodos para serem acessados

Route::any('gerar', function () {
    $url = url('nova'); // função url gera uma nova url com enderenço do site
    return 'Gera url ' .$url;
}); 

Route::get('produto/{id}', function ($id) {
    return "produto/{$id}";
}); // Passando parametros

Route::get('artigo/{id?}', function ($id = null) {
    return "Artigo/{$id}";
}); // Passando parametros com id não obrigatório

Route::get('jogo/{id}/{genero}' , function ($id, $genero){
    return "Jogos - {$id}-{$genero}";
});