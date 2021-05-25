<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone'
    ];

    public $timestamps = false;

    public function timesheets()
    {
        return $this->hasMany(TimeSheet::class);
    }

    public function scopeFilter($builder, $filters)
    {
        return $filters->apply($builder);
    }
}
