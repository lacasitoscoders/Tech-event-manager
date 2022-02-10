@extends('layouts.web')
<body>
    <h1> eventos actuales </h1>
    @section('content') 
    <div>
        {{-- <x-slider/> --}}
        <livewire:available-event /> 
        
    </div>
@endsection

@livewireStyles
</body>
</html>