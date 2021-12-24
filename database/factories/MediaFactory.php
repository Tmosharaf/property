<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url'   =>  'slider-1.jpg',
            'name'  =>  'slider 1',
            'property_id'   =>  Property::all()->random()->id,
        ];
    }
}
