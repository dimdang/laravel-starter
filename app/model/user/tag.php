<?php

namespace App\model\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $fillable = ['slug', 'name'];
}
