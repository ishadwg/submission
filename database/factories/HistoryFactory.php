<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\History>
 */
class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // https://laravel.com/docs/10.x/eloquent-factories#defining-relationships-within-factories
        return [
            'submission_id' => Submission::factory(),
            'user_id' => function (array $attributes) {
                return Submission::find($attributes['submission_id'])->user_id;
            },
            'status_id' => function (array $attributes) {
                return Submission::find($attributes['submission_id'])->status_id;
            },
            'comments' => fake()->word(),
        ];
    }
}
