<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

<style>
  /* Remove default margin and padding from body and html */
html, body {
  margin: 0;
  padding: 0;
  width: 100%;
  overflow-x: hidden;
  background-color: #fff0f3; /* Optional: match the section background */
}

/* Navbar Container */
#navbarSupportedContent {
  width: 100% !important;
  background-color: #fdeef1 !important; /* soft pink */
  justify-content: center !important;
  padding: 20px 0 !important;
  border-radius: 0 0 30px 30px !important;
  display: flex !important;
  flex-wrap: wrap !important;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05) !important;
  font-family: 'Poppins', 'Helvetica Neue', sans-serif !important;
}

/* Brand Title */
.navbar-brand span {
  color: #e55a75 !important;
  font-family: 'Pacifico', cursive !important;
  font-size: 36px !important;
  letter-spacing: 1px !important;
  text-transform: none !important;
}


/* Nav Links */
#navbarSupportedContent .navbar-nav .nav-link {
  color: #444 !important;
  font-size: 16px !important;
  margin: 0 18px !important;
  font-weight: 500 !important;
  text-transform: uppercase !important;
  transition: color 0.3s ease !important;
}

#navbarSupportedContent .navbar-nav .nav-link:hover {
  color: #e55a75 !important;
}

#navbarSupportedContent .nav-item.active .nav-link {
  color: #e55a75 !important;
  font-weight: 700 !important;
}

/* User Options (My Orders, Cart) */
#navbarSupportedContent .user_option a {
  color: #4d4d4d !important;
  font-size: 16px !important;
  margin-left: 20px !important;
  display: inline-flex !important;
  align-items: center !important;
  transition: color 0.3s ease !important;
}

#navbarSupportedContent .user_option a:hover {
  color: #e55a75 !important;
}

/* Icons */
#navbarSupportedContent .fa-shopping-bag,
#navbarSupportedContent .fa-user,
#navbarSupportedContent .fa-vcard {
  font-size: 18px !important;
  margin-right: 5px !important;
}

/* Logout Button */
#navbarSupportedContent input[type="submit"].btn-danger {
  background-color: #e55a75 !important;
  border: none !important;
  font-size: 14px !important;
  font-weight: 600 !important;
  padding: 8px 20px !important;
  border-radius: 8px !important;
  margin-left: 25px !important;
  color: #fff !important;
  transition: background-color 0.3s ease !important;
}

#navbarSupportedContent input[type="submit"].btn-danger:hover {
  background-color: #d94a67 !important;
}
.header_section {
  margin-bottom: 0;
  padding-bottom: 0;
}
</style>


<header class="header_section delicia-navbar">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('images/x.png')}}" alt="Delicia Cakes Logo" style="height: 50px; margin-right: 10px;"> <!-- Logo Image -->
          <span>
          Delicia Cakes
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>
 
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pro">
                Cakes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">
                About Us
              </a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="#con">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
          @if (Route::has('login'))
          @auth
          <a href="{{url('myorders')}}">
              My Orders
            </a>

          <a href="{{url('mycart')}}">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            [{{$count}}]
            </a>
          <form style="padding:10px" method="POST" action="{{ route('logout') }}">
                            @csrf

                            <input class="btn btn-danger" type="submit" value="logout">
                        </form>
            @else

            <a href="{{url('/login')}}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>
            <a href="{{url('/register')}}">
              <i class="fa fa-vcard" aria-hidden="true"></i>
              <span>
                Register
              </span>
            </a>
           
            @endauth
            @endif
            
            
          </div>
        </div>
      </nav>
      
    </header>