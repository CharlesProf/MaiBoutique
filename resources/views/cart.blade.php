@extends('layout.navbar')

@section('title', 'Cart')

@section('content')
    <h1>Cart</h1>
<div class="column" style="justify-content:space-evenly">
    <div class = "d-flex flex-column justify-content-center align-items-center">
    <h1>My Cart</h1>
    <div>
    <div class = "bg-light">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Qty</th>
              </tr>
            </thead>
            <tbody>
              <?php $total = 0; ?>
              @foreach ($cart as $item)
              <?php $total += $item['price'] * $item['qty']; ?>
              <tr>
                <td>{{ $item['name'] }}</td>
                <td>${{ $item['price'] }}</td>
                <td>{{ $item['qty'] }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <p>
              <strong>Total: ${{ $total}}</strong>
          </p>

</div>
@endsection
