<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Part extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'car_id',
        'plate',
        'supplier',
        'insurance',
        'date'
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
