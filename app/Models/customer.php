<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    //values to be filled by users 
    protected $fillable = [
        'customer_id',
        'first_name',
        'last_name',
        'address',
        'date_of_birth',
        'phonenumber',
        'email'
    ];
}
