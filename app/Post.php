<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content','user_id','category_id','author','featured'];
    protected $guarded = [];
    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        //return $this->belongsTo('App\Category','category_id')->with(['name']);
        return $this->belongsTo(Category::class);
    }
}
