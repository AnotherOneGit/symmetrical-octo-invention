<?php

namespace Database\Factories;

use App\Models\TimeSheet;
use App\Models\Worker;
use Faker\Provider\DateTime;
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
    public function definition(): array
    {
        return [
            'worker_id' => Worker::factory(),
            'start_work' => DateTime::dateTimeBetween('-3 days', '-2 days'),
            'end_work' => DateTime::dateTimeBetween('-1 days', '+1 days'),
        ];
    }
}
