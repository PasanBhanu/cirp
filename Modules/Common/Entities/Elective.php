<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Elective extends Model
{
    protected $table = 'electives';
	protected $primaryKey = 'id';
	protected $fillable = ['course_id','name','credits'];
}
