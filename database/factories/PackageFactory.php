<?php

namespace Database\Factories;

use App\Models\CustShipment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $shipments = CustShipment::all();
        return [
            'custshipment_id' => fake()->randomElement($shipments),
            'tracking_number' => fake()->numerify('##########'),
            'exp_description' => fake()->lexify(),
            
        ];
    }
}
