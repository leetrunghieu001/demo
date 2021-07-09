<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    public $timestamps = false;

    protected $fillable = [
        'id', 'title', 'content',
    ];

    protected $primaryKey = 'id';
    protected $table = 'blog_table';
}
