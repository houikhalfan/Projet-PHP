<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')  
    <style type="text/css">
      body {
        background: linear-gradient(to right, #141e30, #243b55);
        font-family: 'Segoe UI', Tahoma, sans-serif;
      }

      /* Glassmorphic container for the form */
      .div_deg {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
      }

      /* Title */
      h1 {
        color: white;
        font-size: 32px;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 30px;
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
      }

      /* Glassmorphic form container - Custom form */
      .custom-form {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        padding: 30px;
        width: 90%;
        max-width: 800px;
        color: #fff;
      }

      /* Input fields styling */
      .custom-form input[type='text'], .custom-form input[type='number'], .custom-form textarea, .custom-form select {
        width: 100%;
        max-width: 400px;
        height: 50px;
        padding: 10px 15px;
        margin-top: 10px;
        margin-bottom: 15px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
        outline: none;
        transition: border-color 0.3s, box-shadow 0.3s;
      }

      /* Placeholder styling */
      .custom-form input[type='text']::placeholder, .custom-form textarea::placeholder {
        color: #ccc;
      }

      /* Focus effect */
      .custom-form input[type='text']:focus, .custom-form input[type='number']:focus, .custom-form textarea:focus, .custom-form select:focus {
        border-color: #6ee7b7;
        box-shadow: 0 0 8px rgba(110, 231, 183, 0.6);
      }

      /* Center the submit button */
      .custom-form .input_deg:last-child {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .custom-form .btn-success {
        background: rgba(110, 231, 183, 0.2);
        color: #fff;
        border: 1px solid #6ee7b7;
        padding: 12px 25px;
        border-radius: 10px;
        font-weight: 600;
        transition: background 0.3s, transform 0.2s;
        backdrop-filter: blur(10px);
        width: auto;
        max-width: 200px;
        margin-top: 20px;
      }

      .custom-form .btn-success:hover {
        background: #6ee7b7 !important;
        color: #000 !important;
        transform: scale(1.05);
      }

      /* Label styling */
      .custom-form label {
        display: inline-block;
        width: 250px;
        font-size: 18px !important;
        color: white !important;
        margin-bottom: 8px;
      }
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h1>Add Product</h1>
          <div class="div_deg">
            <form class="custom-form" action="{{url('upload_product')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="input_deg">
                <label for="">Product Title</label>
                <input type="text" name="title" required>
              </div>
              <div class="input_deg">
                <label for="">Description</label>
                <textarea name="description" required></textarea>
              </div>
              <div class="input_deg">
                <label for="">Price</label>
                <input type="text" name="price">
              </div>
              <div class="input_deg">
                <label for="">Quantity</label>
                <input type="number" name="qty" required>
              </div>
              <div class="input_deg">
                <label for="">Category</label>
                <select name="category" required>
                  <option>Select a category</option>
                  @foreach($category as $category)
                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="input_deg">
                <label for="">Product Image</label>
                <input type="file" name="image">
              </div>
              <br>
              <br>
              <div class="input_deg">
                <input class="btn btn-success" type="submit" value="Add Product">
              </div>
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
