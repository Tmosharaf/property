<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>  $this->faker->sentence(8),
            'featured_image'    =>  'property.jpg',
            'price'     =>  rand(111, 9999),
            'overview' =>   $this->faker->sentence(12),
            'short_description' =>$this->faker->sentence(15),
            'long_description' =>$this->faker->sentence(35),
            'type'      =>  rand(0, 2),
            'service_type'  =>  rand(0, 1),
            'bathroom'      =>  rand(2, 6),
            'bedroom'       =>  rand(2, 8),
            'net_area'      =>  rand(40, 220),
            'pool'          =>  rand(0, 1),
            'location_id'   =>  Location::all()->random()->id,
        ];
    }
}
