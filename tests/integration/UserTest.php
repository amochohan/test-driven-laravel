<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_has_a_cart()
    {
        $user = factory(App\User::class)->create();
        $user->cart()->save(factory(App\Cart::class)->create());
        $this->assertInstanceOf(App\Cart::class, $user->cart);
    }
}
