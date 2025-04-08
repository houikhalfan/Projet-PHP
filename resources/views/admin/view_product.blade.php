<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')  
  <style>
/* Body Background */
body {
  background: linear-gradient(to right, #141e30, #243b55);
  font-family: 'Segoe UI', Tahoma, sans-serif;
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

/* Pagination Styling */
.div_deg {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.pagination {
  background: rgba(110, 231, 183, 0.2);
  padding: 5px 10px;
  border-radius: 10px;
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
}

.pagination a {
  color: white;
  padding: 5px 10px;
  text-decoration: none;
  border-radius: 5px;
  margin: 0 5px;
}

.pagination a:hover {
  background-color: rgba(110, 231, 183, 0.5);
}

  </style>
  </head>
  <body>
    @include('admin.header')
   @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <form action="{{url('product_search')}}" method="get" >
          @csrf
              <input type="search" name="search">
              <input type="submit" class="btn btn-secondary" value="search">
            </form>
        
        <div class="div_deg">
            <table class="table">
                <tr>
                    <th>Product Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                </tr>
                @foreach($product as $products)
                <tr>
                    <td>{{$products->title}}</td>
                    <td>{{$products->description}}</td>
                    <td>{{$products->category}}</td>
                    <td>{{$products->price}}</td>
                    <td>{{$products->quantity}}</td>
                    <td> 
                        <img height="100" width="100" src="products/{{$products->image}}" alt="">
                    </td> 
                    <td>
                        <a class="btn btn-success" href="{{url('update_product',$products->id)}}">Update</a>
                    </td>
                   
                    <td><a class="btn btn-danger "onclick="confirmation(event)" href="{{url('delete_product',$products->id)}}">Delete</a></td>
                </tr>
                @endforeach
            </table>
            
        </div> 
        <div class="div_deg">
        {{$product->onEachSide(1)->links()}} 
        </div>
       
</div> 
      </div>
    </div>

    <!-- JavaScript files-->
     <!-- JavaScript files-->
     <script type="text/javascript">
      function confirmation(ev) 
      {
       ev.preventDefault(); 
       var urlToRedirect = ev.currentTarget.getAttribute('href');
       console.log(urlToRedirect);
       swal({
        title:"are u sure to delete this",
        text: "this delete will be permanent",
        icon: "warning",
        buttons: true,
        dangerMode: true,

       })
       .then((willCancel)=>{
        if(willCancel)
       {
        window.location.href=urlToRedirect;
       }

       });
       
      }

     </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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