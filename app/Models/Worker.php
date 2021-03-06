<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
    ];

    public $timestamps = false;

    public function timesheets(): HasMany
    {
        return $this->hasMany(TimeSheet::class);
    }

    public function scopeFilter($builder, $filters)
    {
        return $filters->apply($builder);
    }
}
