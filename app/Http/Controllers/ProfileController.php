<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $posts = Profile::all()->sortByDesc('id');
        
        // if (count($posts) > 0) {
        //     $headline = $posts->shift();
        // } else {
        //     $headline = null;
        // }
        
        //profile/index.blade.phpにファイルを渡している
        //また、Viewテンプレートに postsという変数を渡している
        return view('profile.index', ['posts' => $posts]);
    }
}
