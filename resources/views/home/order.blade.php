<!DOCTYPE html>
<html>

<head>
 @include('Home.css')
 <style>
    

    .div-center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        max-width: 900px;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 12px;
        overflow: hidden;
    }

    th, td {
        text-align: center;
        padding: 16px 12px;
    }

    th {
        background-color: #4a90e2;
        color: white;
        font-size: 18px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #e0f7fa;
        transition: background-color 0.3s ease;
    }

    td img {
        width: 60px;
        height: auto;
        border-radius: 8px;
        object-fit: cover;
    }
</style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section --> 

    <div class="div-center"> 
        <table >
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Delivery status</th>
                <th>Image</th>
            </tr>
            @foreach($order as $order )
            <tr>
                <td>{{$order->product->title}}</td>
                <td>{{$order->product->price}}</td>
                <td>{{$order->status}}</td>
                <td>
                    <img src="products/{{$order->product->image}}" >
                </td>
            </tr>
            @endforeach
        </table>
    </div>
  </div>
  <!-- end hero area -->

  





 

  <!-- info section -->

  @include('home.footer')

</body>

</html>