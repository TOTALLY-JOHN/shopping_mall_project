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
</head>

<body>
  <?php 
    include 'user_menu_bar.php';
  ?>
  <nav include-html="../static/html/nav.html"></nav>

  <div id="bannerContainer" class="container-fluid py-5 text-center text-white fs-4">
    <span>ITEMS</span>
  </div>

  <div id="bodyContainer" class="container-fluid">
    <div class="mx-4">
      <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-secondary" aria-current="page" href="#">123&nbsp;ITEMS</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  SORT BY
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Recommended</a></li>
                  <li><a class="dropdown-item" href="#">Newest</a></li>
                  <li><a class="dropdown-item" href="#">Lowest Price</a></li>
                  <li><a class="dropdown-item" href="#">Highest Price</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="row mx-4 mt-4">
      <div class="col-md-3">
        <a href="view_item.php?productId=1">
          <img src="https://placeimg.com/330/495/any" />
        </a>
        <p>item</p>
        <p>10,000원</p>
      </div>
      <div class="col-md-3">
        <a href="view_item.php?productId=2">
          <img src="https://placeimg.com/330/495/any" />
        </a>
        <p>item</p>
        <p>10,000원</p>
      </div>
      <div class="col-md-3">
        <a href="view_item.php?productId=3">
          <img src="https://placeimg.com/330/495/any" />
        </a>
        <p>item</p>
        <p>10,000원</p>
      </div>
      <div class="col-md-3">
        <a href="view_item.php?productId=4">
          <img src="https://placeimg.com/330/495/any" />
        </a>
        <p>item</p>
        <p>10,000원</p>
      </div>
    </div>

    <div class="row mx-4 mt-4">
      <div class="col-md-3">
        <img src="https://placeimg.com/330/495/any" />
        <p>item</p>
        <p>10,000원</p>
      </div>
      <div class="col-md-3">
        <img src="https://placeimg.com/330/495/any" />
        <p>item</p>
        <p>10,000원</p>
      </div>
      <div class="col-md-3">
        <img src="https://placeimg.com/330/495/any" />
        <p>item</p>
        <p>10,000원</p>
      </div>
      <div class="col-md-3">
        <img src="https://placeimg.com/330/495/any" />
        <p>item</p>
        <p>10,000원</p>
      </div>
    </div>

    <div class="row mx-4 mt-4">
      <div class="col-md-3">
        <img src="https://placeimg.com/330/495/any" />
        <p>item</p>
        <p>10,000원</p>
      </div>
      <div class="col-md-3">
        <img src="https://placeimg.com/330/495/any" />
        <p>item</p>
        <p>10,000원</p>
      </div>
      <div class="col-md-3">
        <img src="https://placeimg.com/330/495/any" />
        <p>item</p>
        <p>10,000원</p>
      </div>
      <div class="col-md-3">
        <img src="https://placeimg.com/330/495/any" />
        <p>item</p>
        <p>10,000원</p>
      </div>
    </div>

    <div class="row mx-4 mt-4">
      <div class="col-md-3">
        <img src="https://placeimg.com/330/495/any" />
        <p>item</p>
        <p>10,000원</p>
      </div>
      <div class="col-md-3">
        <img src="https://placeimg.com/330/495/any" />
        <p>item</p>
        <p>10,000원</p>
      </div>
      <div class="col-md-3">
        <img src="https://placeimg.com/330/495/any" />
        <p>item</p>
        <p>10,000원</p>
      </div>
      <div class="col-md-3">
        <img src="https://placeimg.com/330/495/any" />
        <p>item</p>
        <p>10,000원</p>
      </div>
    </div>

    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center mt-5">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <!-- <span class="sr-only">Previous</span> -->
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <!-- <span class="sr-only">Next</span> -->
          </a>
        </li>
      </ul>
    </nav>
  </div>

  <footer include-html="../static/html/footer.html"></footer>
  
  <script>
    includeHTML(function () {});
  </script>
</body>

</html>