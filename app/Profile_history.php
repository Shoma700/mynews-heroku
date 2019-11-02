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

    

}
