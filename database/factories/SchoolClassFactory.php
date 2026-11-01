<?php

namespace Database\Factories;

use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SchoolClass>
 */
class SchoolClassFactory extends Factory
{
    protected $model = SchoolClass::class;

    public function definition(): array
    {
        $schoolClasses = ['10 AKL', '11 AKL', '12 AKL', '10 TKJ', '11 TKJ', '12 TKJ', '10 BiD', '11 BiD', '12 BiD'];

        return [
            'name' => fake()->randomElement($schoolClasses),
        ];
    }
}
