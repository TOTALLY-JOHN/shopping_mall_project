<?php
  session_start();

  //! [CONNECT THE CONTROLLER]
  require_once('../controller/product_controller.php');
  $controllers = new ProductController();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, target-densitydpi=medium-dpi" />
    <meta name="description" content="Tag Shopping Mall">
    <meta name="keyword" content="Tag Shopping Mall, Danbi Lee, Marcus Shim, Jihwan Jeong">
    <title>Tag Shopping Mall</title>
    <link rel="icon" href="" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../static/js/includeHTML.js"></script>
    <link rel="stylesheet" href="../styles/index.css?after">
    <link rel="stylesheet" href="../styles/view_item.css?after">
  </head>
<body>
  <?php 
    include 'user_menu_bar.php';
  ?>
  <nav include-html="../static/html/nav.html"></nav>

  <!-- <div id="bannerContainer" class="container-fluid py-5 text-center text-white fs-4">
    VIEW ITEM
  </div> -->

  <div id="bodyContainer" class="container-fluid">
    <!-- FILL HERE! -->
    
    <!-- SEARCH! -->
    <section id="search">
      <div id="search-bar">
        <form>
          <input/>
          <button>Go</button>
        </form>
      </div>
    </section>

    <!-- ITEM GATEGORY! -->
    <section id="filter">
      <div id="filter-sort">
        <div class="man">
          <span>JACKET</span>
        </div><br>
        
        <div class="woman">
          <span>SWEATER</span>
        </div><br>
          
        <div class="kid">
          <span>T-SHIRT</span>
        </div><br>

        <div class="accessory"> 
          <span>SHOES</span>
        </div>

      </div>
    </section>

    <div class="div-between-line"></div><br>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div id="product_image_part">
            <img id="product_image" src="https://images.unsplash.com/photo-1593757107729-eae8bcc74f8e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Default Man's Shirt">
          </div>
        </div>
        <div class="col-md-6">
          <div id="product_description" class="pt-3">
            <p>Normal Shirt</p>
            <p>RM 39.90</p>
            <p>Default Man's Shirt</p><br />
            <p>Designed for casual outfit</p>
            <hr />
          </div>
          <div id="product_option">
            <p>
              Color
              <select id="select_color" class="form-control">
                <option>Red</option>
                <option>Blue</option>
                <option>Green</option>
              </select>
            </p>
            <p>
              Size
              <select id="select_size" class="form-control">
                <option>XS</option>
                <option>S</option>
                <option>M</option>
              </select>
            </p>
            <p>
              Quantity
              <select id="select_quantity" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </p>
          </div>
          <div id="button_group" class="mt-5">
            <button id="cart_button" class="btn btn-danger">Add To Cart</button>
            <button id="wish_button" class="btn btn-info">Add To Wishlist</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer include-html="../static/html/footer.html"></footer>
  
  <script>
    includeHTML(function () {});
  </script>
</body>
</html>