<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = ['city_id','name','last_name','identification_card','phone'];

    public function  city()
    {
        return $this->belongsTo(City::class);
    }
}
