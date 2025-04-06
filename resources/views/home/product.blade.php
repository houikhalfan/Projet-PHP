<style>
/* Make the entire card look like a clickable area */
.modern-card-link {
  text-decoration: none;
  color: inherit;
  display: block;
}

.modern-card {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  padding: 20px;
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  margin-bottom: 30px;
  position: relative;
}

.modern-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.15);
}

.image-container img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-radius: 10px;
}

.product-title {
  font-weight: 600;
  font-size: 16px;
  margin-top: 15px;
  color: #333;
}

.product-price {
  color: #e74c3c;
  font-weight: bold;
  font-size: 18px;
  margin: 10px 0;
}

.button-group {
  margin-top: 10px;
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

.order-btn:hover {
  background-color: #2980b9;
}

.favorite-icon {
  position: absolute;
  top: 10px;
  right: 15px;
  font-size: 20px;
  color: #e74c3c;
}


</style>
<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
Menu        </h2>
      </div>
      <div class="row">

      @foreach($product as $products)
      <div class="col-sm-6 col-md-4 col-lg-3">
  <a href="{{url('product_details', $products->id)}}" class="modern-card-link">
    <div class="modern-card">
      <div class="favorite-icon">❤️</div>
      <div class="image-container">
        <img src="products/{{$products->image}}" alt="{{$products->title}}">
      </div>
      <h5 class="product-title">{{$products->title}}</h5>
      <p class="product-price">${{$products->price}}</p>
      <div class="button-group">
        <a class="order-btn" href="{{url('add_cart', $products->id)}}">ORDER THIS</a>
      </div>
    </div>
  </a>
</div>


      @endforeach 
      </div>
       
    </div>
  </section>
