@extends('layouts.web')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div>
                    <h1 class="primary">Esto es la página de usuario logeado</h1>
                </div>
                <div class="card-header">{{ __('Bienvenido/a la página de logeado') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<a href="{{route('events.create')}}" class="d-flex justify-content-center mt-4"><button class="btn btn-primary">Crear Evento</button></a>
<div>
        <x-slider/>
        <livewire:event-list /> 
    </div>

@endsection
<body>

    @livewireStyles
</body>
</html>