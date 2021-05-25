<?php

namespace App\Http\Resources;

use App\Models\TimeSheet;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class TimeSheetResource
 * @package App\Http\Resources
 * @mixin TimeSheet
 */

class TimeSheetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'start_work' => $this->start_work,
            'end_work' => $this->end_work,
        ];
    }
}
