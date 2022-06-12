<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\post;

class UserServiceController extends Controller
{
    public function manyToMany_relation(){
        $user = user::find();
        $post = post::find([]);
        $user->callservices()->attach($post);
        return 'Success';
    }
}
