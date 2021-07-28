<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class SchoolEducation extends Model
{
	protected $table = 'school_education';
	protected $primaryKey = 'id';
    protected $fillable = ['application_id','examination_body','year','school','subject','result'];
    
}
