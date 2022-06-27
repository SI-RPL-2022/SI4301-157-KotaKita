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
                ->type('email', 'user@gmail.com')
                ->type('password', 'user')
                ->pause(2000)
                ->press('Masuk')
                ->assertSee('Dashboard')
                ->clickLink('Pengaduan')
                ->pause(1000)
                ->assertSee('ADUAN MASYARAKAT')
                ->select('kota_id', '1')
                ->select('proyek_id', '2')
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
