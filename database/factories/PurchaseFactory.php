<?php

namespace Database\Factories;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    protected  $model = \App\Models\Purchase::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique(),
            'category' => $this->faker->name(),
            'image' => $this->faker->picture,
            'price' => $this->faker->amount,
            'description' => $this->faker->paragraph,
            'created_at' => now(),

        ];
    }
}
