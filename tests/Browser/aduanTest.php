<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class aduanTest extends DuskTestCase
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
                ->type('email', 'amel@gmail.com')
                ->type('password', 'password123')
                ->pause(2000)
                ->press('Masuk')
                ->assertSee('Dashboard')
                ->clickLink('Pengaduan')
                ->pause(1000)
                ->assertSee('ADUAN MASYARAKAT')
                ->select('kota_id', '2')
                ->select('proyek_id', '1')
                ->type('aduan', 'Kurang bagus hasilnya')
                ->attach('foto[]', base_path("public/jalananrusak.jpg"))
                ->press('Add')
                ->pause(2000)
                ->press('Kirim')
                ->pause(1000)
                ->assertSee('Aduan')
                ->screenshot('Feedback');
        });
    }
}
