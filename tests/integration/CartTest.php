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

    /** @test */
    public function a_product_can_be_added_to_the_cart()
    {
        // Given there is an empty Cart
        // And there is a 'Hot dog' product

        // When I add the 'Hot dog' product to the cart

        // Then the cart contains one item
        // And the item is the 'Hot dog'
    }
}
