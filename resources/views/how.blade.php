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
                    </div>
</main>

@include('form')

@endsection