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


// Route::get('/', function() {
    
    // $user = factory(\App\User::class)->create();

    // $user->phone()->create([
    //     'phone' => '444-444-444',
    // ]);

    // $phone = new \App\Phone();
    // $phone->phone = '123-123-123';
    // $user->phone()->save($phone);


    // test

// });



// Route::get('/', function() {

    // $user = factory(\App\User::class)->create();
    // $post = new \App\Post([
    //     'title' => 'Title here',
    //     'bodyt' => 'body here',
    //     'user_id' => $user->id,
    // ]);
    // need to persist.
    // $post->save();
    // OR
    // $user->posts()->create([
    //     'title' => 'Title goes here..',
    //     'bodyt' => 'Body goes here...',
    // ]);
    // dd($user->posts);
    // return $user->posts;

    // update posts
    // $user->posts->first()->title = 'The new title.';
    // $user->posts->first()->bodyt = 'The new body text.';
    // $user->push(); // calling push on user not on post.
    // return $user->posts;
    // In long form.
    // $post = $user->posts->first();
    // $post->title = 'New 123';
    // $post->bodyt = 'Body 123';
    // $post->save();
    // return $user->posts;

    // two  or  more relatiosnhip in a same time.
    // $user->posts->first()->title = 'The new title.';
    // $user->posts->first()->bodyt = 'The new body text.';
    // $user->push();
    // return $user->posts;
// });

use App\Role;
Route::get('/', function() {
    // factory(\App\User::class)->create();
    
    // $user = \App\User::first();

    // $roles = \App\Role::all();
    // $roles = \App\Role::first();


    // $user->roles()->attach($roles); // attch roles
    // $user->roles()->detach($roles); // detach roles
    // dd($roles);
    // $user->roles()->attach([1,3,5]); // with specific ids from roles .
    // $user->roles()->sync([1, 3, 5]); // with specific ids from roles and duplicaion on role_user table (auto detach).
    // $user->roles()->sync([2, 4]); // with specific ids from roles and duplicaion on role_user table (auto detach).
    // $user->roles()->syncWithoutDetaching([3]); // with specific ids  sync and no detach on role_user table.
   

    // return view('welcome');
    
    // $role = Role::find(4);
    // $role->users()->sync([5]);
    $user = \App\User::first();

    // $user->roles()->sync([
    //     1 => [
    //         'name'  => 'sagar',
    //     ]
    // ]);
    // dd($user->roles); 
    // dd($user->roles->first()->pivot); 
    dd($user->roles->first()->pivot->name); 






});
