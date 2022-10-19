<?php
    // 모델 불러오기
    require_once('../model/cart_model.php');

    class CartController {
        public $cartModel;

        // 모델 생성
        public function __construct() {
            $this->cartModel = new CartModel();
        }

        // 기능 구현
        public function addProductToCart() {
            $result = $this->cartModel->addToCart();
        }
    }
?>