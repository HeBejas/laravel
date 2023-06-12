<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//с laravel 8 нужно указывать полный путь до контроллера App\Http\Controllers\

//Посты
Route::get( '/my_page', 'App\Http\Controllers\MyFirstController@my_page_index');


Route::get('/posts','App\Http\Controllers\PostController@index')->name('post.index');
Route::get('/posts/create','App\Http\Controllers\PostController@create')->name('post.create');

Route::post('/posts','App\Http\Controllers\PostController@store')->name('post.store');
Route::get('/posts/{post}','App\Http\Controllers\PostController@show')->name('post.show');
Route::get('/posts/{post}/edit','App\Http\Controllers\PostController@edit')->name('post.edit');
Route::patch('/posts/{post}','App\Http\Controllers\PostController@update')->name('post.update');
Route::delete('/posts/{post}','App\Http\Controllers\PostController@destroy')->name('post.destroy');

Route::get('/posts/update','App\Http\Controllers\PostController@update');
Route::get('/posts/delete', 'App\Http\Controllers\PostController@delete');
Route::get('/posts/first_or_create', 'App\Http\Controllers\PostController@firstOrCreate');
Route::get('/posts/update_or_create', 'App\Http\Controllers\PostController@updateOrCreate');

Route::get('/about','App\Http\Controllers\AboutController@index')->name('about.index');
Route::get('/contacts','App\Http\Controllers\ContactsController@index')->name('contacts.index');;
Route::get('/main','App\Http\Controllers\MainController@index')->name('main.index');;


//Коменты
Route::get('/comments', 'App\Http\Controllers\Comment@index')->name('comments.index');
Route::get('/comabout', 'App\Http\Controllers\Comment@about')->name('comments.about');
Route::get('/comcontacts', 'App\Http\Controllers\Comment@contacts')->name('comments.contacts');
Route::get('/comments/props', 'App\Http\Controllers\Comment@props');

Route::get('/comments/create','App\Http\Controllers\Comment@create')->name('comments.create');
Route::post('/comments','App\Http\Controllers\Comment@store')->name('comment.store');
Route::get('/comments/{comment}', 'App\Http\Controllers\Comment@show')->name('comments.show');
Route::get('/comments/{comment}/edit', 'App\Http\Controllers\Comment@edit')->name('comments.edit');
Route::patch('/comments/{comment}', 'App\Http\Controllers\Comment@update')->name('comments.update');
Route::delete('/comments/{comment}', 'App\Http\Controllers\Comment@destroy')->name('comments.destroy');

//Мусор
Route::get('/prikol','App\Http\Controllers\PostController@prikoli');
Route::get('/page2','App\Http\Controllers\MyFirstController@second_index');
Route::get('/page3','App\Http\Controllers\MyFirstController@third_index');
Route::get('/page4','App\Http\Controllers\MyFirstController@fourth_index');
Route::get('/page5','App\Http\Controllers\MyFirstController@fifth_index');
Route::get('/page6','App\Http\Controllers\MyFirstController@sixth_index');
Route::get('/page7','App\Http\Controllers\MyFirstController@seventh_index');
Route::get('/page8','App\Http\Controllers\MyFirstController@eighth_index');
