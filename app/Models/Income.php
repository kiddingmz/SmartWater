<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'amount',
        'from',
        'to',
        'status',
        'from_device',
        'from_ip',
        'from_app',
        'user_id',
    ];
}
