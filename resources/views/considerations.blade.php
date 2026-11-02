@extends('layouts.default')
@section('title', 'Consideraciones - NCh43.cl')
@section('content')

<main class="flex-auto">
    <div class="px-8 mt-9">
        <div class="">
            <h1 class="text-4xl font-bold ">Algunas consideraciones</h1>
            <p class="mt-6 text-xl">Dado que en algunos puntos la norma no es tan específica ni proporciona ejemplos para orientarse, se tomaron decisiones de diseño para casos especiales.</p>
            <p class="mt-4 text-base font-bold">Caso 1: Sobrepasar la columna 20</p>
            <p class="mt-2 text-base">Cuando un número requiere más dígitos de los disponibles hasta la columna 20, los dígitos faltantes se toman desde la columna 1 del renglón siguiente, aplicando la misma continuidad que el Art. 6.1 establece para la lectura horizontal. La lectura sigue siendo de arriba hacia abajo (Art. 6.2).</p>
            <img src="caso1.png" alt="imágen de la norma ejemplificando caso 1">
            <p class="mt-6 text-base font-bold">Caso 2: Sobrepasar la columna 20 y la última fila de una página</p>
            <p class="mt-2 text-base">Si además se ha llegado al último renglón de la página, los dígitos faltantes se toman de la columna 1 del primer renglón de la página siguiente (Art. 6.3); después de la fila 250 se continúa en la fila 1. Como ese dígito ya fue utilizado, la lectura de los números siguientes continúa en las columnas 2 y 3 de esa página, de modo que ningún dígito de la tabla se utilice dos veces.</p>
            <img src="caso2.png" alt="imágen de la norma ejemplificando caso 2">
        </div>
    </div>
</main>

<hr style="border: black 1px solid; margin-top:2rem">

@include('form')


@endsection