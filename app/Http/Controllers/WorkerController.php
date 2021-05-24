<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkerStoreRequest;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return WorkerResource::collection(Worker::all());
//        return response()->json(Worker::with('timesheets')->get(), 200, array(), JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return WorkerResource
     */
    public function store(WorkerStoreRequest $request)
    {
        $worker = Worker::create(
            $request->validated()
        );
        return new WorkerResource($worker);
    }

    /**
     * Display the specified resource.
     *
     * @param Worker $worker
     * @return WorkerResource
     */
    public function show(Worker $worker)
    {
        return new WorkerResource($worker);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param WorkerStoreRequest $request
     * @param Worker $worker
     * @return WorkerResource
     */
    public function update(WorkerStoreRequest $request, Worker $worker)
    {
        $worker->update($request->validated());

        return new WorkerResource($worker);
    }

    public function addTime(Request $request, Worker $worker)
    {
        $worker->timesheets()->create([
            'start_work' => $request->start_work,
            'end_work' => $request->end_work,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Worker $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        $worker->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
