<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

<style>
  .contact_section {
    padding: 80px 0;
    background: #f7f9fb;
    font-family: 'Roboto', sans-serif;
    position: relative;
    z-index: 2;
  }

  .contact_section .heading_container h2 {
    font-size: 40px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 50px;
    color: #333;
    position: relative;
  }

  .contact_section .container-bg {
    background: #fff;
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
  }

  .map_container {
    height: 100%;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
  }

  .map-responsive iframe {
    width: 100%;
    height: 100%;
    border: none;
  }

  form {
    padding: 20px 0;
  }

  form input,
  form .message-box {
    width: 100%;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    background: #f1f1f1;
    font-size: 16px;
    transition: all 0.3s ease;
  }

  form input:focus,
  form .message-box:focus {
    border-color: #e55a75;
    background: #fff;
    outline: none;
    box-shadow: 0 0 0 3px rgba(229, 90, 117, 0.1);
  }

  form .message-box {
    height: 120px;
    resize: none;
  }

  form button {
    background-color: #e55a75;
    color: #fff;
    border: none;
    padding: 14px 30px;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 500;
    transition: all 0.3s ease;
    cursor: pointer;
  }
  .contact_section h2 {
    font-family: 'Dancing Script', cursive;
    font-size: 40px;
  font-weight: 700;
  text-align: center;
  margin-bottom: 50px;
  color: #333;
}

.contact_section h2 span {
  font-family: 'Dancing Script', cursive;
  font-size: 48px;
  color: #e55a75;
  margin-right: 8px;
}

}


  form button:hover {
    background-color: #d54d68;
    box-shadow: 0 8px 20px rgba(229, 90, 117, 0.3);
  }

  @media (max-width: 768px) {
    .contact_section .container-bg {
      padding: 20px;
    }

    .contact_section .heading_container h2 {
      font-size: 32px;
    }
  }
</style>

<section class="contact_section" id="con">
  <div class="container px-0">
    <div class="heading_container">
    <h2><span>Contact</span> Us</h2>
    </div>
  </div>
  <div class="container container-bg">
    <div class="row">
      <div class="col-lg-7 col-md-6 px-0 mb-4 mb-md-0">
        <div class="map_container">
          <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.611858991502!2d-9.5297556!3d30.4059045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3c833a697c883%3A0xd499cff904412ef6!2sNational%20School%20of%20Applied%20Sciences!5e1!3m2!1sen!2sma!4v1744045774092!5m2!1sen!2sma" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 px-0">
        <form action="#">
          <div>
            <input type="text" placeholder="Name" />
          </div>
          <div>
            <input type="email" placeholder="Email" />
          </div>
          <div>
            <input type="text" placeholder="Phone" />
          </div>
          <div>
            <input type="text" class="message-box" placeholder="Message" />
          </div>
          <div class="d-flex justify-content-start">
            <button type="submit">SEND</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>