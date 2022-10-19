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
    <link rel="stylesheet" href="../styles/order_complete.css?after">
  </head>
<body>
  <?php 
    include 'user_menu_bar.php';
  ?>
  <nav include-html="../static/html/nav.html"></nav>

  <div id="bannerContainer" class="container-fluid py-5 text-center text-white fs-4">
    주문완료
  </div>

  <div id="bodyContainer" class="container-fluid mt-5">
    <h2 class="text-center mt-5">고객님의 주문이 완료되었습니다.</h2>
    <div id="orderComplete_container" class="container mt-5">
      <h2>주문상품</h1>
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
          <tr>
            <td>1</td>
            <td>맥북 프로</td>
            <td>2</td>
            <td>2,500원</td>
            <td>1,700,000원</td>
          </tr>
        </tbody>
      </table><br />

      <h2 class="mt-5">주문정보</h2>
      <table>
        <tr>
          <td>주문번호:</td>
          <td>123238283823</td>
        </tr>
        <tr>
          <td>총 결제 금액:</td>
          <td>1,702,500원</td>
        </tr>
        <tr>
          <td>배송비</td>
          <td>2,500원</td>
        </tr>
      </table>

      <div id="buttonContainer">
        <a href="item_list.php" class="btn btn-primary">계속 쇼핑하기</a>
      </div>
    </div>
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