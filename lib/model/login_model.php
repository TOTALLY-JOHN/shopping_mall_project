<?php
    // 데이터베이스 클래스 불러오기
    require_once 'database_config.php';

    class LoginModel {
        public function getLogin() {
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
            } else {
                $DATABASE_ENV = DatabaseConfig::DEVELOPMENT_ENV;
            }
            $dbc = DatabaseConfig::getDatabaseConfig($DATABASE_ENV);
            
            // 로그인 페이지로부터 아이디, 비밀번호 받아오기
            $username = test_input($_REQUEST["usernameInput"]);
            $userPwd = test_input($_REQUEST["pwdInput"]);

            // MySQL query문 작성
            $q1 = "SELECT username, userFirstName, userLastName, userPwd, userType FROM users WHERE username = '".$username."' AND userPwd = '".hash('sha256', $userPwd)."'";
            
            // Query 실행
            $r1 = @mysqli_query ($dbc, $q1);

            // 배열 형태로 가져온다.
            $row = mysqli_fetch_array($r1, MYSQLI_ASSOC);

            // 정보가 있을 경우
            if (isset($_REQUEST['usernameInput']) && isset($_REQUEST['pwdInput'])) {
                // 아이디가 일치하는 경우
                if($row['username'] == $username) {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['userFullName'] = $row['userFirstName'] . " " . $row['userLastName'];
                    $_SESSION['userType'] = $row['userType'];
                    return 'login-success';
                } 
                // 정보가 일치하지 않는 경우
                else {
                    return 'invalid user';
                }
            }
        }
    }
