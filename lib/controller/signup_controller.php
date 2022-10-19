<?php
    // 모델 불러오기
    require_once('../model/signup_model.php');

    class SignupController {
        public $signupModel;

        // 모델 생성
        public function __construct() {
            $this->signupModel = new SignupModel();
        }

        // 기능 구현
        public function registerUser() {
            $result = $this->signupModel->register();
        }
    }
?>