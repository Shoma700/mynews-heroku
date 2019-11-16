<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{

    
    public function index(Request $request)
    {
            $posts = Profile::all();
                //  dd($posts[0]->toArray());
        return view('profile.index', ['posts' => $posts]);  

    }

    
    
}
