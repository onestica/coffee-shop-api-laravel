<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    Cart,
    CartItem,
    ShippingInformation
};

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::factory(5)->create()->each(function($cart) {
            CartItem::factory(rand(1,4))->create([
                'cart_id'  => $cart->id
            ]);
            ShippingInformation::factory()->create([
                'shippingable_id'  => $cart->id
            ]);
        });
    }
}
