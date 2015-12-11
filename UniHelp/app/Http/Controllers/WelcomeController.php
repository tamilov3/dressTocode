<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function home(){
       if(isset($_SESSION['user'])) {
           return view('home');
       }
        return view('login');
    }

    public function profile($name, $surname, $id){
        $user=User::find()

        if(is_null($user)){
            abort();
        }
        return view('profile', compact('ime', 'prezime'));
    }

    public function rank(){
        return view('rank');
    }
}
