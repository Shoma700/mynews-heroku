<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

class ProfileController extends Controller
{
    public function add()
    {
      return view('admin.profile.create');
    }

    public function create(Request $request)
    {
        //varidate関数を使用して、&requestの中の情報にProfileモデルの$rulesに当てはまるものがあれば適用する
        $this->validate($request, Profile::$rules);
        //$profilesという変数をProfileモデルの新規レコードとする
        $profiles = new Profile;
        //$formという変数に$requestのすべてを代入する（'name','gender','hobby','introduction','_token'）
        $form = $request->all();
        //dump($request);
        //dump($form);        
        //送信されてきた$form内の'_token'を削除する
        unset($form['_token']);
        //データベースに保存する
        $profiles->fill($form);
        $profiles->save();
        //dump($form);     
        return redirect('admin/profile/create');
    }
    
    public function index(Request $request)
    {
        $cond_name = $request->cond_name;
        if ($cond_name != '') {
            //検索されたら検索結果を取得する
            $posts = Profile::where('name', $cond_name)->get();
        } else {
            //それ以外はすべてニュースを取得する
            $posts = Profile::all();
        }
        return view('admin.profile.index', ['posts' => $posts, 'cond_name' => $cond_name]);
    }

    public function edit(Request $request)
    {
        // Profile Modelからデータを取得する
        $profiles = Profile::find($request->id);
        //dump($profiles);
        if (empty($profiles)) {
        abort(404);    
        }
        return view('admin.profile.edit', ['profiles_form' => $profiles]);
    }
    
    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, Profile::$rules);
        // News Modelからデータを取得する
        $profiles = Profile::find($request->id);
        // 送信されてきたフォームデータを格納する
        $profiles_form = $request->all();
        // dd($profiles_form);
        unset($profiles_form['_token']);
        // 該当するデータを上書きして保存する
        $profiles->fill($profiles_form)->save();
        return redirect('admin/profile');
    }
    
    
    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $news = News::find($request->id);
        // 削除する
        $news -> delete();
        return redirect('admin/news/');
        }
}