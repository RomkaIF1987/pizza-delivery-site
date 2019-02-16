<?php

namespace App\Classes;

use App\Models\Pizza;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $guarded = [];

    public function pizza()
    {
        return $this->belongsTo(Pizza::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}