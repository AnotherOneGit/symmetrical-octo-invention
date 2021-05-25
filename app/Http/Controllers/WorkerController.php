<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddTimeRequest;
use App\Http\Requests\WorkerStoreRequest;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return WorkerResource::collection(Worker::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param WorkerStoreRequest $request
     * @return WorkerResource
     */
    public function store(WorkerStoreRequest $request): WorkerResource
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
    public function show(Worker $worker): WorkerResource
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
    public function update(WorkerStoreRequest $request, Worker $worker): WorkerResource
    {
        $worker->update(
            $request->validated()
        );

        return new WorkerResource($worker);
    }

    public function addTime(AddTimeRequest $request, Worker $worker): WorkerResource
    {
        $worker->timesheets()->create(
            $request->validated(),
        );
        return new WorkerResource($worker);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Worker $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker): Response
    {
        $worker->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
