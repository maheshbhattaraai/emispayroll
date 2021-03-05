<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('service', 'like', '%' . $query . '%');
    }
}
