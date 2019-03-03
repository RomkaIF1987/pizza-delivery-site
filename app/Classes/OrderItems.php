<?php

namespace App\Classes;

use App\Models\MenuItem;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $guarded = [];

    public function menuItems()
    {
        return $this->belongsTo(MenuItem::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}