<?php
    // 모델 불러오기
    require_once('../model/order_model.php');

    class OrderController {
        public $orderModel;

        // 모델 생성
        public function __construct() {
            $this->orderModel = new OrderModel();
        }

        // 기능 구현
        public function fetchProductOrders() {
            $result = $this->orderModel->fetchOrders();
        }
    }
?>