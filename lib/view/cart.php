<?php
  session_start();

  //! [CONNECT THE CONTROLLER]
  require_once('../controller/cart_controller.php');
  $controllers = new CartController();
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
    CART
  </div>

  <div id="bodyContainer" class="container-fluid mt-5">
    <!-- FILL HERE! -->
      
  <section class="h-100 h-custom" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                      <h1 class="fw-bold mb-0 text-black">장바구니</h1>
                      <h6 class="mb-0 text-muted">3 items</h6>
                    </div>
                    <hr class="my-4">
  
                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img
                          src="https://picsum.photos/id/103/300/300"
                          class="img-fluid rounded-3" alt="Dynamic Remarketing">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">Analytics E-Commerce </h6>
                        <h6 class="text-black mb-0">TAG Skillset</h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          <i class="fas fa-minus"></i>
                        </button>
  
                        <input id="form1" min="0" name="quantity" value="1" type="number"
                          class="form-control form-control-sm" />
  
                        <button class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">29,900원</h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a onclick="DeleteItem()" class="text-muted"><img
                          src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png"
                          class="img-fluid rounded-3" alt="Dynamic Remarketing" style="width:3rem;"></a>
                      </div>
                    </div>
  
                    <hr class="my-4">
  
                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img
                          src="https://picsum.photos/id/104/300/300"
                          class="img-fluid rounded-3" alt="SDK Implementation">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">SDK Implementation</h6>
                        <h6 class="text-black mb-0">Firebase SKillset</h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          <i class="fas fa-minus"></i>
                        </button>
  
                        <input id="form1" min="0" name="quantity" value="1" type="number"
                          class="form-control form-control-sm" />
  
                        <button class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">29,900원</h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a onclick="DeleteItem()" class="text-muted">
                          <img
                          src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png"
                          class="img-fluid rounded-3" alt="SDK Implementation" style="width:3rem;"></a>
                      </div>
                    </div>
  
                    <hr class="my-4">
  
                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img
                          src="https://picsum.photos/id/106/300/300"
                          class="img-fluid rounded-3" alt="Enhanced Conversion">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">Enhanced Conversion</h6>
                        <h6 class="text-black mb-0">TAG Skillset</h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          <i class="fas fa-minus"></i>
                        </button>
  
                        <input id="form1" min="0" name="quantity" value="1" type="number"
                          class="form-control form-control-sm" />
  
                        <button class="btn btn-link px-2"
                          onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">29,900원</h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a onclick="DeleteItem()"  class="text-muted">
                          <img
                          src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png"
                          class="img-fluid rounded-3" alt="Enhanced Conversion" style="width:3rem;"></a>
                      </div>
                    </div>
  
                    <hr class="my-4">
  
                    <div class="pt-5">
                      <h6 class="mb-0"><a href="#!" class="text-body">
                        <i class="fas fa-long-arrow-alt-left me-2"></i><a href="index.html">쇼핑하러가기</a></h6>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 bg-grey">
                  <div class="p-5">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                    <hr class="my-4">
  
                    <div class="d-flex justify-content-between mb-4">
                      <h5 class="text-uppercase">상품수: 3</h5>
                      <h5 id="itemTotalPriceWithoutShpping">89,700원</h5>
                    </div>
  
                    <h5 class="text-uppercase mb-3">배송</h5>
  
                    <div class="mb-4 pb-2">
                      <select id="shippingFee" class="form-select" onchange="calculateTotal()">
                        <option value="2500" class="form-control">일반 배송(2,500원)</option>
                        <option value="4500" class="form-control">로켓 배송(4,500원)</option>
                      </select>
                    </div>
  
                    <h5 class="text-uppercase mb-3">추가 할인받기!</h5>
  
                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea2">코드를 입력하세요.</label>
                      </div>
                    </div>
  
                    <hr class="my-4">
  
                    <div class="d-flex justify-content-between mb-5">
                      <h5 class="text-uppercase">총 금액:</h5>
                      <h5 id="totalPrice">92,200원</h5>
                    </div>
  
                    <button type="button" class="btn btn-dark btn-block btn-lg"
                      data-mdb-ripple-color="dark" onclick="Checkout()" style="width:100%;">CHECKOUT</button>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>

  <footer include-html="../static/html/footer.html"></footer>
  
  <script>
    includeHTML(function () {});
    // FILL JAVASCRIPT OR jQUERY HERE!
    function calculateTotal() {
      let priceWithoutShipping = +document.getElementById("itemTotalPriceWithoutShpping").innerText.replace(/[^\d]/g, '');
      let shippingFee = +document.getElementById("shippingFee").value;
      let total = priceWithoutShipping + shippingFee;
      
      document.getElementById("totalPrice").innerText = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') + "원";
    }
    function Checkout() {
      window.alert('Still Developing!');

    }

    function DeleteItem() {
      window.alert('Still Developing!');
    }
  </script>
</body>
</html>