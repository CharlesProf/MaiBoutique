@extends('layout.navbar')

@section('title', 'Edit Password')

@section('content')

    <div class="form-container d-flex p-2" style="flex-direction: column; align-items:center">
        <h3 style="text-align: center">Edit Profile</h3>
        <form action="/profile/edit-password" method="POST" style="margin-top: 20px; width:50%" enctype="multipart/form-data">
            @csrf

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;">Old Password</label>
                <textarea name="old_password" rows="3" style="width: 100%"></textarea>
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;">New Password</label>
                <textarea name="new_password" rows="3" style="width: 100%"></textarea>
            </div>

            <button type="submit" style="margin-top: 30px">Save Update</button>
            <a class="nav-link" href="/profile">Back</a>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                    </ul>
                <div>
            @endif

        </form>
    </div>
@endsection

