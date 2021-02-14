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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('kike.index');
})->name('index');

Route::get('/about', function () {
    return view('kike.about');
})->name('about');

Route::get('/contacts', function () {
    return view('kike.contacts');
})->name('contacts');

Route::get('/services', function () {
    return view('kike.services');
})->name('services');

Route::get('/projects', function () {
    return view('kike.projects');
})->name('projects');
Route::get('/projects/{id}', function () {
    return view('kike.single-project');
})->name('project');

Route::get('/blogs', function () {
    return view('kike.blog');
})->name('blogs');

Route::get('/blogs/{id}', function () {
    return view('kike.single-blog');
})->name('blog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


