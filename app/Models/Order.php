<?php

namespace App\Models;

use App\Models\User;
use App\Models\Coupon;
use App\Models\OrderDetail;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
