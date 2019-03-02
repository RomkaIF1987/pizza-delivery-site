<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class Gallery extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $guarded = [];
}
