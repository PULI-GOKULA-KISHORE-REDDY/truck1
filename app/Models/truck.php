<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class truck extends Model
{
    use HasFactory;
    private $fillable = [
        'loadType',
        'source',
        'destination',
        'source_pincode',
        'destination_pincode',
        'pickupType'
    ];
}
