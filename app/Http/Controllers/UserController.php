<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users(){
        //Create Fake data for the users
        //      User::factory(100)->create();
        //stores all the users resultant query in the variable $users
        $Allusers = User::all();
        //returns a class for the view with the page that the variable is is directed to (users), and the data (or variable) that is given to the desired page (Allusers)
        return view('users',compact('Allusers'));
    }
}
