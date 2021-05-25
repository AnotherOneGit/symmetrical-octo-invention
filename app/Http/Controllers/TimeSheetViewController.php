<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class TimeSheetViewController extends Controller
{
    public function timeSheetView(Request $request)
    {
        $workers = Worker::with('timesheets');

        $workers = (new WorkersFilter($workers, $request))->apply()->get();

        return view('timesheet', ['workers' => $workers]);
    }
}
