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
    $data = [
        'user' => 'Giovanni Giorgio',
        'message' => 'Ciao amico!',
        'menu' => ['Home', 'About', 'Contacts']
    ];
    return view('home', $data);
})->name('home');

Route::get('/Home', function () {
    $data = [
        'user' => 'Giovanni Giorgio',
        'message' => 'Ciao amico!',
        'menu' => ['Home', 'About', 'Contacts']
    ];
    return view('home', $data);
})->name('home');


Route::get('/About', function () {
    $data = [
        'menu' => ['Home', 'About', 'Contacts']
    ];
    return view('about', $data);
})->name('about');


Route::get('/Contacts', function () {
    $data = [
        'menu' => ['Home', 'About', 'Contacts'],
        'contatti' => ['email@libero.it', 05555552, 'via santi santissimi']
    ];
    return view('contacts', $data);
})->name('contacts');
