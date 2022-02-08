@extends('layouts.web')

@section('content')

    <div class="container mt-3"> 
        <h2 class="d-flex justify-content-center mt-5">Página principal para crear Eventos</h2>
        
        <form action="{{route('events.store')}}" method="POST">
            
            @csrf
            
            <div class="col-4">
                <label class="form-label mt-3 text-dark" for="user_name">Nombre del Evento</label>
                <input type="text" class="form-control" name="name" id="user_name" required>
                <label class="form-label text-dark mt-3" for="date">Fecha/hora</label>
                <input type="text" class="form-control" name="category" id="user_name" required>
            </div><br>
            <div class="col-4">
                <label for="inputDescription" class="form-label text-dark">Descripción</label>
                <textarea class="form-control text-dark" type="text" name="description" id="description" required></textarea><br>
                <div class="d-grid gap-2 d-md-block">
                    <button type="submit" class="btn btn-primary" value="Add">Crear</button>
                    <a href="{{route('home')}}"><button class="btn btn-secondary">Volver</button></a>   
                </div>
            </div>  
        </form>      
    <div>
@endsection

