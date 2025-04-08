<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css') 
  <style type="text/css">
    body {
  background: linear-gradient(to right, #141e30, #243b55);
  font-family: 'Segoe UI', Tahoma, sans-serif;
}

/* Glassmorphic card effect */
.form-container,
.custom-table {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border-radius: 16px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
  padding: 30px;
  margin-top: 30px;
  width: 90%;
  max-width: 800px;
  color: #fff;
}

/* Input Fields */
.form-input {
  width: 100%;
  max-width: 400px;
  height: 50px;
  padding: 10px 15px;
  font-size: 16px;
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 10px;
  background-color: rgba(255, 255, 255, 0.1);
  color: #fff;
  outline: none;
  transition: border-color 0.3s, box-shadow 0.3s;
}

.form-input::placeholder {
  color: #ccc;
}

.form-input:focus {
  border-color: #6ee7b7;
  box-shadow: 0 0 8px rgba(110, 231, 183, 0.6);
}

/* Button */
.btn-primary {
  height: 50px;
  padding: 0 25px;
  border-radius: 10px;
  font-weight: bold;
  background: rgba(110, 231, 183, 0.2);
  color: #fff;
  border: 1px solid #6ee7b7;
  transition: background 0.3s, transform 0.2s;
}

.btn-primary:hover {
  background: #6ee7b7 !important;
  color: #000 !important;
  transform: scale(1.05);
}


/* h1 Header */
h1 {
  font-size: 32px;
  font-weight: 700;
  color: #ffffff;
  text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
  margin-bottom: 25px;
  letter-spacing: 1px;
}
/* Glassmorphic Edit Button */
.btn-success {
  background: rgba(110, 231, 183, 0.15);
  color: #6ee7b7;
  border: 1px solid #6ee7b7;
  padding: 8px 15px;
  border-radius: 8px;
  font-weight: 600;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
}

.btn-success:hover {
  background: #6ee7b7 !important;
  color: #000 !important;
  transform: scale(1.05);
}

/* Glassmorphic Delete Button */
.btn-danger {
  background: rgba(244, 67, 54, 0.15);
  color: #f44336;
  border: 1px solid #f44336;
  padding: 8px 15px;
  border-radius: 8px;
  font-weight: 600;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
}

.btn-danger:hover {
  background: #f44336 !important;
  color: #fff !important;
  transform: scale(1.05);
}


  </style> 
  </head>
  <body>
    @include('admin.header')
   @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <h1 style="color:white;">Update Category</h1>

        <div class="div_deg">
            <form action="{{url('update_category',$data->id)}}" method="post">
                @csrf

            <input type="text" name="category" value="{{$data->category_name}}">
            <input class="btn btn-primary" type="submit" value="Update Category">    
        </form>
        </div>
        
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