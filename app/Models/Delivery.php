<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Delivery extends Model
{
    use HasFactory;

    protected $table = 'deliveries';
    protected $fillable = [
        'user_id',
        'order_id',
        'delivery_location',
        'house_number'
    ];

    public function customer(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function orders(): BelongsTo{
        return $this->belongsTo(Orders::class, 'order_id', 'id');
    }

}
