<?php

namespace App\Http\Controllers;

use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Http\Controllers\WorkersFilter;

class TimeSheetViewController extends Controller
{
    public function timeSheetView(Request $request)
    {
        $workers = Worker::with('timesheets');

        $workers = (new WorkersFilter($workers, $request))->apply()->get();

        return view('timesheet', ['workers' => $workers]);
    }
}
