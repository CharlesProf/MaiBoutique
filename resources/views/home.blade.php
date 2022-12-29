@extends('layout.navbar')

@section('title', 'Home')

@section('content')
    <div style="margin: 50px 100px">
        <div style="margin-top: 50px">
            <div class="row" style="justify-content:space-evenly">

                @foreach ($products as $product)
                    <div class="card" style="width: 18rem; margin-top: 25px">
                        <div class="card-body d-flex flex-column">
                            @if ($detail == 1 )
                                {{-- <h5 class="card-title">{{$book->image}}</h5>
                                <p class="card-title">Title: {{$book->title}}</p>
                                <p class="card-text">Author: {{$book->author}}</p>
                                <p class="card-text">Publisher: {{$publisherName}}</p>
                                <p class="card-text">Year: {{$book->year}}</p>
                                Synopsis:
                                <p class="card-text">{{$book->synopsis}}</p> --}}
                            @else
                                <h5 class="card-title">{{$product->image}}</h5>
                                <h5 class="card-title">{{$product->title}}</h5>

                                <a href="/home/{{$product->id}}" style="margin-top: 10px" class=" mt-auto detail-btn btn-secondary ">More Detail</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="{{$products->previousPageUrl()}}">Previous</a></li>
                  @if ($i == $products->currentPage())


                  @else
                    @for ($i = 1; $i <= $products->lastPage(); $i++)
                     <li class="page-item"><a class="page-link" href="{{$products->url($i)}}">{{$i}}</a></li>
                    @endfor
                  @endif

                  <li class="page-item"><a class="page-link" href="{{$products->nextPageUrl()}}">Next</a></li>
                </ul> --}}

        </div>
    </div>
@endsection
