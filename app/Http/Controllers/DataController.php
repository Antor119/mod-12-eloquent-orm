<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function getData(){
        // $user=User::all()->take(3);
        // $profile=Profile::whereBio(1)->get();
        $user=User::find(1);
        $user->email="shakib45@gmail.com";
        $user->save();

        $newUser=new User();
        $newUser->email= "warner45@gmail.com";
        $newUser->save();
        return $newUser;
    }

    public function getUser($id){
        $user=User::findOrFail($id);
        return $user;
    }
}
