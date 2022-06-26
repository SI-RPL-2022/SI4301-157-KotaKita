<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class feedbackTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('LOGIN')
                ->type('email', 'user@gmail.com')
                ->type('password', 'user')
                ->pause(2000)
                ->press('Masuk')
                ->assertSee('Dashboard')
                ->clickLink('Proyek')
                ->pause(1000)
                ->assertSee('PILIH LAYANAN')
                ->clickLink('Fasilitas')
                ->assertSee('FASILITAS')
                ->clickLink('Cek')
                ->assertSee('Nama Fasilitas')
                ->clickLink('Input Feedback')
                ->assertSee('FEEDBACK')
                ->select('kota_id', '2')
                ->select('proyek_id', '1')
                ->click('.rating4', '4')
                ->pause(2000)
                ->type('feedback', 'bagus banget')
                ->pause(2000)
                ->press('Submit')
                ->pause(1000)
                ->screenshot('Feedback');
        });
    }
}
