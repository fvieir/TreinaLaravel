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

Route::match(['get', 'post'],'sobreP', function () {
    return 'Trabalhando com varios verbos';
}); // função march permiti escolher quais metodos ficaram liberados

Route::any('todos', function () {
    return 'Todos os metodos';
}); // Libera todos os metodos para serem acessados

Route::any('gerar', function () {
    $url = url('nova');
    return "Gera uma nova url" .$url;
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

Route::put('link', function (){
    return 'Link  <a href= "'.route('detalhe').'">Detalhe<a/>'; // Passando com link a rota que foi renomeada
});

Route::get('teste/detalhe', ['as' => 'detalhe', function () {
    return "Rota renomeada"; // "as" renomeia a rota, assim caso a rota mude no nome não precisa altera no codigo inteiro
}]);

Route::group(['prefix' => 'admin'] , function() {
    Route::get('jogos/{id?}', function ($id = 1){
        return "Jogos/{$id}";
    });
    Route::get('link', function(){
        return 'Link  <a href="'.route('detalhe').'">Detalhe</a>';
    });
}); // Varias rotas de um grupo, todos podem ser acessadas por localhost/admin/jogos ou admin/link 

Route::get('home','HomeController@index'); // Rota para chamar um controller com metodo index

Route::get('/amigos','HomeController@amigos');

Route::get('/sobre', 'HomeController@sobre');

Route::get('/dinamico','HomeController@dinamico');



