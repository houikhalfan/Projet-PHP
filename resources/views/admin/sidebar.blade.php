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