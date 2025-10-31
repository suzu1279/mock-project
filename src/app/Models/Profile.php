<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    public static $rules = array(
        'user_id' =>'required',
        'image' => 'required',
        'post_code' => 'required',
        'address' => 'required',
        'building' => 'required',
    );

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
