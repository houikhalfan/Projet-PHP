<style>
 /* Sidebar Links */
#sidebar ul {
  list-style-type: none;
  padding-left: 0;
}

#sidebar ul li {
  margin-bottom: 15px;
}

#sidebar ul li a {
  display: flex;
  align-items: center;
  color: #fff;
  font-size: 18px;
  padding: 12px 15px;
  text-decoration: none;
  border-radius: 8px;
  transition: background-color 0.3s, transform 0.2s;
}

#sidebar ul li a i {
  margin-right: 10px;
  font-size: 20px;
}

/* Sidebar Hover Effects */
#sidebar ul li a:hover {
  background-color: rgba(110, 231, 183, 0.3);
  transform: scale(1.05);
}

/* Dropdown Submenu */
#sidebar ul li ul {
  padding-left: 20px;
}

#sidebar ul li ul li a {
  padding: 10px 15px;
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 8px;
  transition: background-color 0.3s;
}

#sidebar ul li ul li a:hover {
  background-color: rgba(110, 231, 183, 0.3);
}
 
</style>
<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="title">
            <h1 class="h5">ADMIN</h1>
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
         <br>
         <br>
        <ul class="list-unstyled">
                <li><a href="{{url('admin/dashboard')}}"> 
                  <i class="icon-home"></i>DASHBOARD </a></li>
                <li>
                    <a href="{{url('view_category')}}"> <i class="icon-grid"></i>
                    SWEET TYPE 
                </a>
                </li>

                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">
                   <i class="icon-windows"></i>
                   BAKERY </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                      <li><a href="{{url('add_product')}}">ADD PRODUCT</a></li>
                    <li><a href="{{url('view_product')}}">VIEW PRODUCTS</a></li>
                  </ul>
                </li>
                <li>
                    <a href="{{url('view_orders')}}"> <i class="icon-grid"></i>
                    ORDERS 
                </a>
                </li>
               
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->