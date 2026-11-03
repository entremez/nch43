@extends('layouts.default')
@section('title', '¿Cómo funciona? - NCh43.cl')
@section('content')

<main class="flex-auto">
    <div class="px-8 mt-9">
                    <div class="">
                        <h1 class="text-4xl font-bold ">NCh43 Online</h1>
                        <p class="mt-6 text-base">El funcionamiento es el siguiente: Se deben cambiar los valores entre corchetes [] de la URL de acuerdo con el muestreo a realizar.</p>
                        <p class="mt-3 text-base">La URL tiene la siguiente forma:</p>
                        <p class="mt-3 text-xl">https://nch43.cl/[lote]/[muestras]/[fila_inicial]/[columna_inicial]</p>
                        <p class="mt-6 text-base">Por lo tanto para recrear los ejemplos N°3 de la norma NCh43 las URL serían:
                        <p class="mt-6 text-base underline">a. <a href="/15/11/250/17">https://nch43.cl/15/11/250/17</a></p>
                        <p class="mt-3 text-base underline">b. <a href="/80/4/1/11">https://nch43.cl/80/4/1/11</a></p>
                        <p class="mt-3 text-base underline" >c. <a href="/180/10/2/15">https://nch43.cl/180/10/2/15</a></p>
                        <p class="mt-6 text-base">Nota: el ejemplo 3a de la norma muestra la serie original con números repetidos (9; 5; 9; 6; 3; 7; 3; 13; 6; 7; 1). El sitio siempre entrega números sin repetición (Art. 9 y 10), por lo que sus primeros 7 números coinciden con el ejemplo N°4 (9; 5; 6; 3; 7; 13; 1) y luego continúa leyendo la tabla hasta completar las 11 muestras.</p>
                        <p class="mt-3 text-base">En el ejemplo 3c la norma indica "772 (3 · 200 + 172)", pero en la tabla la fila 7, columnas 15 y 16, contiene 67 21, es decir 672 = 3 · 200 + 72. El sitio usa el valor de la tabla.</p>
                    </div>
</main>

@include('form')

@endsection