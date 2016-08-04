<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Collection;

class CartTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_cart_can_have_many_products()
    {
        $cart = factory(App\Cart::class)->create();
        $product = factory(App\Product::class)->create();

        $cart->products()->attach($product);

        $this->assertInstanceOf(Collection::class, $cart->products);
        $this->assertInstanceOf(App\Product::class, $cart->products->first());
    }
}
