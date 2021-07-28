<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Inquire extends Model
{
    protected $fillable = ['title','name','phone','email','message'];
}
