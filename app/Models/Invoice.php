<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'invoice_number',
        'issue_date',
        'due_date',
        'total_amount',
        'status',
        'payment_proof_url',
    ];

    protected $casts = [
        'issue_date' => 'date',
        'due_date' => 'date',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
