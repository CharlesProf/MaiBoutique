@extends('layout.navbar')

@section('title', 'Profile')

@section('content')

    <div class="mt-2 text-gray-400 text-sm">

        <h1 class="text-center">My Profile</h1>

        @if (Auth::user()->role != 'admin')
            <p class="text-center">Member</p>
        @else
            <p class="text-center">{{Auth::user()->role}}</p>
        @endif

        <p class="text-center">username: {{Auth::user()->username}}</p>
        <p class="text-center">{{Auth::user()->email}}</p>

        <p class="text-center">Address: {{Auth::user()->address}}</p>
        <p class="text-center">Phone: {{Auth::user()->phone}}</p>

        {{-- Edit Profile button for users only --}}
        @if(Auth::user()->role == 'member')
            <div class="p-3">
                <a class="w-100 form-control-sm btn-primary" href="/profile/edit-profile" type="button">Edit Profile</a>
            </div>
        @endif

        {{-- Edit password button --}}
        <div class="p-3">
            <a class="w-100 form-control-sm btn-primary" href="/profile/edit-password" type="button">Edit Password</a>
        </div>

    </div>
@endsection
