<?php
  if (isset($_SESSION['username']) && isset($_SESSION['userType']) && isset($_SESSION['userFullName'])) {
?>
    <div class="container-fluid" id="adminBar">
      <div style="float:left;"><?php echo $_SESSION['userFullName'];?> <span id="greetings">님 안녕하세요!<span></div>
      <div style="float:right;">
<?php
      if ($_SESSION['userType'] === "ADMIN") {
?>
        <a class="menuBar" href="dashboard.php">쇼핑몰 관리</a> &nbsp;
<?php
      }
?>
        <a class="menuBar" href="my_order.php">주문/설정</a> &nbsp;
        <a class="menuBar" href="logout.php">로그아웃</a>
      </div>
    </div>
<?php
  }
?>