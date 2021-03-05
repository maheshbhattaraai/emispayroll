<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAddress extends Model
{
    use HasFactory;

    protected $fillable= ['employee_id','same_as_permanent','nepali_permanent_state','english_permanent_state','nepali_permanent_district','english_permanent_district','nepali_permanent_muncipality_vdc','english_permanent_muncipality_vdc','english_permanent_ward_no','nepali_permanent_ward_no','english_permanent_tole','nepali_permanent_tole','english_permanent_house_no','nepali_permanent_house_no','english_permanent_contact_no','nepali_permanent_contact_no','temporary_email','permanent_email','nepali_temporary_state','english_temporary_state','english_temporary_state','english_temporary_district','nepali_temporary_muncipality_vdc','english_temporary_muncipality_vdc','english_temporary_ward_no','english_temporary_ward_no','english_temporary_tole','nepali_temporary_tole','english_temporary_house_no','nepali_temporary_house_no','english_temporary_contact_no','nepali_temporary_contact_no'];
}
