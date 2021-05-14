<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    @php
        $color="gray";
        $alert="alert2"
    @endphp
    <body class="antialiased">
       <div class="container mx-auto">
        <!-- Aqui llamamos al componente los : en la etiqueta del componente nos sirve para imprimir una variable-->
        <x-alert :color="$color" class="mb-4">
            <!--Este es un slot con nombre y el valor se guarda en el nombre del name-->
            <x-slot name="title">
                Titulo 1
            </x-slot>
            <!-- Abrimos el componente y lo cerramos y si queremos mostrar un mensaje se guardara en el componente
            como slot-->
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, accusantium!
        </x-alert>

            <x-alert color="red" class="mb-20">
                <x-slot name="title">
                    Titulo 1
                </x-slot>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, accusantium!
            </x-alert>

            <x-alert  class="m-4">
                <x-slot name="title">
                    Titulo 2
                </x-slot>
                Hola mundo
            </x-alert>
<!--Este es un componente anonimo porque no se crea una clase-->
            <x-alert2  background="blue" class="p-5">
                Lorem, ipsum.
                <x-slot name="title">
                    Titulo de prueba
                </x-slot>
            </x-alert2>

            <x-dynamic-component :component="$alert" background="blue">
                <x-slot name="title">
                    Titulo de prueba
                </x-slot>
                Lorem ipsum dolor sit amet consectetur.
            </x-dynamic-component>
       </div>
    </body>
</html>
