<div>
    <h2 class="fs-1 fw-bold">Order Summary</h2>
    @foreach($data as $item)
        <p>{{$item->name}}</p>
    @endforeach
</div>
