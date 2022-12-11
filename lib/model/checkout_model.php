<?php
    // 데이터베이스 클래스 불러오기
    require_once 'database_config.php';

    class CheckoutModel {
        public function makeOrder() {
          $DATABASE_ENV;
          if ("$_SERVER[HTTP_HOST]" === "tag-project.000webhostapp.com") {
            $DATABASE_ENV = DatabaseConfig::PRODUCTION_ENV;
            $dbc = DatabaseConfig::getDatabaseConfig($DATABASE_ENV);
            $productId = $_REQUEST["productIdArr"];
            $userId = $_SESSION["userId"];
            $orderNo = $_REQUEST["orderNo"];
            $quantity = $_REQUEST["quantityArr"];
            $productIdArr = explode(',', $productId);
            $quantityArr = explode(',', $quantity);

            for ($i = 0; $i < count($productIdArr); $i++) {
              $sql = "INSERT INTO orders(userId, orderDateTime, orderNo, productId, quantity, orderStatus) VALUES ('$userId', NOW(), '$orderNo', '$productIdArr[$i]', '$quantityArr[$i]', 'preparing')";
              $data = $dbc->query($sql);
            }
            return $data;
          } else {
            $DATABASE_ENV = DatabaseConfig::DEVELOPMENT_ENV;
            $dbc = DatabaseConfig::getDatabaseConfig($DATABASE_ENV);
            $productId = $_REQUEST["productIdArr"];
            $userId = $_SESSION["userId"];
            $orderNo = $_REQUEST["orderNo"];
            $quantity = $_REQUEST["quantityArr"];
            $productIdArr = explode(',', $productId);
            $quantityArr = explode(',', $quantity);

            for ($i = 0; $i < count($productIdArr); $i++) {
              $sql = "INSERT INTO orders(userId, orderDateTime, orderNo, productId, quantity, orderStatus) VALUES ('$userId', NOW(), '$orderNo', '$productIdArr[$i]', '$quantityArr[$i]', 'preparing')";
              $data = $dbc->query($sql);
            }
            return $data;
          }
        }
    }
?>