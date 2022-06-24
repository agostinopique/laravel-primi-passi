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

Route::get('/Home', function () {
    $data = [

        'user' => 'Giovanni Giorgio',
        'message' => 'Ciao amico!',
        'menu' => ['Home', 'About', 'Contacts'],
        'lorem' =>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque placeat iste perspiciatis nisi similique, facilis repellat aut quisquam voluptas id maxime? Asperiores doloremque aut veritatis quibusdam eum enim assumenda animi atque perspiciatis soluta? Repellendus harum sint accusamus, aut tenetur animi modi necessitatibus voluptate iure repellat! Error nobis culpa pariatur enim facilis exercitationem voluptates repellendus quam aliquid reprehenderit saepe distinctio nostrum deleniti iure repudiandae magnam ipsum, quo officiis ex doloremque corrupti hic accusantium quae? Pariatur reiciendis, ullam dicta tempore, sed provident laudantium explicabo animi accusamus dignissimos alias, fuga molestias corrupti placeat facere id inventore consectetur assumenda officiis sapiente esse nesciunt. Vitae.'
    ];
    return view('home', $data);
})->name('Home');


Route::get('/About', function () {
    $data = [

        'menu' => ['Home', 'About', 'Contacts'],
        'lorem' =>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque placeat iste perspiciatis nisi similique, facilis repellat aut quisquam voluptas id maxime? Asperiores doloremque aut veritatis quibusdam eum enim assumenda animi atque perspiciatis soluta? Repellendus harum sint accusamus, aut tenetur animi modi necessitatibus voluptate iure repellat! Error nobis culpa pariatur enim facilis exercitationem voluptates repellendus quam aliquid reprehenderit saepe distinctio nostrum deleniti iure repudiandae magnam ipsum, quo officiis ex doloremque corrupti hic accusantium quae? Pariatur reiciendis, ullam dicta tempore, sed provident laudantium explicabo animi accusamus dignissimos alias, fuga molestias corrupti placeat facere id inventore consectetur assumenda officiis sapiente esse nesciunt. Vitae.'
    ];
    return view('about', $data);
})->name('About');


Route::get('/Contacts', function () {
    $data = [

        'menu' => ['Home', 'About', 'Contacts'],
        'contatti' => ['email@libero.it', 05555552, 'via santi santissimi']
    ];
    return view('contacts', $data);
})->name('Contacts');
