<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mods.css">
</head>
<body>
<header>

    <div class="header-top">

      <div class="container">
            
      </div>

    </div>

    <div class="header-main">

      <div class="container">
        <a href="#" class="header-logo">
          <img src="./assets/images/logo/DNDLogo1.png" alt="dnd logo" width="250" height="140">
        </a>
      
        <div class="header-search-container">
          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">
      
          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>
        </div>
      
        <div class="button-container">
            <a href="login.php"> <button class="button" onclick="Login()">Login</button> </a>
        </div>
      
        <div class="button-container">
        <a href="registration.php"> <button class="button" onclick="Register()">Register</button> </a>
        </div>
      
        <div class="header-user-actions">
          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>
        </div>
      </div>
      
      <style>
        .container {
          position: relative;
        }
      
        .button-container {
        display: flex;
        justify-content: flex-end;
        margin-top: 10px;
        margin-right: 5px;
        
}
      
        .button {
          margin: 0 0px;
          padding: 20px 20px;
          background-color: #010201;
          color: white;
          border: none;
          text-decoration: none;
          font-size: 15px;
          cursor: pointer;
          
        }
      </style>
      
      
    </div>

    <nav class="desktop-navigation-menu">

<div class="container">

  <ul class="desktop-menu-category-list">    

    <li class="menu-category">
      <a href="#" class="menu-title">E-Juice</a>

      <ul class="dropdown-list">

        <li class="dropdown-item">
          <a href="#">Saltnic</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Freebase</a>
        </li>

        <li class="panel-list-item">
          <a href="#">
            <img src="./assets/images/mens-banner.jpg" alt="men's fashion" width="250" height="119">
          </a>
        </li>
        
      </ul>
    </li>

    <li class="menu-category">
      <a href="#" class="menu-title">Disposable Pods</a>

      <ul class="dropdown-list">

        <li class="dropdown-item">
          <a href="#">3% Nicotine (30MG)</a>
        </li>

        <li class="dropdown-item">
          <a href="#">5% Nicotine (50MG)</a>
        </li>

        <li class="panel-list-item">
          <a href="#">
            <img src="./assets/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
          </a>
        </li>
      </ul>
    </li> 

    <li class="menu-category">
      <a href="#" class="menu-title">Hardwares</a>

      <ul class="dropdown-list">

        <li class="dropdown-item">
          <a href="mods.php">Mods</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Pods</a>
        </li>

        <li class="dropdown-item">
          <a href="#">OCC and Cartridges</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Atomizers</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Batteries and Chargers</a>
        </li>
        <li class="panel-list-item">
          <a href="#">
            <img src="./assets/images/electronics-banner-1.jpg" alt="headphone collection" width="250"
              height="119">
          </a>
        </li>

      </ul>


    <li class="menu-category">
      <a href="#" class="menu-title">Miscellaneuos</a>
      <ul class="dropdown-list">

        <li class="dropdown-item">
          <a href="#">Cottons</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Wires</a>
        </li>

        <li class="panel-list-item">
          <a href="#">
            <img src="./assets/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-category">
      <a href="#" class="menu-title">Customer Care</a>
      <ul class="dropdown-list">

        <li class="dropdown-item">
          <a href="#">Customer Service</a>
        </li>

        <li class="dropdown-item">
          <a href="#">Maintenance</a>
        </li>

        <li class="panel-list-item">
          <a href="#">
            <img src="./assets/images/mens-banner.jpg" alt="women's fashion" width="250" height="119">
          </a>
        </li>
      </ul>
    </li>
    

  </ul>

</div>

</nav>
    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Men's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Women's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Dress & Frock</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Makeup Kit</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Jewelry</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Couple Rings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Bracelets</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Perfume</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Clothes Perfume</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Deodorant</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Flower Fragrance</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Air Freshener</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li>

      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>

  </header>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</div>
</body>
</html>