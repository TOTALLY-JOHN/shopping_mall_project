<?php
  require_once 'database_config.php';

  @$userName = $_REQUEST['username'];

  $DATABASE_ENV;
  if ("$_SERVER[HTTP_HOST]" === "tag-project.000webhostapp.com") {
    $DATABASE_ENV = DatabaseConfig::PRODUCTION_ENV;

    $dbc = DatabaseConfig::getDatabaseConfig($DATABASE_ENV);

    $q1 = "SELECT COUNT(*) FROM users WHERE username = '".$userName."'";
    $data = @mysqli_query ($dbc, $q1);
    
    // 배열 형태로 가져온다.
    $row = mysqli_fetch_array($data, MYSQLI_ASSOC);

    if($row >= 1){
      $result = "fail";
    }else{
      $result = "success";
    }
    
  }else{
    $DATABASE_ENV = DatabaseConfig::DEVELOPMENT_ENV;


    $dbc = DatabaseConfig::getDatabaseConfig($DATABASE_ENV);

    $q1 = "SELECT COUNT(*) as count FROM users WHERE username = '".$userName."';";
    $r1 = @mysqli_query ($dbc, $q1);

    $data = mysqli_fetch_array($r1);

    if($data['count'] >= 1){
      $result = "fail";
    }else{
      $result = "success";
    }
  }

  echo $result;
  
  

?>