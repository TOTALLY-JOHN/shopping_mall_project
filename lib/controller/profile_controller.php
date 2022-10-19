<?php
    // 모델 불러오기
    require_once('../model/profile_model.php');

    class ProfileController {
        public $profileModel;

        // 모델 생성
        public function __construct() {
            $this->profileModel = new ProfileModel();
        }

        // 기능 구현
        public function updateUserProfile() {
            $result = $this->profileModel->updateProfile();
        }
    }
?>