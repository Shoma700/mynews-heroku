<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_history extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
        'edited_name' => 'required',
        'edited_gender' => 'required',
        'edited_hobby' => 'required',
        'edited_introduction' => 'required'
        );

    
    //hasManyは1対多の関連付けを行う
    //newsテーブル(モデル)1に対して、historiesテーブル(モデル)多の関連付け
    public function histories()
    {
      return $this->hasMany('App\History');

    }
}
