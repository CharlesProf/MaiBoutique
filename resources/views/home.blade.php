@extends('layout.navbar')

@section('title', 'Home')

@section('content')
    <div style="margin: 50px 100px">
        <div style="margin-top: 50px">
            <div class="row" style="justify-content:space-evenly">

                @foreach ($products as $product)
                    <div class="card" style="width: 18rem; margin-top: 25px">
                        <div class="card-body d-flex flex-column">
                            <img src="{{ asset('assets/'. $product->image) }}" alt="{{$product->image}}">
                            <h3 class="card-title">{{$product->name}}</h3>
                            <p>Rp {{$product->price}}</p>

                            @if ($detail == 1 )
                                {{-- Show product detail --}}
                                <h5><strong>Product Detail</strong></h5>
                                <p>{{$product->description}}</p>
                                <p><strong>Quantity:</strong></p>

                                {{-- Kolom input qty disini --}}

                                {{-- Tombol add to cart disini--}}

                                <a href="/home" style="margin-top: 10px" class=" mt-auto btn btn-danger ">Back</a>
                            @else
                                {{-- Show all products --}}
                                <a href="/home/{{$product->id}}" style="margin-top: 10px" class=" mt-auto btn btn-primary ">More Detail</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Do pagination if showing all products--}}
            @if (! $detail == 1)
                {{$products->links()}}
            @endif

        </div>
    </div>
@endsection
