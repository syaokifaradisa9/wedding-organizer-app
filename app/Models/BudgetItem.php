<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class BudgetItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'item_name',
        'estimated_budget',
        'final_price',
        'amount_paid',
        'status',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
