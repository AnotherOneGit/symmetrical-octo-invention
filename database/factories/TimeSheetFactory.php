<?php

namespace Database\Factories;

use App\Models\TimeSheet;
use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimeSheetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TimeSheet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'worker_id' => Worker::factory(),
            'start_work' => now(),
            'end_work' => now()->addHours(8)
        ];
    }
}
