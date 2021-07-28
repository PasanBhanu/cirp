<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
	protected $table = 'workexperiences';
    protected $fillable = ['application_id','sectionH_name_of_organization1','sectionH_title_nature1','sectionH_time','sectionH_from','sectionH_to'];
    
}