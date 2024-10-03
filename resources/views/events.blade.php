@extends('layouts.app')
@section('content')
    <div>
        <h1>Evenementen</h1>
        <table>
            @foreach ($events as $event)
                <tr>
                    <td>{{$event->name}}</td>
                    <td>Beschikbare tickets: {{$event->max_visitors}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection