<!DOCTYPE html>
<html>

<head>
 @include('Home.css')
 <style>
    .div_center{
     display:flex;
     justify-content:center;
     align-items:center;
     padding:30px;
    }
    .details-box{
        padding:15px;
    }
    .order-btn {
  display: inline-block;
  background-color: #ff3c3c;
  color: white;
  padding: 10px 20px;
  border-radius: 6px;
  text-decoration: none;
  font-weight: 600;
  transition: background-color 0.3s ease;
}
 </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
  \
  </div>
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
           Product Details
        </h2>
      </div>
      <div class="row">

        <div class="col-md-12 ">
          <div class="box">
            
              <div class="div_center">
                <img width="400" src="/products/{{$data->image}}" alt="">
              </div>

              <div class="detail-box">
                <h6> {{$data->title}}</h6>
                <h6>Price
                  <span>
                  ${{$data->price}}
                  </span>
                </h6>
              </div>  
              <div class="detail-box">
                <h6>Category: {{$data->category}}</h6>
                <h6>Availaible Quantity
                  <span>
                  {{$data->quantity}}
                  </span>
                </h6>
              </div> 
              <div class="detail-box">
                
                  <p>
                  {{$data->description}}
                  </p>
                </h6>
              </div>   
               
              <div class="detail-box">
                
              <a class="order-btn" href="{{url('add_cart', $data->id)}}">ORDER THIS</a>
            </div>   
          </div>
        </div>
      </div>
       
    </div>
  </section>

 









   

  <!-- info section -->

  @include('home.footer')

</body>

</html>