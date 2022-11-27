<?php
  session_start();

  //! [CONNECT THE CONTROLLER]
  require_once('../controller/checkout_controller.php');
  $controllers = new CheckoutController();
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
    <link rel="stylesheet" href="../styles/checkout.css?after">
  </head>
<body>
  <?php 
    include 'user_menu_bar.php';
  ?>
  <nav include-html="../static/html/nav.html"></nav>

  <div id="bannerContainer" class="container-fluid py-5 text-center text-white fs-4">
    CHECKOUT
  </div>

  <div id="bodyContainer" class="container-fluid mt-5">
    <div id="checkout_container" class="container">
      <h2>주문상품</h1>
      <div id="checkoutProductContainer">
      </div>
      <br />

      <h2 class="mt-5">주문정보</h2>
      <form action="checkout_action.php" autocomplete="off">
        <table class="table table">
          <tbody>
            <tr>
              <td>주문자:</td>
              <td><input type="text" class="form-control" name="buyerName" placeholder="성함을 입력해주세요."></td>
            </tr>
            <tr>
              <td>이메일:</td>
              <td><input type="text" class="form-control" name="buyerEmail" placeholder="이메일을 입력해주세요."></td>
            </tr>
            <tr>
              <td>휴대전화:</td>
              <td><input type="text" class="form-control" name="buyerPhone" placeholder="휴대전화를 입력해주세요."></td>
            </tr>
            <tr>
              <td>주소:</td>
              <td><input type="text" class="form-control" name="buyerAddress" placeholder="주소를 입력해주세요."></td>
            </tr>
            <tr>
              <td>결제방법:</td>
              <td>
                <input type="radio" name="payment_method" value="cash"> 무통장입금 &nbsp;
                <input type="radio" name="payment_method" value="debit"> 카드결제
              </td>
            </tr>
            <tr>
              <td>약관동의:</td>
              <td><input type="checkbox" name="agree"> 쇼핑몰 구매약관 동의</td>
            </tr>
          </tbody>
        </table>
        <div id="buttonContainer" class="mt-5">
          <input type="submit" class="btn btn-primary" value="결제하기">
        </div>
        
      </form>
    </div>
  </div>

  <footer include-html="../static/html/footer.html"></footer>
  
  <script>
    includeHTML(function () {});
    
    // FILL JAVASCRIPT OR jQUERY HERE!
    window.addEventListener("load", (e) => {
      let products = JSON.parse(window.sessionStorage.getItem("checkoutProducts"));
      let html = `
        <table class="table table-striped">
        <thead>
          <tr>
            <th>상품 번호</th>
            <th>상품 정보</th>
            <th>수량</th>
            <th>배송비</th>
            <th>합계</th>
          </tr>
        </thead>
        <tbody>
      `;
      
      for (let i = 0; i < products.length; i++) {
        console.log(products);
        html += `
          <tr>
            <td>${products[i].productId}</td>
            <td>${products[i].productName}</td>
            <td>${products[i].quantity}</td>
            <td>${products[i].shippingFee}</td>
            <td>${products[i].productPrice}</td>
          </tr>
        `;
      }
      html += `
        </tbody>
      </table>
      `;
      document.querySelector("#checkoutProductContainer").innerHTML = html;
    });


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