<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayrollPayment extends Model
{
    use HasFactory;

    protected $table = 'payroll_payments';

    protected $fillable = [
        'expenses_id',
        'employee_id',
        'payroll_id',
        'Amount'
    ];

    public function expenses(){
        return $this->belongsTo(Expenses::class, 'expenses_id', 'id');
    }

    public function employee(){
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}
