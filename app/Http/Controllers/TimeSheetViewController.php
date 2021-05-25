<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class TimeSheetViewController extends Controller
{
    public function timeSheetView(Request $request, WorkersFilter $filters)
    {
        $workers = Worker::with('timesheets');

        $workers = Worker::with('timesheets')->filter($filters)->get();

        return view('timesheet', ['workers' => $workers]);
    }
}
