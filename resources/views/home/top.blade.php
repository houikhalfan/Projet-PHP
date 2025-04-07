<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

<style>
    .popular-cakes-section {
  background: #f5ccd6		;
}

.popular-cakes-section .custom-heading-container {
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  margin-bottom: 50px;
}

.fancy-title {
  font-family: 'Pacifico', cursive;
  font-size: 60px;
  font-weight: bold;
  color: #e55a75; /* fallback color */
  margin: 0;
  line-height: 0.1;
}

.gradient-text {
    background: linear-gradient(to right, #e55a75, #b04e56);
    -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

}

.popular-cakes-section .decor-line {
  font-size: 20px;
  color: #dcdcdc;
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.popular-cakes-section .decor-line::before,
.popular-cakes-section .decor-line::after {
  content: '';
  flex: 1;
  height: 1px;
  background: #e8e8e8;
  margin: 0 10px;
}

.popular-cakes-section .left-line span,
.popular-cakes-section .right-line span {
  font-size: 20px;
  color: #e4b4b4;
}

/* Scoped Cake Card Styles */
.popular-cakes-section .cake-card {
  background-color: #fff;
  border-radius: 15px;
  transition: transform 0.3s ease-in-out;
  border: 1px solid #f7f7f7;
  padding: 15px;
}

.popular-cakes-section .cake-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.popular-cakes-section .img-box {
  height: 200px;
  overflow: hidden;
  border-radius: 12px;
}

.popular-cakes-section .img-box img {
  height: 100%;
  width: 100%;
  object-fit: cover;
}

.popular-cakes-section .cake-title {
  font-size: 18px;
  color: #333;
  font-weight: 600;
  margin-top: 15px;
}

.popular-cakes-section .cake-price {
  font-size: 16px;
  color: #f7941d;
  font-weight: 500;
}

</style>
<section class="layout_padding popular-cakes-section">
  <div class="container">
    <div class="custom-heading-container text-center">
      <div class="decor-line left-line"><span>❦</span></div>
      <h2 class="fancy-title">Popular <span class="gradient-text">Cakes</span></h2>
      <div class="decor-line right-line"><span>❦</span></div>
    </div>

    <div class="row">
      @foreach($topProducts as $product)
      <div class="col-md-4 mb-4">
        <div class="card cake-card text-center">
          <div class="card-img-top img-box">
            <img src="{{ asset('products/' . $product->image) }}" alt="{{ $product->title }}" class="img-fluid">
          </div>
          <div class="card-body">
            <h5 class="cake-title">{{ $product->title }}</h5>
            <h6 class="cake-price">${{ $product->price }}</h6>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
