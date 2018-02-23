<?php

namespace App\model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['tittle', 'sub_title', 'slug', 'body', 'status', 'image'];
}
