<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'thumbnail', 'title', 'slug', 'sub_title', 'detail', 'post_type', 'is_published'];
}
