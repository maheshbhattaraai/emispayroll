<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviousOrganizationDetail extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id','name','address','niyukti_date','nirnaya_date','hajiri_date','sewa','samuha','upasamuha','shreni_taha','position','technical','resign_date','resign_reason'];
}
