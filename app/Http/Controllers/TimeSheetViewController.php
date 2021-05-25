<?php

namespace App\Http\Controllers;

use App\Models\Worker;

class TimeSheetViewController extends Controller
{
    public function timeSheetView(WorkersFilter $filters)
    {

        $workers = Worker::with('timesheets')->filter($filters)->get();

        return view('timesheet', ['workers' => $workers]);
    }
}
