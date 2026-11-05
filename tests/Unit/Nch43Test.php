<?php

namespace Tests\Unit;

use App\Http\Controllers\V2Controller;
use Illuminate\Validation\ValidationException;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class Nch43Test extends TestCase
{
    private function leer($lote, $muestras, $fila, $columna)
    {
        return json_decode(V2Controller::nch43($lote, $muestras, $fila, $columna), true);
    }

    private function validos($lote, $muestras, $fila, $columna)
    {
        $datos = array_filter($this->leer($lote, $muestras, $fila, $columna), fn ($n) => $n['valido']);
        return array_values(array_map(fn ($n) => (int) $n['valor_final'], $datos));
    }

    private function originales($lote, $muestras, $fila, $columna)
    {
        return array_column($this->leer($lote, $muestras, $fila, $columna), 'valor_original');
    }

    private function coordenadaFinal($datos)
    {
        $ultimo = end($datos);
        $filas = explode(' | ', $ultimo['fila']);
        $columnas = explode(' | ', trim($ultimo['columna']));
        return end($filas).'/'.end($columnas);
    }

    // Anexo, ejemplo N°1: punto de partida 148/19
    public function test_ejemplo_1_un_digito()
    {
        $this->assertSame(['5', '0', '2', '8', '3', '3'], array_slice($this->originales(10, 6, 148, 19), 0, 6));
    }

    public function test_ejemplo_1_dos_digitos()
    {
        $this->assertSame(['50', '28', '33', '78'], $this->originales(100, 4, 148, 19));
    }

    public function test_ejemplo_1_tres_digitos()
    {
        $datos = $this->leer(1000, 5, 148, 19);
        $this->assertSame(['502', '533', '698', '150', '096'], array_column($datos, 'valor_original'));
        // La norma anota "152/2"; la continuación del ejemplo N°2 confirma que es 152/20
        $this->assertSame('152/20', $this->coordenadaFinal($datos));
    }

    // Anexo, ejemplo N°2: continuación desde 152/20
    public function test_ejemplo_2_continuacion()
    {
        $this->assertSame(['3', '4', '2', '1'], $this->originales(10, 4, 153, 1));
        $this->assertSame(['700', '554', '511'], $this->originales(1000, 3, 153, 19));
    }

    // Anexo, ejemplo N°3 b)
    public function test_ejemplo_3b()
    {
        $datos = $this->leer(80, 4, 1, 11);
        $this->assertSame([46, 63, 71, 62], $this->validos(80, 4, 1, 11));
        $this->assertSame('1/15', $this->coordenadaFinal($datos));
    }

    // Anexo, ejemplo N°3 c). La norma indica 772 en la fila 7, pero la tabla dice 67 21 (672 -> 72)
    public function test_ejemplo_3c()
    {
        $datos = $this->leer(180, 10, 2, 15);
        $this->assertSame([122, 131, 155, 100, 72, 151, 29, 20, 42, 83], $this->validos(180, 10, 2, 15));
        $this->assertSame('13/16', $this->coordenadaFinal($datos));
    }

    // Anexo, ejemplo N°4: serie sin repetición del ejemplo 3 a)
    public function test_ejemplo_4()
    {
        $this->assertSame([9, 5, 6, 3, 7, 13, 1], $this->validos(15, 7, 250, 17));
    }

    // Consideraciones, caso 1: se completa con la columna 1 de la fila siguiente
    public function test_consideracion_caso_1()
    {
        $datos = $this->leer(700, 3, 72, 20);
        $this->assertSame(['519', '073', '587'], array_column($datos, 'valor_original'));
        $this->assertSame('72 | 73', $datos[0]['fila']);
    }

    // Consideraciones, caso 2: fin de página, se sigue en la página siguiente desde la columna 2
    public function test_consideracion_caso_2()
    {
        $datos = $this->leer(700, 3, 175, 20);
        $this->assertSame(['486', '080', '239'], array_column($datos, 'valor_original'));
        $this->assertSame('2 | 3', trim($datos[1]['columna']));
    }

    public function test_despues_de_la_fila_250_sigue_la_fila_1()
    {
        $datos = $this->leer(700, 2, 250, 20);
        $this->assertSame('250 | 1', $datos[0]['fila']);
        $this->assertSame(1, $datos[1]['fila']);
    }

    public function test_series_validas_sin_repetir_y_dentro_del_lote()
    {
        mt_srand(43);
        foreach ([1, 10, 15, 37, 80, 100, 180, 500, 700, 1000, 4321, 10000, 50000, 1000000] as $lote) {
            for ($i = 0; $i < 20; $i++) {
                $muestras = mt_rand(1, min($lote, 25));
                $validos = $this->validos($lote, $muestras, mt_rand(1, 250), mt_rand(1, 20));
                $this->assertCount($muestras, $validos);
                $this->assertSame($validos, array_values(array_unique($validos)));
                foreach ($validos as $valor) {
                    $this->assertTrue($valor >= 1 && $valor <= $lote);
                }
            }
        }
    }

    #[DataProvider('entradasInvalidas')]
    public function test_rechaza_entradas_invalidas($lote, $muestras, $fila, $columna)
    {
        $this->expectException(ValidationException::class);
        V2Controller::nch43($lote, $muestras, $fila, $columna);
    }

    public static function entradasInvalidas()
    {
        return [
            'muestras mayor que el lote' => [15, 16, 1, 1],
            'lote cero' => [0, 1, 1, 1],
            'lote sobre el máximo de la norma' => [2000000000, 1, 1, 1],
            'fila 251' => [100, 3, 251, 1],
            'columna 21' => [100, 3, 1, 21],
            'fila no numérica' => [15, 2, 'abc', 1],
            'muestras cero' => [15, 0, 1, 1],
        ];
    }

    public function test_corta_si_la_tabla_no_alcanza()
    {
        $this->expectException(ValidationException::class);
        V2Controller::nch43(100000, 20000, 1, 1);
    }
}
