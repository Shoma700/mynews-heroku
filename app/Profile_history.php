<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
    protected $table = 'profiles_histories';
    
    public function koushin($profile, $profile_form){
        if($profile_form['name'] != $profile->name || $profile_form['gender'] != $profile->gender ||
          $profile_form['hobby'] != $profile->hobby || $profile_form['introduction'] != $profile->introduction)
        {
        //変更項目には頭に★印を付ける。表示時は文字数を制限する

            $this->profile_id = $profile->id;
            $this->edited_at = Carbon::now();
            if($profile_form['name'] == $profile->name){
                $this->edited_name = $profile_form['name'];
            }else{
                $this->edited_name = '★'.$profile_form['name'];
            }
            if($profile_form['gender'] == $profile->gender){
                $this->edited_gender = $profile_form['gender'];
            }else{
                $this->edited_gender = '★'.$profile_form['gender'];
            }
            if($profile_form['hobby'] == $profile->hobby){
                $this->edited_hobby = $profile_form['hobby'];
            }else{
                $this->edited_hobby = '★'.$profile_form['hobby'];
            }
            if($profile_form['introduction'] == $profile->introduction){
                $this->edited_introduction = $profile_form['introduction'];
            }else{
                $this->edited_introduction = '★'.$profile_form['introduction'];
            }
            //dd($this);
            $this->save();
        }
    }

}
