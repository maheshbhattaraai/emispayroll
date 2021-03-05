<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalLanguage extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id','language','written_skill','reading_skill','speaking_skill'];
}
