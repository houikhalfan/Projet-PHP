<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Google Font for elegant script style -->
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

<style>
  .custom-slider-section {
    margin: 0;
    padding: 0;
    background-color: transparent;
    overflow: hidden;
  }

  .carousel-item {
    height: 90vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
  }

  .carousel-caption {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #472f2f;
    background: rgba(255, 240, 243, 0.6);
    padding: 40px 30px;
    border-radius: 20px;
    max-width: 600px;
  }

  .carousel-caption h1 {
    font-family: 'Great Vibes', cursive;
    font-size: 4rem;
    font-weight: normal;
    margin-bottom: 10px;
  }

  .carousel-caption p {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.3rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 20px;
    color: #6e4d4d;
  }

  .custom-contact-btn {
    background-color: #ef476f;
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.3s;
  }

  .custom-contact-btn:hover {
    background-color: #d93d61;
  }

  .carousel-indicators [data-bs-target] {
    background-color: #ef476f;
  }
</style>

<section class="custom-slider-section">
  <div id="customCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="1"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('images/n.png');">
        <div class="carousel-caption">
          <h1>Delight in</h1>
          <p>Every Bite</p>
          <a href="#con" class="custom-contact-btn">Contact Us</a>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('images/third.png');">
        <div class="carousel-caption">
          <h1>Freshly Baked</h1>
          <p>Just For You</p>
          <a href="#pro" class="custom-contact-btn">Explore more</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  const myCarousel = document.querySelector('#customCarousel');
  const carousel = new bootstrap.Carousel(myCarousel, {
    interval: 3000,
    ride: 'carousel',
    pause: false,
    wrap: true
  });
</script>
