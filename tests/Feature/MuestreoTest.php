<?php

namespace Tests\Feature;

use Tests\TestCase;

class MuestreoTest extends TestCase
{
    public function test_muestra_el_resultado()
    {
        $this->get('/180/10/2/15')->assertOk()->assertSee('Coordenada final: 13/16');
    }

    public function test_entrada_invalida_vuelve_al_inicio_con_el_error()
    {
        $this->get('/15/16/1/1')
            ->assertRedirect('/')
            ->assertSessionHasErrors('muestras');
    }
}
