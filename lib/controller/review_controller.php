<?php
    // 모델 불러오기
    require_once('../model/review_model.php');

    class ReviewController {
        public $reviewModel;

        // 모델 생성
        public function __construct() {
            $this->reviewModel = new ReviewModel();
        }

        // 기능 구현
        public function addReview() {
            $result = $this->reviewModel->add();
        }
    }
?>