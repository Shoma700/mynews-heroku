<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//News はモデルである(継承)
class News extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
        );
}
