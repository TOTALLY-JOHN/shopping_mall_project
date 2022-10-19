<?php
    // 모델 불러오기
    require_once('../model/contact_model.php');

    class ContactController {
        public $contactModel;

        // 모델 생성
        public function __construct() {
            $this->contactModel = new ContactModel();
        }

        // 기능 구현
        public function makeContact() {
            $result = $this->contactModel->createContact();
        }
    }
?>