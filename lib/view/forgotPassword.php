<?php
  session_start();
?>
<!DOCTYPE html>
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
</head>

<body>
  <nav include-html="../static/html/nav.html"></nav>

  <div id="bodyContainer" class="container-fluid">
    <div class="d-flex align-items-center" style="min-height:calc(100vh - 260px);">
      <div class="col-md-6 mx-auto mt-5">
        <div class="d-flex justify-content-center">
          <p class="fw-bold fs-4">FORGOT PASSWORD</p>
        </div>
        <form class="form-horizontal">
          <div class="card-body">
            <div class="form-group col-8 mx-auto mb-4">
              <label for="inputId" class="fw-bolder text-muted mb-2">ID</label>
              <input type="text" name="userName" class="form-control" id="inputId" placeholder="ID">
            </div>
            <div class="form-group col-8 mx-auto mb-4">
              <label for="inputFullName" class="fw-bolder text-muted mb-2">Name</label>
              <input type="text" name="userFullName" class="form-control" id="inputFullName" placeholder="Name">
            </div>
            <div class="form-group col-8 mx-auto mb-4">
              <label for="inputEmail" class="fw-bolder text-muted mb-2">Name</label>
              <input type="email" name="userEmail" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="d-flex justify-content-center mb-5">
              <button type="submit" class="btn btn-success col-8 fw-bold">SUBMIT</button>
            </div>
            <div class="d-flex justify-content-evenly col-8 mx-auto mt-5">
              <a href="login.html" class="text-decoration-none text-secondary">
                <span class="fw-semibold">Login</span>
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer include-html="../static/html/footer.html"></footer>

  <script>
    includeHTML(function () {});
  </script>
</body>

</html>