<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherDetail extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id','bahu_bibaha','baal_bibaha','is_spouce_app_pr','is_spouce_in_other_country','country_name','date','pending_payment_government','reason','experience_qualification'];
}
