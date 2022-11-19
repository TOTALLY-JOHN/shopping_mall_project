<?php
    // 데이터베이스 클래스 불러오기
    require_once 'database_config.php';

    class CartModel {
      public function addToCart() {
        // FILL HERE
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

      // Fetch Cart Items
      public function fetchCartItems($userId) {
        $DATABASE_ENV;
        if ("$_SERVER[HTTP_HOST]" === "tag-project.000webhostapp.com") {
          $DATABASE_ENV = DatabaseConfig::PRODUCTION_ENV;
          $dbc = DatabaseConfig::getDatabaseConfig($DATABASE_ENV);

          // 가져와하는 데이터: 상품 이미지, 상품명, 상품수량, 합계
          $sql = "SELECT productName, productDiscountPrice, productImage, cartQuantity FROM carts JOIN products ON carts.productId = products.productId WHERE carts.userId = $userId";
          
          $data = @mysqli_query ($dbc, $sql);
          return $data;
        } else {
          $DATABASE_ENV = DatabaseConfig::DEVELOPMENT_ENV;
          $dbc = DatabaseConfig::getDatabaseConfig($DATABASE_ENV);

          // 가져와하는 데이터: 상품 이미지, 상품명, 상품수량, 합계
          $sql = "SELECT productName, productDiscountPrice, productImage, cartQuantity FROM carts JOIN products ON carts.productId = products.productId WHERE carts.userId = $userId";
          
          $data = @mysqli_query ($dbc, $sql);
          return $data;
        }
      }

      public function updateCartItem() {
        // FILL HERE
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
