<?php
    // 데이터베이스 클래스 불러오기
    require_once 'database_config.php';

    class CartModel {
        public function addToCart() {
          // FILL HERE
          if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){ 
            if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){ 
                $product_id = $_REQUEST['id'];
        }

        public function fetchCartItems() {
          // FILL HERE
          $sqlQ = "SELECT * FROM products WHERE id=?"; 
          $stmt = $db->prepare($sqlQ); 
          $stmt->bind_param("i", $db_id); 
          $db_id = $product_id; 
          $stmt->execute(); 
          $result = $stmt->get_result(); 
          $productRow = $result->fetch_assoc(); 
  
          $itemData = array( 
              'id' => $productRow['id'], 
              'image' => $productRow['image'], 
              'name' => $productRow['name'], 
              'price' => $productRow['price'], 
              'qty' => 1 
        }

        public function updateCartItems() {
          // FILL HERE
          $redirectURL = $insertItem?'viewCart.php':'index.php'; 
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){ 
        // Update item data in cart 
        $itemData = array( 
            'rowid' => $_REQUEST['id'], 
            'qty' => $_REQUEST['qty'] 
        ); 
        $updateItem = $cart->update($itemData); 
        }
    }
?>

// Ref : https://www.codexworld.com/simple-php-shopping-cart-using-sessions/
