<?php
  session_start();
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
    <link rel="stylesheet" href="../styles/about.css?after">
  </head>
<body>
  <?php 
    include 'user_menu_bar.php';
  ?>
  <nav include-html="../static/html/nav.html"></nav>

  <div id="bodyContainer" class="container-fluid py-5 mt-5 text-center fs-5">
    <div id="firstBox">
    </div>
    <div id="secondImageBox">
      <img src="https://cdn.pixabay.com/photo/2019/04/03/18/11/woman-4100999_1280.jpg"
        style="width: 70%; height: 550px;"/>
    </div>
    <div id="thirdBox">
      <p class="fs-4" id="aboutUs">ABOUT US</p>
      <h1>Fashion</h1>
      <h1>Trends</h1>
      <h1>2022</h1>
    </div>

    <div id="contentContainer" class="container-fluid">
      <p>
        The best trends, <br />
        The best inspiration, <br />
        The best shopping!
      </p>
    </div>
      
    <p class="fs-2 mt-5">Select Your Best</p>
    <div class="row">
      <div class="col-md-3 text-center py-5 fs-5">
        <a href="view_item.html" class="best_item_main">
          <img src="https://picsum.photos/id/513/300/300" style="width:90%;">
          <br /><br />
          Jacket
        </a>
      </div>
      <div class="col-md-3 text-center py-5 fs-5">
        <a href="view_item.html" class="best_item_main">
          <img src="https://picsum.photos/id/821/300/300" style="width:90%;">
          <br /><br />
          Sweater
        </a>
      </div>
      <div class="col-md-3 text-center py-5 fs-5">
        <a href="view_item.html" class="best_item_main">
          <img src="https://picsum.photos/id/535/300/300" style="width:90%;">
          <br /><br />
          T-Shirt
        </a>
      </div>
      <div class="col-md-3 text-center py-5 fs-5">
        <a href="view_item.html" class="best_item_main">
          <img src="https://picsum.photos/id/103/300/300" style="width:90%;">
          <br /><br />
          Shoes
        </a>
      </div>
    </div>
  </div>

  <footer include-html="../static/html/footer.html"></footer>
  
  <script>
    includeHTML(function () {});
  </script>
</body>
</html>