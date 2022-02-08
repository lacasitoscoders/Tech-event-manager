@extends('layouts.web')
<body>
    <h1> eventos pasados </h1>
    @section('content') 
    <div>
        <x-slider/>
        <livewire:event-list /> 
        
    </div>
@endsection

@livewireStyles
</body>
</html>