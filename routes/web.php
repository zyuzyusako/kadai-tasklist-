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

Route::get('/','TasksController@index');
Route::resource('tasks','TasksController');

/*
Route::get('/', function () {
    return view('welcome');
});

// CRUD
// メッセージの個別詳細ページ表示
Route::get('tasks/{id}', 'TasksController@show');
// メッセージの新規登録を処理（新規登録画面の表示ではない）
Route::post('tasks', 'TasksController@store');
//メッセージの更新処理（編集画面の表示ではない）
Route::put('tasks/{id}', 'TasksController@update');
//メッセージの削除
Route::delete('tasks/{id}', 'TasksController@destroy');

//index:showの補助
Route::get('tasks', 'TasksController@index')->name('tasks.index');
//create:新規作成用のフォームページ
Route::post('tasks/create', 'TasksController@create')->name('tasks.create');
//edit:更新用のフォームページ
Route::put('tasks/{id}/edit', 'TasksController@edit')->name('tasks.edit');


//全てこの一行で7つの機能を持つことが出来る

//Route::resource('tasks', 'TasksController');

*/
