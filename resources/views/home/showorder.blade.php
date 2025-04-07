<section class="layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Top 3 Most Ordered Cakes</h2>
    </div>
    <div class="row">
      @foreach($topProducts as $product)
      <div class="col-md-4">
        <div class="box">
          <div class="img-box">
            <img src="/product/{{ $product->image }}" alt="{{ $product->title }}">
          </div>
          <div class="detail-box">
            <h5>{{ $product->title }}</h5>
            <h6>${{ $product->price }}</h6>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
