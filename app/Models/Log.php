<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'part_id',
        'old',
        'new'
    ];

    public function part(): BelongsTo
    {
        return $this->belongsTo(Part::class);
    }

    public function newStatus(): BelongsTo
    {
    return $this->belongsTo(Status::class, 'new');
    }

    public function oldStatus(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'old');
    }
}
