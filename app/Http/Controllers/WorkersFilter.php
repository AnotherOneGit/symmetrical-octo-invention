<?php


namespace App\Http\Controllers;


class WorkersFilter extends QueryFilter
{
        public function name($value)
    {
        $this->builder->where('name', 'like', "%$value%");
    }

    public function date($value)
    {
        $this->builder->whereHas('timesheets', function ($query) use ($value) {
                $query->where('start_work', 'like', "%$value%");
            });
    }
}
