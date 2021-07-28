<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'module';
	protected $primaryKey = 'id';
	protected $fillable = ['course_id','name','credits'];
}
