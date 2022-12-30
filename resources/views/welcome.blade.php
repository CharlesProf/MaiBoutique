@extends('layout.navbar')

@section('title', 'Welcome to MaiBoutique')

@section('content')

    <div class="d-flex flex-column justify-content-center align-items-center" style ="background-image: url('https://global.discourse-cdn.com/pocketgems/uploads/episodeinteractive/original/4X/e/5/a/e5a4de0130871adc82aa703b8b7a2604265c6ee9.png'); height: 100vh ; width: 100vw;">
        <h1 class = "text-white"><strong> Welcome to <u>MaiBoutique</u></strong></h1>
        <br>
        <p class = "text-white"> Online Boutique that Provides You with Various Clothes to Suit Your Various Activities</p>
        <br>
        <a type="button" class="btn btn-primary" href="/signup" type="button">Sign Up Now</a>
      </div>

@endsection
