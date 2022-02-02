@extends('layouts.web')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Techvents landing page</title>
        @livewireStyles
    </head>

    {{-- ESTO ES LA LANDING PAGE --}}

    <body>
        @section('content') 
            <div>
                <h1 class="primary">Ruta view index)</h1>
                <livewire:event-list /> 
                {{-- <x-event_list/> --}}
            </div>
        @endsection

        @livewireStyles
    </body>
</html>
