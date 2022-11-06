<?php
    // 데이터베이스 클래스 불러오기
    require_once 'database_config.php';

    class CartModel {
        public function addToCart() {
          // 장바구니 제품 추가
          if (isset($_POST['pid'])) {
            $pid = $_POST['pid'];
            $pname = $_POST['pname'];
            $pcategory = $_POST['pcategory'];
            $poriginalprice = $_POST['poriginalprice'];
            $pdiscountprice = $_POST['pdiscountprice'];
            $pimage = $_POST['pimage'];
            $pstock = $_POST['pstock'];
            $totalprice = $pdiscountprice * $pstock;

            $stmt = $conn->prepare('SELECT productId FROM cart WHERE productId=?');
            $stmt->bind_param('s',$pid);
            $stmt->execute();
            $res = $stmt->get_result();
            $r = $res->fetch_assoc();
            $code = $r['productId'] ?? '';

            if (!$code) {
              $query = $conn->prepare('INSERT INTO cart (productId, productName, productCategory, productOriginalPrice, productDiscountPrice,productImage, productStock,totalPrice) VALUES (?,?,?,?,?,?,?,?)');
              $query->bind_param('ssssss',$pid,$pname,$pcategory,$poriginalprice,$pdiscountprice,$pimage,$pstock,$totalprice);
              $query->execute();
        
              echo '<div class="alert alert-success alert-dismissible mt-2">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Item added to your cart!</strong>
                    </div>';
            } else {
              echo '<div class="alert alert-danger alert-dismissible mt-2">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Item already added to your cart!</strong>
                    </div>';
            }
          }

        }

        public function fetchCartItems() {
          // FILL HERE
          
        }

        public function updateCartItems() {
          // FILL HERE

        }
    }
?>
