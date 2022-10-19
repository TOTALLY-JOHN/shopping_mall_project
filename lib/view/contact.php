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
  <link rel="stylesheet" href="../styles/index.css">
</head>

<body>
  <?php 
    include 'user_menu_bar.php';
  ?>
  <nav include-html="../static/html/nav.html"></nav>
  
  <div id="bannerContainer" class="container-fluid py-5 text-center text-white fs-4">
    고객센터 게시판
  </div>

  <div id="bodyContainer" class="container-fluid" style="min-height:calc(100vh - 260px);">
    <div class="d-flex justify-content-between mt-3">
      <div class="">
        <a type="button" href="contact_write.php" class="btn btn-primary">글쓰기</a>
      </div>
      <div class="">
        <div class="input-group row">
          <select class="form-select col-3" id="inputGroupSelect04" aria-label="Example select with button addon">
            <option selected class="w-10">All</option>
            <option value="1">Title</option>
            <option value="2">Content</option>
            <option value="3">Writer</option>
          </select>

          <input type="text" placeholder="Search" name="keyword" class="col-6" style="border: 1px solid #ced4da;">

          <button class="btn btn-outline-secondary col-3" type="button">Search</button>
        </div>
      </div>
    </div>

    <table class="table table-sm table-hover mt-5">
      <thead>
        <tr class="text-center">
          <th class="col-md-1">번호</th>
          <th class="col-md-6">제목</th>
          <th class="text-left col-md-2">작성자</th>
          <th class="col-md-1">등록날짜</th>
          <th class="col-md-1">조회수</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="5" class="text-center text-bold">
            <strong>해당 내용이 없습니다.</strong>
          </td>
        </tr>
        <tr class="">
          <td class="text-center align-middle">1</td>
          <td class="col-4 align-middle" style="cursor: pointer;">
            <a href="contact_view.php?bbsId=4"><span class="text-bold">제목입니다 [1]</span></a>
          </td>
          <td class="text-left">abcs1234</td>
          <td class="text-center align-middle">
            2022-09-10
          </td>
          <td class="text-center align-middle">10</td>
        </tr>

        <tr class="">
          <td class="text-center align-middle">1</td>
          <td class="col-4 align-middle" style="cursor: pointer;">
            <a href="contact_view.php?bbsId=3"><span class="text-bold">제목입니다 [2]</span></a>
          </td>
          <td class="text-left">abcs1234</td>
          <td class="text-center align-middle">
            2022-09-09
          </td>
          <td class="text-center align-middle">10</td>
        </tr>

        <tr class="">
          <td class="text-center align-middle">1</td>
          <td class="col-4 align-middle" style="cursor: pointer;">
            <a href="contact_view.php?bbsId=2"><span class="text-bold">제목입니다 [3]</span></a>
          </td>
          <td class="text-left">abcs123</td>
          <td class="text-center align-middle">
            2022-09-08
          </td>
          <td class="text-center align-middle">10</td>
        </tr>

        </tr>
        <tr class="">
          <td class="text-center align-middle">1</td>
          <td class="col-4 align-middle" style="cursor: pointer;">
            <a href="contact_view.php?bbsId=1"><span class="text-bold">제목입니다 [4]</span></a>
          </td>
          <td class="text-left">abcs1234789</td>
          <td class="text-center align-middle">
            2022-09-07
          </td>
          <td class="text-center align-middle">10</td>
        </tr>
      </tbody>
    </table>
  </div>

  <footer include-html="../static/html/footer.html"></footer>
  
  <script>
    includeHTML(function () {});
  </script>
</body>

</html>