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
    
}
