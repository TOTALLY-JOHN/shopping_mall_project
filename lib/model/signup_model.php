<?php
    // 데이터베이스 클래스 불러오기
    require_once 'database_config.php';
    
    class SignupModel {
        public function register() {
          // 특수문자 제거
          function test_input($data) { 
            $data = trim($data); 
            $data = stripslashes($data); 
            $data = htmlspecialchars($data); 
            return $data;
        }
        
           // 데이터베이스 Credentials 불러오기
           $DATABASE_ENV;
           if ("$_SERVER[HTTP_HOST]" === "tag-project.000webhostapp.com") {
               $DATABASE_ENV = DatabaseConfig::PRODUCTION_ENV;

               $dbc = DatabaseConfig::getDatabaseConfig($DATABASE_ENV);
           
               $userLastName = test_input($_REQUEST["userLastName"]);
               $userFirstName = test_input($_REQUEST["userFirstName"]);
               $userName = test_input($_REQUEST["userId"]);
               $userPwd = test_input($_REQUEST["pass1"]);
               $userEmail = test_input($_REQUEST["userEmail"]);
               $userPhone = test_input($_REQUEST["userPhone"]);
               $userAddress = test_input($_REQUEST["postCode"]).test_input($_REQUEST["address"]).test_input($_REQUEST["detailAddress"]);

               // MySQL query문 작성
              $q1 = "INSERT INTO users VALUES(".$userName."','".$userFirstName."','".$userLastName."', '".$userPwd."', '".$userEmail."', '".$userPhone."', '".$userAddress."', 'ORDINARY', 0, 0, SYSDATE)";
               
               // Query 실행
               $r1 = @mysqli_query ($dbc, $q1);

               // 정보가 있을 경우
               if (!$q1) {
                //insert실패
                return "singup-faill";
               }else{
                return "signup-success";
               }
           }else{
            $DATABASE_ENV = DatabaseConfig::DEVELOPMENT_ENV;

            $dbc = DatabaseConfig::getDatabaseConfig($DATABASE_ENV);
        
            $userLastName = test_input($_REQUEST["userLastName"]);
            $userFirstName = test_input($_REQUEST["userFirstName"]);
            $userName = test_input($_REQUEST["userId"]);
            $userPwd = test_input($_REQUEST["pass1"]);
            $userEmail = test_input($_REQUEST["userEmail"]);
            $userPhone = test_input($_REQUEST["userPhone"]);
            $userAddress = test_input($_REQUEST["postCode"]).", ".test_input($_REQUEST["address"]).", ".test_input($_REQUEST["detailAddress"]);

            // MySQL query문 작성
           $q1 = "INSERT INTO users VALUES('".$userName."','".$userFirstName."','".$userLastName."', '".$userPwd."', '".$userEmail."', '".$userPhone."', '".$userAddress."', 'ORDINARY', 0, 0, CURRENT_DATE)";
            
            // Query 실행
            $r1 = @mysqli_query ($dbc, $q1);
            
            echo $q1;

            // 정보가 있을 경우
            if (!$q1) {
             //insert실패
             return "singup-fail";
            }else{
             return "signup-success";
            }
           }
       }
    }
?>