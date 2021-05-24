<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSheet extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }
}
