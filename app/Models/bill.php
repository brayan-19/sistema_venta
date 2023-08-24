<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    protected $fillable =['name', 'sub_total','total','city_id','customers_id','employees_id','products_id'];
    public function  city()
    {
        return $this->belongsTo( City::class);

    }
    public function  customer()
    {
        return $this->belongsTo( Customer::class);

    }
    public function  employee()
    {
        return $this->belongsTo( Employees::class);

    }
    public function  product()
    {
        return $this->belongsTo( Product::class);

    }
}
