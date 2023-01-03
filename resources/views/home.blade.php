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

                                {{-- Kolom input qty disini --}}
                                <form action="/home" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="Quantity"><b>Quantity</b></label>
                                <div class="d-flex flex-row">
                                    <input type="number" class="form-control" id="Quantity" aria-describedby="quantityHelp" placeholder="Enter Quantity">
                                    {{-- Tombol add to cart disini--}}
                                <button type="button" class="btn btn-block btn-success"  data-id="{{$product->id}}" data-name="{{$product->name}}" data-price="{{$product->price}}" data-description='{{$product->description}}'>Add</button>
                                </div>
                                </form>

                                <br>
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

{{-- @section('footer-scripts')
<script>
    $(document).ready(function() {
        window.cart = <?php echo json_encode($cart) ?>;
        updateCartButton();
        $('.add-to-cart').on('click', function(event){
            var cart = window.cart || [];
            cart.push({'id':$(this)data('id'), 'name':$(this).data('name'), 'price':$(this).data('price'), 'qty':$(this).prev('input').val()});
            window.cart = cart;

            $.ajax('/store/add-to-cart', {
                type: 'POST',
                data: {"_token": "{{ csrf_token() }}", "cart":cart},
                success: function (data, status, xhr) {
                }
            });
            updateCartButton();
        });
    })

    function updateCartButton() {

        var count = 0;
        window.cart.forEach(function (item, i) {

            count += Number(item.qty);
        });

        $('#items-in-cart').html(count);
    }
</script>
@endsection --}}
