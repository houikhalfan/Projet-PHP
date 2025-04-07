<!DOCTYPE html>
<html>

<head>
    @include('Home.css')
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff4f6;
            margin: 0;
            padding: 0;
        }

        .order-btn.disabled {
            background: #ddd !important;
            color: #888;
            pointer-events: none;
            cursor: not-allowed;
        }

        .product-details-wrapper {
            padding: 80px 20px;
            background: linear-gradient(to bottom, #fff4f6 0%, #ffeef1 100%);
        }

        .product-card {
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08);
            padding: 40px;
            max-width: 1000px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: center;
        }

        .product-image {
            flex: 1 1 350px;
            display: flex;
            justify-content: center;
        }

        .product-image img {
            max-width: 100%;
            border-radius: 18px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .product-info {
            flex: 1 1 450px;
        }

        .product-info h2 {
            font-family: 'Playfair Display', serif;
            color: #d84b61;
            font-size: 32px;
            margin-bottom: 10px;
        }

        .product-info h4 {
            margin: 12px 0;
            color: #555;
            font-weight: 500;
        }

        .product-info span {
            color: #e74c3c;
            font-weight: bold;
        }

        .product-description {
            margin-top: 25px;
            color: #444;
            line-height: 1.8;
            font-size: 15px;
        }

        .order-btn {
            display: inline-block;
            background: linear-gradient(to right, #ff6f91, #ffafbd);
            color: white;
            padding: 14px 28px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 30px;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .order-btn:hover {
            background: linear-gradient(to right, #ff4e72, #ff8ea3);
        }

        .heading_container h2 {
            font-size: 38px;
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            margin-bottom: 50px;
            color: #333;
            text-align: center;
            position: relative;
        }

        .heading_container h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background-color: #f57b94;
            margin: 10px auto 0;
            border-radius: 2px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        @include('home.header')
    </div>

    <section class="shop_section product-details-wrapper">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Product Details</h2>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="/products/{{$data->image}}" alt="{{$data->title}}">
                </div>
                <div class="product-info">
                    <h2>{{$data->title}}</h2>
                    <h4>Price: <span>${{$data->price}}</span></h4>
                    @if($data->quantity > 0)
                        <h4>Available Quantity: <span>{{$data->quantity}}</span></h4>
                    @endif
                    <div class="product-description">
                        <p>{{$data->description}}</p>
                    </div>
                    @if($data->quantity > 0)
                        <a class="order-btn" href="{{url('add_cart', $data->id)}}">ORDER THIS</a>
                    @else
                        <a class="order-btn disabled">Out of Stock</a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @include('home.footer')
</body>

</html>
