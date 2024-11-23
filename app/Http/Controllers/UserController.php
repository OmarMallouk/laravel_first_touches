<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller{
   public function get_user(){
        $users = User::all();
    
        return response()->json([
           "users" => $users
        ]);
    }

}