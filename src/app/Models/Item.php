<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    public static $rules = array (
        'user_id' => 'required',
        'image' => 'required',
        'condition' => 'required',
        'name' => 'required',
        'brand' => 'required',
        'description' => 'required',
        'price' => 'required',
    );
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function sold_item()
    {
        return $this->hasOne(SoldItem::class);
    }

    public function likeByUser($userId)
    {
        return $this->likes()->where('user_id', $userId)->exists();
    }

}
