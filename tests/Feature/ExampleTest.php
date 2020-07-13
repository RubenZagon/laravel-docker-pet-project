<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    function it_loads_the_users_list_page()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }

    function test_it_loads_the_users_list_page() // Another way to launch test with prefix test_
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }

    /** @test */
    function it_load_the_user_by_id_3()
    {
        $this->get('/usuarios/3/edit')
            ->assertStatus(200)
            ->assertSee('3');
    }

    /** @test */
    function only_accept_integers_on_the_ID()
    {
        $this->get('/usuarios/text/edit')
            ->assertStatus(500);
    }
}
