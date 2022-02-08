@extends('layouts.web')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div>
                    <h1 class="primary">Esto es la página de usuario logeado</h1>
                </div>
                <div class="card-header"><h1 class="text-dark">Omar I te da la bienvenida {{ Auth::user()->name }}</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                
            </div>
        </div>
    </div>
</div>
@endsection

<body>
    @section('content') 
        <div>
            <x-slider/>
            <livewire:event-list /> 
            
        </div>
    @endsection

    @livewireStyles
</body>
</html>