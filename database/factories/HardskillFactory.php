<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\Hardskill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hardskill>
 */
class HardskillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $order = Hardskill::orderByDesc('order')->first()?->order;

        return [
            'name' => fake()->firstName(),
            'file_id' => File::factory()->create()->id,
            'level' => fake()->randomNumber(1, true),
            'order' => $order ? $order + 1 : 1,
        ];
    }
}
