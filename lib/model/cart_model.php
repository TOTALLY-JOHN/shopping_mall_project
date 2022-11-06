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
            $totalprice = $pstock * $pdiscountprice;

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
                      <strong>Item added to cart!</strong>
                    </div>';
            } else {
              echo '<div class="alert alert-danger alert-dismissible mt-2">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Item already added to cart!</strong>
                    </div>';
            }
          }

        }

        public function fetchCartItems() {
          // 장바구니 제품 가져오기
          $sqlQ = "SELECT * FROM products WHERE pid=?"; 
          $stmt = $db->prepare($sqlQ); 
          $stmt->bind_param("i", $db_id); 
          $db_id = $productId; 
          $stmt->execute(); 
          $result = $stmt->get_result(); 
          $productRow = $result->fetch_assoc(); 
  
          $itemData = array( 
              'pid' => $productsRow['pid'],
              'pname' => $productsRow['pname'],
              'pcategory' => $productsRow['pcategory'],
              'poriginalprice' => $productsRow['poriginalprice'],
              'pdiscountprice' => $productsRow['pdiscountprice'],
              'pimage' => $productsRow['pimage'],  
              'pstock' => 1 
          ); 
        }

        public function updateCartItems() {
          // 장바구니 제품 업데이트
          if(isset($_POST["pstock"]))
          {
            $pid            = $_POST["pid"];
            $pname          = $_POST["pname"];
            $pcategory      = $_POST["pcategory"];
            $poriginalprice = $_POST["poriginalprice"];
            $pdiscountprice = $_POST["pdiscountprice"];
            $pimage         = $_POST["pimage"];
            $pstock         = $_POST["pstock"];

            $totalprice     = $pstock * $pdiscountprice;

            $update_stmt=$db -> prepare("UPDATE cart SET productStock = pstock, totalprice=:totalprice WHERE productId=:pid");
            $update_stmt -> execute(array(":pstock"=>$pstock,
                                          ":totalprice"=>$totalprice,
                                          ":pid"=>$productId));
          }
        }
    }
?>
