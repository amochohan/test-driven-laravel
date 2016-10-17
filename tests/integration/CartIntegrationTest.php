<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Collection;

class CartIntegrationTest extends TestCase
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
        $cart = factory(\App\Cart::class)->create();

        // And there is a 'Hot dog' product
        $hotDog = factory(\App\Product::class)->create();

        // When I add the 'Hot dog' product to the cart
        $cart->add($hotDog);

        // Then the cart contains one item
        $this->assertEquals(1, $cart->products()->count());

        // And the item is the 'Hot dog'
        $this->assertEquals($hotDog->name, $cart->products()->first()->name);
    }
}
