<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Profile はモデルである(継承)
class Profile extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required'
        );
    
    
    //ProfileモデルとProfile_historyモデルを関連付ける
    public function profiles_histories()
    {
        return $this->hasmany('App\Profile_history');
    }
    
}
