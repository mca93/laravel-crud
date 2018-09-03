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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('category','CategoryController');

Route::get('profile', function(){
    return view('profile');
});

Route::resource('fornecedor', 'FornecedorController')->only([
    'store', 'edit', 'update']);
Route::get('/fornecedor/{forncedor_id}/pessoaContacto/{pessoaContacto_id}', 'FornecedorController@getPessoaContactoDetails')->name('responsavel');
Route::get('/fornecedor/{forncedor_id}/documentUpload', 'FornecedorController@documentsRequest')->name('document');
Route::get('/kyv/{forncedor_id}/kyvStatus', 'FornecedorController@showkyvStatus')->name('kyv');
Route::post('/fornecedor/{forncedor_id}/pessoaContacto/{pessoaContacto_id}/notificacao', 'FornecedorController@notifyPessoaContacto')->name('notify');


/* View Composer*/
View::composer(['*'], function($view){
    
    $user = Auth::user();
    $view->with('user',$user);
    

    

});

