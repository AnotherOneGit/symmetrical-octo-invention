<?php

namespace App\Http\Controllers;

use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\Request;

class TimeSheetViewController extends Controller
{
    public function timeSheetView(Request $request)
    {
//        $workers = WorkerResource::collection(Worker::all());
        $workers = Worker::with('timesheets');

        if ($request->has('name')) {
            $workers->where('name', 'like', "%$request->name%");
        }

        if ($request->has('date')) {
            $workers->whereHas('timesheets', function ($query) use ($request) {
                $query->where('start_work', 'like', "%$request->date%");
            });
        }

        $workers = $workers->get();

        return view('timesheet', ['workers' => $workers]);
    }
}
