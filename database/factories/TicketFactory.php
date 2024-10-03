<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Order;
use App\Models\QrCode;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => rand(25, 200),
            'event_id' => Event::make()->id,
            'order_id' => Order::make()->id,
            'qr_code_id' => QrCode::make()->id,
        ];
    }
}
