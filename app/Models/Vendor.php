<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'contact_person',
        'phone_number',
        'email',
        'address',
        'portfolio_url',
        'internal_notes',
    ];

    public function events()
    {
        return $this->belongsToMany(Event::class)
            ->withPivot('contract_document_url', 'total_price', 'amount_paid', 'payment_status')
            ->withTimestamps();
    }
}
