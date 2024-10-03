@extends('layouts.app')
@section('content')
    <div>
        <h1>{{$event->name}}</h1>
        <div class="event-detail">
            <p>Ticketprijs: €{{$event->price}}</p>
            <p>Adres: {{$event->address}}</p>
            @guest
                <h3>Log in om tickets te bestellen.</h3>
                <a href="/login" class="btn btn-primary">Log in</a>
            @else
                <a href="/events/show/{{$event->id}}" class="btn btn-primary">Bestel tickets voor €{{$event->price}} p.s.</a>
            @endguest
        </div>
    </div>
@endsection