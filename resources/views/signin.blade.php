@section('title', 'Sign In')

    <div class="form-container d-flex p-2" style="flex-direction: column; align-items:center">
        <h3 style="text-align: center">Sign In</h3>
        <form action="/signin" method="POST" style="margin-top: 20px; width:50%" enctype="multipart/form-data">
            @csrf

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Email</label>
                <input type="text" name="email" style="width: 100%">
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;">Password</label>
                <textarea name="password" rows="3" style="width: 100%"></textarea>
            </div>

            <div class="p-1">
                <p class="w-100"><input class="form-control-sm" type="checkbox" name="remember" id="remember">Remember me</p>
            </div>

            <button type="submit" style="margin-top: 30px">Sign In</button>

            <div>
                <p>Not Registered yet? <a href="/signup">Register here</a></p>
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


