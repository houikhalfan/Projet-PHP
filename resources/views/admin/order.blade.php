<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')  
  <style>
   
   body {
  background: linear-gradient(to right,rgb(31, 36, 44), #243b55); /* Dégradé de fond */
  font-family: 'Segoe UI', Tahoma, sans-serif;
  margin: 0; /* Supprimer les marges par défaut */
  padding: 0; /* Supprimer les paddings par défaut */
  height: 100vh; /* Prendre toute la hauteur de la fenêtre */
}


/* Glassmorphic Card Effect */
.div_deg,
.table {

  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border-radius: 16px;
  padding: 20px;
  margin-top: 20px;
  color: white;
  width: 90%;
  max-width: 1000px;
  overflow: hidden;
}

/* Table Styling */
.table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 12px;
  text-align: center;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

th {
  background-color: rgba(110, 231, 183, 0.2);
  color: white;
  font-size: 18px;
  font-weight: bold;
}

td {
  background-color: rgba(255, 255, 255, 0.1);
  color: white;
}

tr:hover td {
  background-color: rgba(255, 255, 255, 0.2);
}

/* Search Button Styling */
input[type="submit"] {
  padding: 12px 20px;
  font-weight: bold;
  border-radius: 10px;
  background-color: rgba(110, 231, 183, 0.2);
  color: white;
  border: 1px solid #6ee7b7;
  transition: background 0.3s, transform 0.2s;
  cursor: pointer;
}
h1 {
  font-size: 32px;
  font-weight: 700;
  color: #ffffff;
  text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
  margin-bottom: 25px;
  letter-spacing: 1px;
}

input[type="submit"]:hover {
  background-color: #6ee7b7;
  color: black;
  transform: scale(1.05);
}

/* Button Styling */
.btn-success,
.btn-danger {
  padding: 12px 20px;
  font-weight: bold;
  border-radius: 10px;
  background-color: rgba(110, 231, 183, 0.2);
  color: white;
  border: 1px solid #6ee7b7;
  transition: background 0.3s, transform 0.2s;
}

.btn-success:hover {
  background-color: #6ee7b7;
  color: black;
  transform: scale(1.05);
}

.btn-danger {
  background-color: rgba(255, 99, 132, 0.2);
  border-color: #ff6384;
}

.btn-danger:hover {
  background-color: #ff6384;
  color: black;
}

  </style>
  </head>
  <body>
    @include('admin.header')
   @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
<h1>All Orders</h1>
<br>
<br>
        <table class="table-center">
            <tr>
                <th>Customer name</th>
                <th>Address</th>
                <th>Phone </th>
                <th>Product title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Payment Status</th>
                <th>Status</th>
                <th>Change status</th>
            </tr>
            @foreach($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->rec_address}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->product->title}}</td>
                <td>{{$data->product->price}}</td>
                <td>
                    <img width="150"src="products/{{$data->product->image}}" >
                </td>
                <td>{{$data->payment_status}}</td>
                <td>
                    @if($data->status=='in progress')
                    <span style="color:red">{{$data->status}}</span>
                    @elseif($data->status=='On The Way')
                    <span style="color:yellow">{{$data->status}}</span>
                    @else <span style="color:green">{{$data->status}}</span>

                    @endif
                </td>
                 <td>
                    <a class="btn btn-primary"href="{{url('on_the_way',$data->id)}}"> On the way</a>
                    <a class="btn btn-success"href="{{url('delivered',$data->id)}}"> Delivered</a>

                 </td>
            </tr>
            @endforeach
        </table>
</div> 
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
  </body>
</html>