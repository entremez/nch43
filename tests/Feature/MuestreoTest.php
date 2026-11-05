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

    public function test_paginas_informativas()
    {
        foreach (['/', '/how', '/consideraciones', '/control-cambios', '/up'] as $url) {
            $this->get($url)->assertOk();
        }
    }

    public function test_formulario_redirige_al_muestreo()
    {
        $this->get('/form?lot=180&samples=10&row=2&column=15')->assertRedirect('/180/10/2/15');
    }

    public function test_descarga_excel()
    {
        $respuesta = $this->get('/toexcel/180/10/2/15')->assertOk();
        $this->assertStringContainsString('spreadsheetml', $respuesta->headers->get('Content-Type'));
        $this->assertStringStartsWith('PK', $respuesta->streamedContent());
    }

    public function test_descarga_pdf()
    {
        $respuesta = $this->get('/topdf/180/10/2/15')->assertOk();
        $this->assertSame('application/pdf', $respuesta->headers->get('Content-Type'));
        $this->assertStringStartsWith('%PDF', $respuesta->getContent());
    }

    public function test_no_expone_archivos_de_storage()
    {
        $this->get('/storage/.gitignore')->assertNotFound();
    }
}
