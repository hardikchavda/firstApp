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
    // public function getAddressAttribute($value)
    // {
    //     $this->attributes['address'] = strtolower($value);
    // }

    protected function address(): Attribute
    {
        return Attribute::make(
            //get: fn ($value) => ucfirst($value),
            set: fn ($value) => strtolower($value),
        );
    }
}
