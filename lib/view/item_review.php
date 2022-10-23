<?php
  session_start();

  //! [CONNECT THE CONTROLLER]
  require_once('../controller/review_controller.php');
  $controllers = new ReviewController();
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
    <link rel="stylesheet" href="../styles/item_review.css?after">
  </head>
<body>
  <?php 
    include 'user_menu_bar.php';
  ?>
  <nav include-html="../static/html/nav.html"></nav>

  <div id="bannerContainer" class="container-fluid py-5 text-center text-white fs-4">
    상품 리뷰
  </div>

  <div id="bodyContainer" class="container-fluid mt-5">
    <!-- FILL HERE! -->
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="item_review_container">
              <h2>상품 리뷰 1</h2>
              <img src="https://placeimg.com/330/495/any" />
            </div>
          </div>
          <div class="col-sm-3">
            <div class="item_review_container">
              <h2>상품 리뷰 2</h2>
              <img src="https://placeimg.com/330/495/any" />
            </div>
          </div>
          <div class="col-sm-3">
            <div class="item_review_container">상품 리뷰 3</div>
          </div>
          <div class="col-sm-3">
            <div class="item_review_container">상품 리뷰 4</div>
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