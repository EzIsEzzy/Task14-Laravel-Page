<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//then we use the routing to display the page (safe practice is to send the page via the controller, so we have..umm.. more control obviously)
Route::get('/users',[UserController::class,'users']);
//this command "Routes" to get to show the link "URI" named 'users' in the server, by performing the action of passing the function that is 'users' in 'the UserController' class, all to view the website with the appended parameters.
