<?php
    // 모델 불러오기
    require_once('../model/login_model.php');

    class LoginController {
        public $loginModel;

        // 로그인 모델 생성
        public function __construct() {
            $this->loginModel = new LoginModel();
        }

        // 로그인 기능 구현
        public function authUserLogin() {
            $result = $this->loginModel->getLogin();
            // 로그인 성공시 main.php로 리다이렉트
            if ($result == 'login-success') {
                $_SESSION["login_status"] = "success";
                header('location: ../view/main.php');
            } 
            // 로그인 실패시 다시 로그인 페이지를 보여주기
            else {    
                $_SESSION["login_status"] = "failure";
                header('location: ../view/login.php?login_failure');
            }
        }
    }
