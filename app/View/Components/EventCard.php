<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EventCard extends Component
{
    private $id;

    private $name;

    private $address;

    private $maxVisitors;

    private $ticketsRemaining;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $name, $maxVisitors, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->maxVisitors = $maxVisitors;
        $this->ticketsRemaining = $maxVisitors - 100;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.event-card', 
            [
                'id' => $this->id,
                'name' => $this->name,
                'address' => $this->address,
                'max_visitors' => $this->maxVisitors,
                'tickets_remaining' => $this->ticketsRemaining,
            ]
        );
    }
}
