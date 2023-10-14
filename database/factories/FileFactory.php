<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()//: array
    {
        $hashname = str()->uuid(fake()->firstName())->toString();
        imagepng(
            imagecreatetruecolor(100,100),
            storage_path("app/public/icons/{$hashname}.png")
        );
        
        return [
            'original_name' => fake()->firstName(),
            'hash_name' => $hashname,
            'extension' => 'png',
            'path' => "icons/{$hashname}.png",
        ];
    }
}
