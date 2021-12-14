<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactFormTest extends DuskTestCase
{
    /**
     * @test
     */
  
    public function testExistsPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato');
                
        });
    }

    /**
     * @test
     */

     public function testIfExistsInputs(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                    ->assertSee('Nome completo')
                    ->assertSee('Email')
                    ->assertSee('Mensagem');
        });
     }

       /**
     * @test
     */

    public function testifContactFormIsWorking(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                    ->type('name','Matheus')
                    ->type('email','matheus@gmail.com')
                    ->type('message','ksdfkdsf')
                    ->press('Enviar mensagem')
                    ->assertPathIs('/contato');
              
        });
     }
}
