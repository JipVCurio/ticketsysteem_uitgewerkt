<div class="card">
    <div class="card-body">
    <h5 class="card-title">{{$name}}</h5>
        <p class="card-text">{{$tickets_remaining}} tickets over!</p>
        <p class="card-text">Ticketprijs €{{$price}}</p>
        <p class="card-text">{{$address}}</p>
        @guest
            <a href="/events/show/{{$id}}" class="btn btn-primary">Meer informatie</a>
        @else
            <a href="/dashboard/events/{{$id}}" class="btn btn-primary">Meer informatie</a>
        @endguest
    </div>
</div>