<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $table = "checkout_info";
    protected $fillable = ['first_name','last_name','email','p_num','address','country','postcode','town'] ;
}
