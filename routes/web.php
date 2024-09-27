<?php

use Illuminate\Support\Facades\Route;

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
//Route::get('user', function () {
//    return 'Oi usuário';
//});
//
//Route::get('teste', function () {
//    return [
//        'nome' => 'Ed Carlos',
//        'sobrenome' => 'Lima de Sousa',
//    ];
//});
//
//Route::get('/users/{id}', function($id) {
//    return $id;
//});
//
//Route::get('/users/{id}/{nome}', function($id,$nome) {
//    return $id.' - '.$nome;
//});
//
//Route::get('/users/{id?}', function($id = null) {
//    return $id;
//});
//
//Route::prefix('usuarios')->group(Function(){
//    Route::get('',function(){
//        return 'Usuario';
//    });
//    Route::get('/{id}',function($id){
//        return 'Mostra detalhes do usuario';
//    });
//    Route::get('/{id}/{permissao}', function($id,$permissao) {
//        return 'Permissões do usuários';
//    });
//
//});
//Route::get('user/id/{user}', function (\App\Models\User $user) {
//    return $user;
//});
//Route::get('/user/{user:email}', function (\App\Models\User $user){
    return $user;
//});
//Route::get('/user/{user}', [\App\Http\Controllers\UserController::class, 'show']);
Route::get('/request', function (\Illuminate\Http\Request $request){

    $r = $request;
    dd($r);
});
Route::get('/request', function(\Illuminate\Http\Request $request){
    //dd($request->all());
    //dd($request->input('sobrenome'));
    //dd($request->query('nome'));
    //dd($request->url());
    //dd($request->fullUrl());
    //dd($request->has('nome'));
    //dd($request->whenHas('nome', function(){return 'oi';}));
    //dd($request->whenFilled('nome', function($xuxa){ return $xuxa;}));
    //dd($request->ip());

});
