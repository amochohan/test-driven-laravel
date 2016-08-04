<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CartTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_add_a_product_to_their_cart()
    {
        // Given there is a user
        $user = factory(App\User::class)->create();

        // And the user has an empty cart
        $cart = factory(App\Cart::class)->create(['user_id' => $user->id]);

        // And there a 'Hot dog' product in the database
        $hotDog = factory(App\Product::class)->create(['name' => 'Hot dog']);

        // When the user visits the 'Hot dog' product page
        $this->actingAs($user)
            ->visit('/product/' . $hotDog->id);

        // And they click the 'Add to cart' button
        $this->press('Add to cart');

        // Then they are redirected to their cart
        $this->seePageIs('/cart');

        // And they can see one item in their cart
        $this->see('Total items: 1');

        // And that item is the 'Hot dog'
        $this->see($hotDog->name);
    }
}
