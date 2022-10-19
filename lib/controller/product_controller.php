<?php
    // 모델 불러오기
    require_once('../model/product_model.php');

    class ProductController {
        public $orderModel;

        // 모델 생성
        public function __construct() {
            $this->productModel = new ProductModel();
        }

        // 기능 구현
        public function addProduct() {
            $result = $this->productModel->addProduct();
        }
    }
?>