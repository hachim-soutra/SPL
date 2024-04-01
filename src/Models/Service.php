<?php

namespace ExpertShipping\Spl\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'code', 'carrier_id', 'transport_type', 'active', 'insurance_active', 'use_for_aramex_bulk', 'premium_details', 'rate', 'freightcom_code',];

    protected $casts = [
        'use_for_aramex_bulk' => 'boolean',
        'premium_details' => 'array',
    ];

    public function carrier()
    {
        return $this->belongsTo(Carrier::class);
    }


    public function discount()
    {
        return $this->hasOne(DiscountService::class);
    }

    public function companiesDiscounts()
    {
        return $this->hasMany(CompanyDiscount::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInsuranceActive($query)
    {
        return $query->where('insurance_active', 1);
    }
}
