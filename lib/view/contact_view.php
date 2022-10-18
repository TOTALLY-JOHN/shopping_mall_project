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
    <link rel="stylesheet" href="../styles/bbs_view.css?after">
  </head>
<body>
  <?php 
    include 'user_menu_bar.php';
  ?>
  <nav include-html="../static/html/nav.html"></nav>

  <div id="bannerContainer" class="container-fluid py-5 text-center text-white fs-4">
    게시판
  </div>

  <div id="bodyContainer" class="container-fluid">
    <table id="bbsTable" class="table">
      <tbody>
        <tr>
          <th width="1">게시글 번호</th>
          <td width="9">1</td>
        </tr>
        <tr>
          <th>게시글 제목</th>
          <td>테스트 게시물</td>
        </tr>
        <tr>
          <th>글쓴이</th>
          <td>Totally</td>
        </tr>
        <tr>
          <th>작성날짜</th>
          <td>2022-10-13</td>
        </tr>
        <tr>
          <th>내용</th>
          <td>테스트입니다.<br /><br /><br /><br /></td>
        </tr>
        <tr>
          <th>첨부파일</th>
          <td><a href='#'>File 1</a></td>
        </tr>
      </tbody>
    </table>

    <div id="button_group">
      <a id="listButton" href="" class="btn btn-primary">목록</a>
      <a id="modifyButton" href="" class="btn btn-info">수정</a>
      <a id="deleteButton" href="" class="btn btn-danger">삭제</a>
    </div>
    
  </div>

  <footer include-html="../static/html/footer.html"></footer>
  
  <script>
    includeHTML(function () {});
  </script>
</body>
</html>