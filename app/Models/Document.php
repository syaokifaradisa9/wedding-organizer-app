<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'file_path',
        'file_type',
    ];

    public function documentable()
    {
        return $this->morphTo();
    }
}
