<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Profile;
use App\Models\Tag;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        //one to one Relation
        // return User::with('profile')->get();
        // return Profile::with('user')->get();

        //one to many relation
       // return user::with('post')->get();
       // return Post::with('user')->get();
       $user=User::find(1);
       $userPost=$user->post;
       return $userPost;

       //many to many
      // return Post::with('tag')->get();
      //return Tag::with('post')->get();




    }

}
