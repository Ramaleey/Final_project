<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'id',
        'user_id',
        'Reference_no',
        'status',
        'Total_price',
        'Payment_status',
    ];

    public function orderitems(){
        return $this->hasMany(OrderItems::class, 'order_id', 'id');
    }

    public function customer(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function delivery(){
        return $this->hasOne(Delivery::class, 'order_id', 'id');
    }

}
