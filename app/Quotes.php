<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    protected $fillable = ['author', 'quote'];
    protected $guarded = [];
    //
}
