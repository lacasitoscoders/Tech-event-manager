<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Event;

class AvailableEvent extends Component
{
    
    use WithPagination;

    public function render()
    {
        $events = Event::orderBy('available')->paginate(5);
        return view('livewire.available-event', compact('events'));
    }
}

