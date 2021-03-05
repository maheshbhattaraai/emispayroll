<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['nepali_name','english_name','epl_ref_no_nep','epl_ref_no_eng','photo','hired_place','bs_dob','ad_dob','citizenship_no','verified_district','verified_date','english_father_name','nepali_father_name','father_job','english_grandfather_name','nepali_grandfather_name','grandfather_job','english_mother_name','nepali_mother_name','mother_job','english_spouce_name','nepali_spouce_name','spouce_job','no_of_sons','no_of_daughters'];
}
