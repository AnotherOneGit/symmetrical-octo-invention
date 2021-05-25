<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TimeSheet extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'start_work',
        'end_work',
    ];

    public function worker(): BelongsTo
    {
        return $this->belongsTo(Worker::class);
    }
}
