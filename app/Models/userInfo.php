<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userInfo extends Model
{
    use HasFactory;

    public $timestamps = FALSE;

    // // This is Mutator for lowering case.
    // Laravel 8
    // public function getAddressAttribute($value)
    // {
    //     $this->attributes['address'] = strtolower($value);
    // }

    // Laravel 9
    protected function address(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => strtolower($value),
        );
    }
}
