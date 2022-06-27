<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('LOGIN')
                    ->type('email', 'user@gmail.com')
                    ->type('password', 'user')
                    ->pause(2000)
                    ->press('Masuk')
                    ->assertSee('Dashboard');
        });
    }
}
