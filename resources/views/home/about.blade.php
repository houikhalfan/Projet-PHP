<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">

<style>
  .about_section {
    padding: 80px 0;
    background-color: #fefefe;
    font-family: 'Roboto', sans-serif;
    color: #333;
  }

  .about_section .container {
  display: flex;
  justify-content: space-between;
  align-items: flex-start; /* Align to top */
  flex-wrap: nowrap;       /* Prevent wrapping */
}

  .about_section .text-content {
    flex: 1 1 45%;
    padding-right: 20px;
  }

  .about_section .heading {
    text-align: left;
  }

  .about_section .heading h2 {
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 10px;
  }

  .about_section .heading h2 span {
  font-family: 'Great Vibes', cursive;
  color: #e55a75;
  font-size: 44px;
  margin-right: 5px;
}

  .about_section .heading p {
    font-size: 16px;
    line-height: 1.7;
    color: #666;
    margin: 15px 0;
  }

  .about_section .btn-container {
    margin-top: 25px;
  }

  .about_section .btn-outline {
    display: inline-block;
    padding: 12px 28px;
    border: 2px solid #333;
    font-size: 14px;
    letter-spacing: 1px;
    color: #333;
    text-transform: uppercase;
    transition: all 0.3s ease;
    background-color: transparent;
    border-radius: 5px;
  }

  .about_section .btn-outline:hover {
    background-color: #e55a75;
    color: #fff;
    border-color: #e55a75;
  }

  .about_section .grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
  flex-shrink: 0; /* Prevent grid from shrinking */
}

.about_section .grid img {
  width: 250px;         /* Fixed width */
  height: 250px;        /* Fixed height */
  border-radius: 10px;
  object-fit: cover;    /* Keeps the image proportionally cropped */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

</style>

<section class="about_section" id="about">
  <div class="container">
    <div class="text-content">
      <div class="heading">
      <h2><span>About</span> Us</h2>
<p>
  Welcome to Delicia Cakes, where every treat is baked with love and a sprinkle of joy. Nestled in the heart of the community, our passion lies in crafting homemade delights that bring people together — from buttery croissants to rich, velvety cakes and the kind of cookies that make you smile with every bite. 
  What started as a small family dream has risen into a cozy haven for dessert lovers and coffee companions alike. Our secret? Time-honored recipes, the finest ingredients, and a whole lot of heart. 
  Whether you're grabbing your morning muffin, ordering a custom cake for a celebration, or just stopping by to enjoy the smell of something sweet baking — we’re here to make your day just a little more delicious. 
  Delicia Cakes — Where every bite feels like home.
</p>

        <div class="btn-container">
          <a href="#con" class="btn-outline">Our Locations</a>
        </div>
      </div>
    </div>
    <div class="grid">
      <img src="images/4.jpeg" alt="Baking">
      <img src="images/2.jpeg" alt="Dessert">
      <img src="images/3.jpg" alt="Cake">
      <img src="images/1.jpeg" alt="Cookies">
    </div>
  </div>
</section>
