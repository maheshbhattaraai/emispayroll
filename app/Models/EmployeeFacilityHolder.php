<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeFacilityHolder extends Model
{
    use HasFactory;
    protected $fillable = ['facility_holder_name_nepali','facility_holder_name_english','facility_holder_relation','facility_holder_state','facility_holder_district','facility_holder_muncipality_vdc','facility_holder_ward_no','facility_holder_tole','facility_holder_house_no','facility_holder_citizenship_no','facility_holder_verified_district','facility_holder_verified_date'];
}
