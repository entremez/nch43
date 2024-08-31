@extends('layouts.default')
@section('title', 'Consideraciones - NCh43.cl')
@section('content')

<main class="flex-auto">
    <div class="px-8 mt-9">
        <div class="">
            <h1 class="text-4xl font-bold ">Algunas consideraciones</h1>
            <p class="mt-6 text-xl">Dado que en algunos puntos la norma no es tan específica ni proporciona ejemplos para orientarse, se tomaron decisiones de diseño para casos especiales.</p>
            <p class="mt-4 text-base font-bold">Caso 1: Sobrepasar la columna 20</p>
            <p class="mt-2 text-base">Cuando los dígitos a utilizar sean mayores que los dígitos disponibles hasta la columna 20, se utilizan los dígitos faltantes comenzando desde la columna 1 de la fila siguiente.</p>
            <img src="caso1.png" alt="imágen de la norma ejemplificando caso 1">
            <p class="mt-6 text-base font-bold">Caso 2: Sobrepasar la columna 20 y la última fila de una página</p>
            <p class="mt-2 text-base">Si los dígitos a utilizar superan los disponibles hasta la columna 20 y además se llega al final de las filas de la página, se emplean los dígitos faltantes desde la columna 1 de la fila siguiente. Además, se descartarán esas columnas para los números posteriores.</p>
            <img src="caso2.png" alt="imágen de la norma ejemplificando caso 2">
        </div>
    </div>
</main>

<hr style="border: black 1px solid; margin-top:2rem">

@include('form')


@endsection