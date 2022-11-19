<?php
    // 모델 불러오기
    require_once('../model/cart_model.php');

    class CartController {
        public $cartModel;

        // 모델 생성
        public function __construct() {
            $this->cartModel = new CartModel();
        }

        // 장바구니에 제품 추가
        public function addProductToCart() {
            $result = $this->cartModel->addToCart();
        }

        // 장바구니에 있는 제품 수정
        public function updateCart() {
            $result = $this->cartModel->updateCartItem();
        }

        // 장바구니에 있는 제품 가져오기
        public function fetchCart($userId) {
            $result = $this->cartModel->fetchCartItems($userId);
            return $result;
        }
    }
?>