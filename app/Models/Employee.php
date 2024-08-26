<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;


    protected $table = 'employees';

    protected $fillable = [
        'Full_name',
        'Address',
        'Phone_no',
        'Job_titlte',
        'email'



    ];
}
