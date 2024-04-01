<?php

namespace ExpertShipping\Spl\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CashRegister extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'company_id',
        'terminal_id',
        'enable_tip',
        'display_percentage_selection',
        'display_amount_selection',
        'predefined_percentage_1',
        'predefined_percentage_2',
        'predefined_percentage_3',
        'tip_warning_threshold',
    ];

    public function cashRegisterSessions()
    {
        return $this->hasMany(CashRegisterSession::class)->orderBy('created_at', 'desc');
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function store()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
