<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class AcademicQualifications extends Model
{
	protected $table = 'academic_qualifications';
	protected $primaryKey = 'id';
    protected $fillable = ['application_id','a_year','a_qulification','a_insitute','a_awarding_body','a_country'];
    
}
