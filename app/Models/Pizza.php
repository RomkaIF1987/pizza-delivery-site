<?php

namespace App\Models;

use App\Classes\OrderItems;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;


class Pizza extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $guarded = [];

    public function orderItem()
    {
        return $this->hasMany(OrderItems::class);
    }

}
