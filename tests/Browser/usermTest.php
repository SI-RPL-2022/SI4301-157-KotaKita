<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class usermTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Welcome to KotaKita')
                ->clickLink('Login')
                ->assertSee('LOGIN')
                ->type('email', 'superadmin@gmail.com')
                ->type('password', 'superadmin')
                ->pause(2000)
                ->press('Masuk')
                ->assertPathIs('/dashboard')
                ->pause(2000)   
                ->clickLink('Manajemen User')
                ->assertSee('MANAJEMEN USER')
                ->pause(3000)
                ->select('role', 'user')
                ->pause(1000)
                ->refresh()
                ->pause(2000)
                ->press('Delete')
                // ->screenshot('hasil')
            ;
        });
    }
}