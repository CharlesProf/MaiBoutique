@extends('layout.navbar')

@section('title', 'Search')

@section('content')
    <div action= "/">
        <input type="text" name="search" placeholder="Search items">
        <button type="submit">Submit</button>
    </div>
    
    <div style="margin: 50px 100px">
        <div style="margin-top: 50px">
            <div class="row" style="justify-content:space-evenly">

                @foreach ($products as $product)
                    <div class="card" style="width: 18rem; margin-top: 25px">
                        <div class="card-body d-flex flex-column">
                            <img src="{{ asset('assets/'. $product->image) }}" alt="{{$product->image}}">
                            <h3 class="card-title">{{$product->name}}</h3>
                            <p>Rp {{$product->price}}</p>

                            <a href="/home/{{$product->id}}" style="margin-top: 10px" class=" mt-auto detail-btn btn-secondary ">More Detail</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
