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
        // And the user has an empty cart
        // And there a 'Hot dog' product in the database

        // When the user visits the 'Hot dog' product page
        // And they click the 'Add to cart' button

        // Then they are redirected to their cart
        // And they can see one item in their cart
        // And that item is the 'Hot dog'
    }
}
