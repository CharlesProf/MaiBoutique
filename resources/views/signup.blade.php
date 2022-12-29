
@section('title', 'Sign Up')

    <div class="form-container d-flex p-2" style="flex-direction: column; align-items:center">
        <h3 style="text-align: center">Sign Up</h3>
        <form action="/signup" method="POST" style="margin-top: 20px; width:50%" enctype="multipart/form-data">
            @csrf

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Username</label>
                <input type="text" name="username" style="width: 100%">
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Email</label>
                <input type="text" name="email" style="width: 100%">
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;">Password</label>
                <textarea name="password" rows="3" style="width: 100%"></textarea>
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Phone Number</label>
                <input type="text" name="phone" style="width: 100%">
            </div>

            <div class="update-menu">
                <label for="" style="display:block; margin-bottom:5px;margin-top:20px;">Address</label>
                <input type="text" name="address" style="width: 100%">
            </div>

            <button type="submit" style="margin-top: 30px">Submit</button>

            <div>
                <p>Already registered? <a href="/signin">Sign in here</a></p>
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


