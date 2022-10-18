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
  <?php 
      include 'user_menu_bar.php';
  ?>
  <nav include-html="../static/html/nav.html"></nav>

  <div id="bannerContainer" class="container-fluid py-5 text-center text-white fs-4">
    관리자 페이지
  </div>

  <div id="bodyContainer" class="container-fluid mt-5">
    <ul class="nav nav-pills nav-fill">
      <li class="nav-item">
          <a href="#manage_shop" class="nav-link active" data-bs-toggle="tab">상점관리</a>
      </li>
      <li class="nav-item">
          <a href="#manage_items" class="nav-link" data-bs-toggle="tab">상품관리</a>
      </li>
      <li class="nav-item">
          <a href="#manage_orders" class="nav-link" data-bs-toggle="tab">주문관리</a>
      </li>
      <li class="nav-item">
        <a href="#manage_customers" class="nav-link" data-bs-toggle="tab">고객관리</a>
      </li>
      <li class="nav-item">
          <a href="#manage_bbs" class="nav-link" data-bs-toggle="tab">게시판관리</a>
      </li>
  </ul>
  <div class="tab-content">
      <!--
        
        ? 상점 관리
      
        TODO: 상점 관리 업데이트

      -->
      <div class="tab-pane fade show active" id="manage_shop">
        <div class="mt-5">
          <h1 class="text-center">상점 관리</h1>
          <table class="table table-striped mt-5">
            <thead>
              <tr>
                <th>관리사항</th>
                <th>세부정보</th>
                <th>작업</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>결제관리</td>
                <td>신용카드, 체크카드, 네이버페이, 카카오페이, 무통장입금</td>
                <td>
                  <button class="btn btn-primary">추가</button>
                  <button class="btn btn-success">수정</button>
                  <button class="btn btn-danger">삭제</button>
                </td>
              </tr>
              <tr>
                <td>배송관리</td>
                <td>일반배송, 로켓배송</td>
                <td>
                  <button class="btn btn-primary">추가</button>
                  <button class="btn btn-success">수정</button>
                  <button class="btn btn-danger">삭제</button>
                </td>
              </tr>
              <tr>
                <td>보안관리</td>
                <td>비밀번호패턴설정</td>
                <td>
                  <button class="btn btn-primary">추가</button>
                  <button class="btn btn-success">수정</button>
                  <button class="btn btn-danger">삭제</button>
                </td>
              </tr>
              <tr>
                <td>외부서비스</td>
                <td>네이버 로그인, 카카오 로그인, 구글 로그인</td>
                <td>
                  <button class="btn btn-primary">추가</button>
                  <button class="btn btn-success">수정</button>
                  <button class="btn btn-danger">삭제</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--
        
        ? 상품 관리
      
        TODO: 상품 관리 업데이트

      -->
      <div class="tab-pane fade" id="manage_items">
        <div class="mt-5">
          <h1 class="text-center">상품 관리</h1>
          <table class="table table-striped mt-5">
            <thead>
              <tr>
                <th>상품</th>
                <th>상품정보</th>
                <th>판매가격</th>
                <th>작업</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>상품1</td>
                <td>
                  <img src="https://picsum.photos/id/1/300/300" style="width:100px;">
                  &nbsp;
                  상품1 설명입니다.
                </td>
                <td>49,900원</td>
                <td>
                  <button class="btn btn-primary">추가</button>
                  <button class="btn btn-success">수정</button>
                  <button class="btn btn-danger">삭제</button>
                </td>
              </tr>
              <tr>
                <td>상품2</td>
                <td>
                  <img src="https://picsum.photos/id/32/300/300" style="width:100px;">
                  &nbsp;
                  상품2 설명입니다.
                </td>
                <td>69,900원</td>
                <td>
                  <button class="btn btn-primary">추가</button>
                  <button class="btn btn-success">수정</button>
                  <button class="btn btn-danger">삭제</button>
                </td>
              </tr>
              <tr>
                <td>상품3</td>
                <td>
                  <img src="https://picsum.photos/id/63/300/300" style="width:100px;">
                  &nbsp;
                  상품3 설명입니다.
                </td>
                <td>99,900원</td>
                <td>
                  <button class="btn btn-primary">추가</button>
                  <button class="btn btn-success">수정</button>
                  <button class="btn btn-danger">삭제</button>
                </td>
              </tr>
              <tr>
                <td>상품4</td>
                <td>
                  <img src="https://picsum.photos/id/94/300/300" style="width:100px;">
                  &nbsp;
                  상품4 설명입니다.
                </td>
                <td>129,900원</td>
                <td>
                  <button class="btn btn-primary">추가</button>
                  <button class="btn btn-success">수정</button>
                  <button class="btn btn-danger">삭제</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--
        
        ? 주문 관리
      
        TODO: 주문 관리 업데이트

      -->
      <div class="tab-pane fade" id="manage_orders">
          <div class="mt-5">
            <h1 class="text-center">주문 관리</h1>
            <table class="table table-striped mt-5">
              <thead>
                <tr>
                  <th>주문번호</th>
                  <th>주문상품정보</th>
                  <th>주문고객</th>
                  <th>작업</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>20220909-12234567012932</td>
                  <td>
                    <img src="https://picsum.photos/id/1/300/300" style="width:100px;">
                    &nbsp;
                    상품1
                  </td>
                  <td>test123(홍길동)</td>
                  <td>
                    <button class="btn btn-primary">상태 수정</button>
                    <button class="btn btn-success">환불/반품</button>
                    <button class="btn btn-danger">삭제</button>
                  </td>
                </tr>
                <tr>
                  <td>20220909-1223238582337</td>
                  <td>
                    <img src="https://picsum.photos/id/32/300/300" style="width:100px;">
                    &nbsp;
                    상품2
                  </td>
                  <td>test124(김성택)</td>
                  <td>
                    <button class="btn btn-primary">상태 수정</button>
                    <button class="btn btn-success">환불/반품</button>
                    <button class="btn btn-danger">삭제</button>
                  </td>
                </tr>
                <tr>
                  <td>20220909-1223238586582</td>
                  <td>
                    <img src="https://picsum.photos/id/63/300/300" style="width:100px;">
                    &nbsp;
                    상품3
                  </td>
                  <td>test125(이명석)</td>
                  <td>
                    <button class="btn btn-primary">상태 수정</button>
                    <button class="btn btn-success">환불/반품</button>
                    <button class="btn btn-danger">삭제</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
      <!--
        
        ? 고객 관리
      
        TODO: 고객 관리 업데이트

      -->
      <div class="tab-pane fade" id="manage_customers">
          <div class="mt-5">
            <h1 class="text-center">고객 관리</h1>
            <table class="table table-striped mt-5">
              <thead>
                <tr>
                  <th>고객식별번호</th>
                  <th>아이디</th>
                  <th>이메일</th>
                  <th>이름</th>
                  <th>잠금상태</th>
                  <th>작업</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>test123</td>
                  <td>test123@gmail.com</td>
                  <td>홍길동</td>
                  <td>활성</td>
                  <td>
                    <button class="btn btn-success">수정</button>
                    <button class="btn btn-danger">삭제</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>test124</td>
                  <td>test124@gmail.com</td>
                  <td>김성택</td>
                  <td>활성</td>
                  <td>
                    <button class="btn btn-success">수정</button>
                    <button class="btn btn-danger">삭제</button>
                  </td>
                </tr>
                <td>3</td>
                  <td>test125</td>
                  <td>test125@gmail.com</td>
                  <td>이명석</td>
                  <td>활성</td>
                  <td>
                    <button class="btn btn-success">수정</button>
                    <button class="btn btn-danger">삭제</button>
                  </td>
              </tbody>
            </table>
          </div>
      </div>
      <!--
        
        ? 게시판 관리
      
        TODO: 게시판 관리 업데이트

      -->
      <div class="tab-pane fade" id="manage_bbs">
          <div class="mt-5">
            <h1 class="text-center">게시판 관리</h1>
            
          </div>
      </div>
  </div>

  <footer include-html="../static/html/footer.html"></footer>

  <script>
      includeHTML(function () {});
  </script>
</body>

</html>