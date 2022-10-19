<?php
  session_start();

  //! [CONNECT THE CONTROLLER]
  require_once('../controller/contact_controller.php');
  $controllers = new ContactController();
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
    <link rel="stylesheet" href="../styles/bbs_write.css?after">
  </head>
<body>
  <?php 
    include 'user_menu_bar.php';
  ?>
  <nav include-html="../static/html/nav.html"></nav>

  <div id="bannerContainer" class="container-fluid py-5 text-center text-white fs-4">
    고객센터 게시판
  </div><br>

    <div id="bodyContainer" class="container-fluid">
    <!-- FILL HERE! -->
    <h1 class="text-center">글쓰기</h1>
        <div id="boardform-div" class="mt-5">
            <form action="" method="post" autocomplete="off">
                <br>
                <label>제목</label><br>
                <input type="text" id="form-title" class="form-control mt-3" name="title" placeholder="Fill Up The Title" required><br><br>
                <label>이름</label><br>
                <input type="text" id="form-name" class="form-control mt-3" name="name" placeholder="Fill Up The Name" required><br><br>

                <label>내용</label>
                <textarea id="form-content" class="form-control mt-3" name="content" cols="30" rows="10" placeholder="Fill Up The Content" required></textarea><br><br>

                <label>TAG</label><br>
                <input type="text" id="form-tag" class="form-control mt-3" name="tag" placeholder="Fill Up The Tag" required>
                <div id="boardform-button" class="text-center mt-5">
                  <button class="btn btn-info px-5 py-3 mx-2">목록</button>
                  <input type="submit" class="btn btn-primary px-5 py-3 mx-2" value="글쓰기">
              </div>
            </form><br>
        </div>
    </div>

    <footer include-html="../static/html/footer.html"></footer>
  
    <script>
      includeHTML(function () {});
    </script>
</body>
</html>