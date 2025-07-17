<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'lead_planner_id',
        'event_name',
        'event_date',
        'venue_name',
        'venue_address',
        'status',
    ];

    protected $casts = [
        'event_date' => 'date',
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function leadPlanner()
    {
        return $this->belongsTo(User::class, 'lead_planner_id');
    }

    public function vendors()
    {
        return $this->belongsToMany(Vendor::class)
            ->withPivot('contract_document_url', 'total_price', 'amount_paid', 'payment_status')
            ->withTimestamps();
    }

    public function checklistItems()
    {
        return $this->hasMany(ChecklistItem::class);
    }

    public function guests()
    {
        return $this->hasMany(Guest::class);
    }

    public function budgetItems()
    {
        return $this->hasMany(BudgetItem::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function documents()
    {
        return $this->morphMany(Document::class, 'documentable');
    }
}
