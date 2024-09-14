<?php
namespace Modules\Mobiles\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Mobiles\Models\Mobile;

class MobileFactory extends Factory
{
    protected $model = Mobile::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name()
        ];
    }
}

