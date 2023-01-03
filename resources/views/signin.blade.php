@section('title', 'Sign In')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container bg-white mb-3 py-3 px-5 border border-2 border-dark rounded login-container">
        <div class="col">
            <form method="POST" action="/signin" class="text-center" enctype="multipart/form-data">
                @csrf
                <div class="row mb-2 login-form">
                    <label for="email" class="text-left text fw-bold fs-4 mb-1">Email</label>
                    <input type="email" class="form-control border border-2 border-dark rounded" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="row login-form">
                    <label for="password" class="text-left text-pink fw-bold fs-4 mb-1">Password</label>
                    <input type="password" class="form-control border border-2 border-dark rounded" name="password" placeholder="5-20 characters">
                </div>
                <div class="form-check">
                    {{-- <input class="form-check-input" type="checkbox" value="" id="remeber" checked />
                    <label class="form-check-label" for="form2Example31" name='remember' id="remember"> Remember me </label> --}}
                    <p class="w-100"><input class="form-control-sm" type="checkbox" name="remember" id="remember">Remember me</p>
                </div>
                <button type="submit" class="btn btn-primary fw-semibold mt-3">Login</button>

                <div class="row mt-3 text-center">
                    <p class="fw-bold fs-6">
                        <span>Not Registered Yet? </span>
                        <a class="text-decoration-none col text-primary fw-bold fs-6" href="/signup">Register Here</a>
                    </p>
                </div>

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
    </div>
