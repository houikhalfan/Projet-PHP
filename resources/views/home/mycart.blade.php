<!DOCTYPE html>
<html>

<head>
    @include('Home.css')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px;
            margin: 40px auto;
            gap: 20px;
        }

        .cart-section, .summary-section {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .cart-section {
            flex: 2;
        }

        .summary-section {
            flex: 1;
            min-width: 300px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #e55a75;
            color: #fff;
        }

        td img {
            width: 100px;
        }

        .cart-value {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }

        .order-form form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], textarea {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .btn {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .btn-danger {
            background-color: #e55a75;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }

        .btn-primary {
            background-color: #c7dfe7;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #1c5982;
        }

        .btn-success {
            background-color: #c19ee0;
            color: white;
        }

        .btn-success:hover {
            background-color: #9966cc;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        @include('home.header')
    </div>

    <div class="container">
        <div class="cart-section">
            <table>
                <tr>
                    <th>Product Title</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Remove</th>
                </tr>
                <?php $value = 0; ?>
                @foreach($cart as $cart)
                <tr>
                    <td>{{$cart->product->title}}</td>
                    <td>{{$cart->product->price}}</td>
                    <td><img src="/products/{{$cart->product->image}}" alt=""></td>
                    <td><a class="btn btn-danger" href="{{url('delete_cart', $cart->id)}}">Remove</a></td>
                </tr>
                <?php $value += $cart->product->price; ?>
                @endforeach
            </table>
            <div class="cart-value">
                Total value of Cart is: ${{$value}}
            </div>
        </div>

        <div class="summary-section order-form">
            <form action="{{url('confirm_order')}}" method="Post">
                @csrf
                <div>
                    <label>Receiver Name</label>
                    <input type="text" name="name" value="{{Auth::user()->name}}">
                </div>
                <div>
                    <label>Receiver Address</label>
                    <textarea name="address">{{Auth::user()->address}}</textarea>
                </div>
                <div>
                    <label>Receiver Phone</label>
                    <input type="text" name="phone" value="{{Auth::user()->phone}}">
                </div>
                <div class="buttons">
                    <input class="btn btn-primary" type="submit" value="Cash on Delivery">
                    <a class="btn btn-success" href="{{url('stripe',$value)}}">Pay Using Card</a>
                </div>
            </form>
        </div>
    </div>

    @include('home.footer')
</body>

</html>