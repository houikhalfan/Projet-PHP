<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')  
  <style type="text/css">
  .form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 30px;
    flex-direction: column;
  }

  .form-input {
    width: 100%;
    max-width: 400px;
    height: 50px;
    padding: 10px 15px;
    font-size: 16px;
    border: 2px solid #ced4da;
    border-radius: 8px;
    margin-right: 15px;
    outline: none;
    transition: border-color 0.3s;
  }

  .form-input:focus {
    border-color: #4CAF50;
    box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
  }

  .btn-primary {
    height: 50px;
    padding: 0 20px;
    border-radius: 8px;
    font-weight: bold;
    transition: 0.3s;
  }

  .btn-primary:hover {
    background-color: #357ab8 !important;
  }

  .custom-table {
    width: 90%;
    max-width: 800px;
    margin: 50px auto;
    border-collapse: collapse;
    font-family: 'Segoe UI', Tahoma, sans-serif;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    overflow: hidden;
  }

  .custom-table th {
    background-color: #4CAF50;
    color: white;
    padding: 15px;
    font-size: 18px;
    text-transform: uppercase;
  }

  .custom-table td {
    background-color: #f9f9f9;
    color: #333;
    padding: 12px;
    border: 1px solid #ddd;
    text-align: center;
  }

  .custom-table tr:nth-child(even) td {
    background-color: #f1f1f1;
  }

  .custom-table tr:hover td {
    background-color: #e3f2fd;
  }
</style>

  </head>
  <body>
    @include('admin.header')
   @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <h1 style="color: white;">Add Category</h1>
          <div class="form-container">
  <form action="{{url('add_category')}}" method="post" style="display: flex; gap: 15px;">
    @csrf
    <input class="form-input" type="text" name="category" placeholder="Enter category name">
    <input class="btn btn-primary" type="submit" value="Add Category">
  </form>
</div>

<div>
  <table class="custom-table">
    <tr>
      <th>Category Name</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @foreach($data as $data)
    <tr>
      <td>{{$data->category_name}}</td>
      <td>
        <a class="btn btn-success" href="{{url('edit_category',$data->id)}}">Edit</a>
      </td>
      <td>
        <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </table>
</div>

</div> 
      </div>
    </div>
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