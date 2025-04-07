<style>
/* Category Filter Buttons */
.category-filters {
  margin-bottom: 20px;
  text-align: center;
}

.filter-btn {
  background-color: #f4f4f4;
  border: none;
  padding: 10px 15px;
  margin: 0 5px 10px;
  border-radius: 20px;
  font-weight: 600;
  cursor: pointer;
  transition: background-color 0.3s;
}

.filter-btn:hover,
.filter-btn.active {
  background-color: #e74c3c;
  color: white;
}

/* Card Styles */
.modern-card-link {
  text-decoration: none;
  color: inherit;
  display: block;
}

.order-btn[disabled] {
  opacity: 0.6;
  pointer-events: none;
}

h1 {
  font-family: 'Pacifico', cursive;
  font-size: 1.5rem;
  color: #222;
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
  background-color: #e55a75;
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
.fanc{
  font-family: 'Great Vibes', cursive;
    font-size: 64px;
    color: #a3d9dd;
    text-align: center;
    margin-top: 40px;
 
}
</style>

<section class="shop_section layout_padding" id="pro">
  <div class="container">
    <div class="heading_container heading_center">
      <h1 class="fanc">Signature</h1>
    </div>

    <!-- Dynamic Category Filters -->
    <div class="category-filters">
      <button class="filter-btn active" data-category="All">All</button>
      @php
        $categories = $product->pluck('category')->unique();
      @endphp
      @foreach($categories as $category)
        <button class="filter-btn" data-category="{{ $category }}">{{ $category }}</button>
      @endforeach
    </div>

    <div class="row">
      @foreach($product as $products)
      <div class="col-sm-6 col-md-4 col-lg-3 product-card" data-category="{{ $products->category }}">
        <a href="{{ url('product_details', $products->id) }}" class="modern-card-link">
          <div class="modern-card">
            <div class="favorite-icon">❤️</div>
            <div class="image-container">
              <img src="products/{{ $products->image }}" alt="{{ $products->title }}">
            </div>
            <h5 class="product-title">{{ $products->title }}</h5>
            <p class="product-price">${{ $products->price }}</p>
            <div class="button-group">
              @if($products->quantity > 0)
                <a class="order-btn" href="{{ url('add_cart', $products->id) }}">ORDER THIS</a>
              @else
                <button class="order-btn" style="background-color: grey; cursor: not-allowed;" disabled>OUT OF STOCK</button>
              @endif
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');

    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
        const selectedCategory = button.getAttribute('data-category');

        productCards.forEach(card => {
          const cardCategory = card.getAttribute('data-category');
          if (selectedCategory === "All" || cardCategory === selectedCategory) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });

        filterButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
      });
    });
  });
</script>
