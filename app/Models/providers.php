<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class providers extends Model
{
    use HasFactory;
    protected $fillable = ['city_id','name','last_name','phone'];

    public function  city()
    {
        return $this->belongsTo(City::class);
    }
}
