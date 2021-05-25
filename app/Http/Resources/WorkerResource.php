<?php

namespace App\Http\Resources;

use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class WorkerResource
 * @package App\Http\Resources
 * @mixin Worker
 */

class WorkerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'timesheets' => TimeSheetResource::collection($this->timesheets)
        ];
    }
}
