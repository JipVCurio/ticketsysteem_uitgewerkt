@extends('layouts.app')
@section('content')
    <form action="/dashboard/events/{{$event->id}}" method="put" class="event-form">
        @csrf
        <div class="form-group">
            <label for="name">Evenement naam</label>
            <input name="name" value="{{$event->name}}"/>
        </div>
        <div class="form-group">
            <label for="name">Evenement prijs</label>
            <input name="price" value="{{$event->price}}"/>
        </div>
        <div class="form-group">
            <label for="address">Evenement adres</label>
            <input name="address" value="{{$event->address}}"/>
        </div>
        <input type="submit" value="update" class="btn btn-primary"/>
    </form>
@endsection