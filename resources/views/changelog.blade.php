@extends('layouts.default')
@section('title', 'Control de cambios - NCh43.cl')
@section('content')

<main class="flex-auto">
    <div class="px-8 mt-9">
        <div class="">
        <h1 class="text-3xl font-bold py-4">Control de cambios</h1>
        <h1 class="text-xl font-bold ">30-08-2024</h1>
            <p class="text-base">Se corrige el error en el caso de un dígito.</p>
            <h1 class="text-xl font-bold ">29-08-2024</h1>
            <p class="text-base">Se agrega visualización de coordenadas aleatorias en el input-text.</p>
            <h1 class="text-xl font-bold ">19-08-2024</h1>
            <p class="text-base">Se corrigen errores en las coordenadas 16/14, 122/11, 150/19, 173/10 y 186/7.</p>
            <h1 class="text-xl font-bold ">16-08-2024</h1>
            <p class="text-base">Se agrega vista de consideraciones.</p>
            <h1 class="text-xl font-bold ">16-08-2024</h1>
            <p class="text-base">Se agrega vista de consideraciones y exportar a Excel.</p>
            <h1 class="text-xl font-bold ">09-08-2024</h1>
            <p class="text-base">Se agrega la opción de coordenadas aleatorias.</p>
            <h1 class="text-xl font-bold ">07-08-2024</h1>
            <p class="text-base">Se corrige la forma de obtener los resultados (V2).</p>
            <h1 class="text-xl font-bold ">12-10-2024</h1>
            <p class="text-base">Se crea NCh43.cl (V1).</p>
        </div>
    </div>
</main>

<hr style="border: black 1px solid; margin-top:2rem">

@include('form')

@endsection