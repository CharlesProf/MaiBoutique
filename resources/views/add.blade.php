@extends('layout.navbar')

@section('title', 'Add Item')

@section('content')
    <div class="form-container d-flex p-2" style="flex-direction: column; align-items:center">
        <h3 style="text-align: center">Add Item</h3>
        <form action="/add" method="POST" style="margin-top: 20px; width:50%" enctype="multipart/form-data">
            @csrf

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Name</label>
                <input type="text" name="name" style="width: 100%">
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Description</label>
                <input type="text" name="description" style="width: 100%">
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Price</label>
                <textarea type="number" name="price" style="width: 100%"></textarea>
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Stock</label>
                <input type="text" name="stock" style="width: 100%">
            </div>

            <div class="update-menu">
                <label for="file" style="display:block; margin-bottom:5px;margin-top:20px;">Image</label>
                <input type="file" name="image">
            </div>

            <button type="submit" style="margin-top: 30px">Submit</button>

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
