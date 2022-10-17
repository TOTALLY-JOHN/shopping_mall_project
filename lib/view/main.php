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
  </head>
<body>
  <?php
    if (isset($_SESSION['username']) && isset($_SESSION['userType']) && isset($_SESSION['userFullName'])) {
  ?>
      <div class="container-fluid" id="adminBar">
        <div style="float:left;"><?php echo $_SESSION['userFullName'];?> 님 안녕하세요!</div>
        <div style="float:right;"><a class="adminMenu" href="logout.php">로그아웃</a></div>
      </div>
  <?php
    }
  ?>
  <nav include-html="../static/html/nav.html"></nav>
  <div include-html="../static/html/carousel.html" id="demo" class="carousel slide" data-bs-ride="carousel"></div>
  

  <div class="container-fluid mt-5">
    <h2 class="text-center">BEST</h2>
    <div class="row">
      <div class="col-md-3 text-center py-5 fs-5">
        <a href="view_item.html" class="best_item_main">
          <img src="https://picsum.photos/id/513/300/300" style="width:90%;">
          <br /><br />
          Jacket
          <br />
          199,000원
        </a>
      </div>
      <div class="col-md-3 text-center py-5 fs-5">
        <a href="view_item.html" class="best_item_main">
          <img src="https://picsum.photos/id/821/300/300" style="width:90%;">
          <br /><br />
          Sweater
          <br />
          59,900원
        </a>
      </div>
      <div class="col-md-3 text-center py-5 fs-5">
        <a href="view_item.html" class="best_item_main">
          <img src="https://picsum.photos/id/535/300/300" style="width:90%;">
          <br /><br />
          T-Shirt
          <br />
          39,900원
        </a>
      </div>
      <div class="col-md-3 text-center py-5 fs-5">
        <a href="view_item.html" class="best_item_main">
          <img src="https://picsum.photos/id/103/300/300" style="width:90%;">
          <br /><br />
          Shoes
          <br />
          129,900원
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
