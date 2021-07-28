<?php

namespace Modules\Courses\Entities;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = ['name','short_des','progression','transferoptions','duration','delivery','image','slug','description','studylevel','semesters','rqfcredits','intakes','c_image','entry_requirements','learning_support','fees_funding','deliver','field'];
}
