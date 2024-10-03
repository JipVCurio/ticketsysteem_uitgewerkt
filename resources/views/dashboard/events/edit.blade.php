@extends('layouts.app')
@section('content')
    <div>
        <h1>{{$event->name}}</h1>
        <div class="event-detail">
            <p>Ticketprijs: €{{$event->price}}</p>
            <p>Adres: {{$event->address}}</p>
            <a href="/events/edit/{{$event->id}}" class="btn btn-primary">Aanpassen</a>
            <a href="/events/delete/{{$event->id}}" class="btn btn-danger">Verwijderen</a>
        </div>
    </div>
@endsection