<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

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
        $this->validate($request, Profile::$rules);
        $profiles = new Profile;
        $form = $request->all();
        //'name','gender','hobby','introduction'のみ保存する
        //dump($request);
        //dump($form);        
        //フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        //データベースに保存する
        $profiles->fill($form);
        $profiles->save();
        //dump($form);     
      
      return redirect('admin/profile/create');
  }
  public function update()
  {
      return redirect('admin/profile/edit');
  }
  
}