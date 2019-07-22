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

// Route::get('/', function () {
//     // return view('welcome');
//     return "Hello Sagar";
// });


Route::get('/', function() {
    
    $user = factory(\App\User::class)->create();

    $user->phone()->create([
        'phone' => '444-444-444',
    ]);

    // $phone = new \App\Phone();
    // $phone->phone = '123-123-123';
    // $user->phone()->save($phone);


});
