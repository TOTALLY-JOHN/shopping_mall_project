<?php
session_start();

/// [CHECK WHETHER THERE IS ALREADY THE SESSION FOR THE CURRENT USER USING THIS BROWSER]
if (isset($_SESSION['username']) && $_SESSION['username'] != "") {
  session_unset();
  session_destroy();
}

/// [CONNECT THE LOGIN CONTROLLER]
require_once('../controller/login_controller.php');
$controllers = new LoginController();

/// [IF LOGIN, IT CALLS LOGIN METHOD FROM THE CONTROLLER]
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $controllers->authUserLogin();
}

?>
<DOCTYPE html>
  <html>

  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, target-densitydpi=medium-dpi" />
    <meta name="description" content="Tag Shopping Mall">
    <meta name="keyword" content="Tag Shopping Mall, Danbi Lee, Marcus Shim, Jihwan Jeong">
    <title>Tag Shopping Mall</title>
    <link rel="icon" href="" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../static/js/includeHTML.js"></script>
    <link rel="stylesheet" href="../styles/index.css?after">
    <link rel="stylesheet" href="../styles/login.css?after">
    <script>
      window.addEventListener("load", function(e) {
          if (window.location.href.indexOf("login_failure") > -1) {
            let modal = new bootstrap.Modal(document.getElementById('loginFailureModal'));
            modal.show();
          }
      });
    </script>
  </head>

  <body>
    <nav include-html="../static/html/nav.html"></nav>
    
    <div id="loginContainer" class="container-fluid">
      <div class="d-flex align-items-center" style="min-height:calc(100vh - 254px);">
        <div class="col-md-6 mx-auto mt-5 ">
          <div class="d-flex justify-content-center">
            <p class="fw-bold fs-4">LOGIN</p>
          </div>
          <form class="form-horizontal" method="post" autocomplete="off">
            <div class="card-body">
              <div class="form-group col-12 mx-auto mb-4">
                <label for="inputId" class="fw-bolder text-muted mb-2">아이디</label>
                <input type="text" class="form-control" placeholder="아이디를 입력하세요." id="usernameInput" name="usernameInput" style="font-size: 16px;" pattern="^[A-Za-z0-9]{4,}$" required>
              </div>
              <div class="form-group col-12 mx-auto mb-4">
                <label for="inputPassword" class="fw-bolder text-muted mb-2">비밀번호</label>
                <input type="password" class="form-control" placeholder="비밀번호를 입력하세요." id="pwdInput" name="pwdInput" style="font-size: 16px;" pattern="^.{8,}$" title="Password must contain at least 8 characters." required>
              </div>
              <br /><br />
              <div class="d-flex justify-content-center mb-5">
                <input type="submit" class="btn btn-primary" value="LOGIN" style="color: white;" />
              </div>
              <div class="d-flex justify-content-evenly col-12 mx-auto mt-5">
                <a href="forgotPassword.php" class="col-6 text-decoration-none text-secondary text-center">
                  <span class="fw-semibold">forgot password?</span>
                </a>
                <span class="border-end"></span>
                <a href="signup.php" class="col-6 text-decoration-none text-secondary text-center">
                  <span class="fw-semibold">Sign up</span>
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="loginFailureModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">로그인 오류 메시지</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>아이디 또는 비밀번호가 올바르지 않습니다. 다시 시도해주시기 바랍니다.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <footer include-html="../static/html/footer.html"></footer>
    <script>
      includeHTML(function () {});
    </script>
  </body>

  </html>