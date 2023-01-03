@extends('layout.navbar')

@section('title', 'History')

@section('content')
    <h1>History</h1>
<div class="column" style="justify-content:space-evenly">
    <div class = "d-flex flex-column justify-content-center align-items-center">
    <h1>Check What You've Bought!</h1>
    <div>
    <div class = "bg-light">
        <h2>hello</h2>

        @if ($transactions->isempty())
            <h3>You have not made any transactions yet</h3>
        @else
            @foreach ($transactions as $transaction)

            <div class="card" style="width: 18rem; margin-top: 25px">
                <div class="card-body d-flex flex-column">
                    @if ($detail == 1 )
                        {{-- Show history transaction --}}
                    @else
                        {{-- Show history transaction --}}
                        <h3 class="card-title"><b>{{$transaction->purchased_at}}</b></h3>
                        <ul>
                            <li> {{$transaction->total_purchase}}
                    @endif
                </div>
            </div>
            @endforeach
        @endif

</div>
@endsection
