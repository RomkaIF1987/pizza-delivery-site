<?php

namespace App\Classes;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class);
    }

    public function complete()
    {
        return $this->update(['orders_completed' => true]);
    }

    public function incomplete()
    {
        return $this->update(['orders_completed' => false]);
    }
}
