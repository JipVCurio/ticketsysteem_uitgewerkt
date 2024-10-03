@extends('layouts.app')
@section('content')
    <div>
        <h1>Evenementen</h1>
        <div class="event-cards-container">
            @foreach ($events as $event)
            <x-event-card 
                :id="$event->id"
                :name="$event->name"
                :price="$event->price"
                :address="$event->address" 
                :maxVisitors="$event->max_visitors" 
                />
            @endforeach
        </div>
    </div>
@endsection