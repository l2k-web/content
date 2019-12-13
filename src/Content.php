<?php

namespace L2k\Content;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $fillable = [
        'title',
        'description'
    ];
}
