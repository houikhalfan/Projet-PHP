<style>
/* Header Styling */


.navbar {
  padding: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.navbar-header {
  display: flex;
  align-items: center;
}

.navbar-brand {
  display: flex;
  align-items: center;
  text-decoration: none;
  font-family: 'Segoe UI', Tahoma, sans-serif;
}

.brand-text {
  font-size: 28px;
  font-weight: bold;
  color: #6ee7b7; /* Soft green color */
}

.brand-sm {
  font-size: 22px;
  color: #6ee7b7; /* Soft green color */
  font-weight: bold;
}

.sidebar-toggle {
  background: transparent;
  border: none;
  font-size: 24px;
  color: #fff;
  margin-left: 20px;
  cursor: pointer;
  transition: transform 0.3s ease;
}

.sidebar-toggle:hover {
  transform: scale(1.1);
  color: #6ee7b7; /* Change color on hover */
}

/* Logout Button */
.logout {
  display: flex;
  align-items: center;
}

.logout form input[type="submit"] {
  background-color: rgba(255, 99, 132, 0.2); /* Légère transparence rouge */
  border-color: #ff6384; /* Bordure rouge claire */
  color: #ff6384; /* Texte rouge */
  padding: 12px 30px;
  border-radius: 8px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease, color 0.3s ease;
  text-transform: uppercase;
}

.logout form input[type="submit"]:hover {
  background-color: #ff6384; /* Fond rouge vif lors du survol */
  color: black; /* Texte noir lors du survol */
}


</style>
<header class="header">   
      <nav class="navbar navbar-expand-lg">
        
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">DELICIA</strong><strong>CAKE</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>C</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          
            <!-- Log out               -->
            <div class="list-inline-item logout">    
               <form method="POST" action="{{ route('logout') }}">
                            @csrf

                    <input class="btn"type="submit" value="Logout">     
                        </form>            </div>
          </div>
        </div>
      </nav>
    </header>