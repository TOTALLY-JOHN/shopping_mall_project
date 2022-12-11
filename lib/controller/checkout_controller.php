<?php
    // 모델 불러오기
    require_once('../model/checkout_model.php');

    class CheckoutController {
        public $checkoutModel;

        // 모델 생성
        public function __construct() {
            $this->checkoutModel = new CheckoutModel();
        }

        // 기능 구현
        public function makeProductOrder() {
            $result = $this->checkoutModel->makeOrder();

            if ($result == TRUE) {
                header('location: ../view/order_complete.php');
            } 
            else {    
                header('location: ../view/checkout.php?login_failure');
            }
        }
    }
?>