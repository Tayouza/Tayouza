<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $order = Project::orderByDesc('order')->first()?->order;

        return [
            'name' => fake()->firstName(),
            'url' => 'https://test.test/',
            'file_id' => File::factory()->create()->id,
            'order' => $order ? $order + 1 : 1,
        ];
    }
}
