<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['nationality','country_of_residence','choiceanimals','whichdog','whichcat','sectionA_date_expiry','current_visa_status','sectionB_title','sectionB_surname_with_initials','sectionB_first_name','sectionB_name_to_be_used','sectionB_date_of_birth','sectionB_gender','sectionB_address','full_sesctionB_land_phone','full_sesctionB_mobile_phone','sectionB_email','sectionC_disability','sectionC_disability_reason','sectionC_medical','sectionC_medical_reason','sectionC_medical_information','sectionC_blood_group','sectionC_criminal','sectionC_criminal_description','sectionD_contact_person','full_sesctionD_land_phone','full_sesctionD_mobile_phone','sectionD_relationship','sectionE_education','sectionF_other_qualification','sectionG_language','sectionI_cource_title','sectionI_time','sectionI_days','sectionI_intake','sectionI_year','sectionJ_payment_plan','sectionK_furthur','sectionK_other','bank_slip','certified_copies','english_proof','signed','passport_nic','photograph'];
}
