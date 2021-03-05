<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDescription extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id','sex','religion','ethincity','huliya','blood_group','mool','aadhibasi','madhesi','dalit','is_rural_disrict','rural_district','is_apaanga','apaanga_kisim'];
}
