@extends('layouts.app')
@section('content')
    <form action="/dashboard/events/{{$event->id}}" method="post" class="event-form">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Evenement naam</label>
            <input name="name" value="{{$event->name}}"/>
        </div>
        <div class="form-group">
            <label for="price">Evenement prijs</label>
            <input name="price" value="{{$event->price}}"/>
        </div>
        <div class="form-group">
            <label for="address">Evenement adres</label>
            <input name="address" value="{{$event->address}}"/>
        </div>
        <div class="form-group">
            <label for="postal_code">Evenement adres</label>
            <input name="postal_code" value="{{$event->postal_code}}"/>
        </div>
        <div class="form-group">
            <label for="max_visitors">Maximaal aantal bezoekers</label>
            <input name="max_visitors" value="{{$event->max_visitors}}"/>
        </div>
        <input type="submit" value="update" class="btn btn-primary"/>
    </form>
@endsection