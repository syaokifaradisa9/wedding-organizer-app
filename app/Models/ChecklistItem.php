<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChecklistItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'assignee_id',
        'title',
        'due_date',
        'status',
        'assigned_to',
    ];

    protected $casts = [
        'due_date' => 'date',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assignee_id');
    }
}
