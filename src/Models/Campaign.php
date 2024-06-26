<?php

namespace ExpertShipping\Spl\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'sent' => 'boolean',
        'send_date' => 'datetime',
    ];
}
