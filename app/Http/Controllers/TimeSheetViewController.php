<?php

namespace App\Http\Controllers;

use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\Request;

class TimeSheetViewController extends Controller
{
    public function timeSheetView()
    {
        $workers = WorkerResource::collection(Worker::all());
        return view('timesheet', ['workers' => $workers]);
    }
}
