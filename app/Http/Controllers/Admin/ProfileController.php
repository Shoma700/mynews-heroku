<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\profile;

class ProfileController extends Controller
{
   
   public function edit()
  {
      return view('admin.profile.edit');
  }
  public function add()
  {
      return view('admin.profile.create');
  }
  public function create(Request $request)
  {
        //13章_Varidationを行う
        $this->validate($request, profile::$rules);
        $profiles = new profile;
        $form = $request->all();
        //フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        
        //'name','gender','hobby','introduction'のみ保存する
        
        //フォームから送信されてきた_tokenを削除する
        unset($form['_token']);

        //データベースに保存する
        $profiles->fill($form);
        $profiles->save();
        
      return redirect('admin/profile/create');
  }
  public function update()
  {
      return redirect('admin/profile/edit');
  }
  
}