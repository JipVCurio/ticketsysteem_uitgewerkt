@extends('layouts.app')
@section('content')
    <div>
        <h1>{{$event->name}}</h1>
        <div class="event-detail">
            <p>Ticketprijs: €{{$event->price}}</p>
            <p>Adres: {{$event->address}}</p>
            @admin
                <a href="/dashboard/events/{{$event->id}}/edit" class="btn btn-primary">Aanpassen</a>
            @endadmin
            @guest
                <h3>Log in om tickets te bestellen.</h3>
                <a href="/login" class="btn btn-primary">Log in</a>
            @endguest
        </div>
    </div>
@endsection