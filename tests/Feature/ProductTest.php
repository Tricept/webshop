<?php

namespace Tests\Feature;

use App\Product;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /** @test **/
    public function it_can_create_a_product()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);

        $response = $this->post('/products', [
            'name' => 'Telefon',
            'price' => '8000',
            'slug' => 'telefon',
            'description' => 'das ist ein Telefon',
        ]);
        $response->assertStatus(201);
        $this->assertCount(1, Product::all());

        $response = $this->post('/products', [
            'name' => 'Telefon',
            'price' => '8000',
            'slug' => 'telefon',
            'description' => 'das ist ein Telefon',
        ]);
        $response->assertSessionHasErrors('slug');
        $this->assertCount(1, Product::all());


        $this->flushSession();
        $response = $this->post('/products', []);
        $response->assertSessionHasErrors('slug');
        $response->assertSessionHasErrors('name');
        $response->assertSessionHasErrors('description');
        $response->assertSessionHasErrors('price');

    }

    /** @test **/
    public function it_can_edit_a_product()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);
        $this->post('/products', [
            'name' => 'Telefon',
            'price' => '8000',
            'slug' => 'telefon',
            'description' => 'das ist ein Telefon',
        ]);

        $product = Product::first();
        $response = $this->put('/products/'.$product->id, [
            'price' => '7000',
        ]);
        $response->assertOk();
        $product = Product::first();
        $this->assertEquals('7000', $product->price);
    }
}
