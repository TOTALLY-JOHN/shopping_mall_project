<?php
  session_start();

  //! [CONNECT THE CONTROLLER]
  require_once('../controller/signup_controller.php');
  $controllers = new SignupController();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controllers->registerUser();
  }

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, target-densitydpi=medium-dpi" />
    <meta name="description" content="Tag Shopping Mall">
    <meta name="keyword" content="Tag Shopping Mall, Danbi Lee, Marcus Shim, Jihwan Jeong">
    <title>Sign Up</title>
    <link rel="icon" href="" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script src="../static/js/includeHTML.js"></script>
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/signup.css">
    <script>
      window.addEventListener("load", function(e) {
          if (window.location.href.indexOf("signup_failure") > -1) {
            alert("회원가입에 실패하였습니다.");
          }
      });
    </script>
</head>
<body>
  <?php 
    include 'user_menu_bar.php';
  ?>
  <nav include-html="../static/html/nav.html"></nav>
    
  <!-- <div id="bannerContainer" class="container-fluid py-5 text-center text-white fs-4">
    Sign Up
  </div><br> -->

  <div id="bodyContainer" class="container-fluid mx-auto">
    <div class="formDiv mx-auto py-5">
      <form class="form-group" method="post" autocomplete="off">
        <h2 class="formTitle"><b>
          Create Account
        </h2><br>

        <div class="form_group">
          <input type="text" id="uLastName" name="userLastName" placeholder="성"  class="form-control" required><br>
          <input type="text" id="uFirstName" name="userFirstName" placeholder="이름" class="form-control" required><br>
        </div>

        <div class="form_group">
          <table style="width:100%;">
            <tbody>
              <td>
                <input type="text" id="uid" name="userId" check_result="fail" placeholder="아이디" minlength="4" pattern="^([a-z0-9_]){6,50}$" class="form-control" required>
              </td>
              <td>
                <input type="button" id="overlap_button" class="btn btn-warning" onclick="id_overlap_check()" value="확인"/>
              </td>
            </tbody>
          </table>
          <img id="id_check_sucess" style="display: none;"><br />
        </div>

        <div class="form_group">
          <input type="password" id="pass1" onchange="check_pw()" name="pass1" value="" placeholder="비밀번호" minlength="8" pattern="^[a-zA-Z\\d`~!@#$%^&*()-_=+]{6,16}$" class="form-control" required><br>
        </div>

        <div class="form_group">
          <input type="password" id="pass2" onchange="check_pw()" name="pass2" placeholder="비밀번호 확인" minlength="8" pattern="^[a-zA-Z\\d`~!@#$%^&*()-_=+]{6,16}$" class="form-control" required>&nbsp;<span id="check"></span>
        </div>
        
        <div class="form_group">
          <input type="email" id="uemail" name="userEmail" placeholder="이메일" class="form-control" required><br>
        </div>

        <div class="form_group">
          <input type="tel" id="uphone#" name="userPhone" placeholder="휴대폰번호" class="form-control" required><br>
        </div>
            
        <div class="address_group">
          <table style="width:100%;">
            <tbody>
              <td>
                <input type="text" id="sample3_postcode" name="postCode" placeholder="우편번호" class="form-control">
              </td>
              <td>
                <input type="button" id="ads_overlap_button" class="btn btn-warning" onclick="sample3_execDaumPostcode()" value="검색">
              </td>
            </tbody>
          </table>
          <br />
          
          <input type="text" id="sample3_address" name="address" placeholder="주소" class="form-control"><br>
          <input type="text" id="sample3_detailAddress" name="detailAddress" placeholder="상세주소" class="form-control"><br>
          <!-- <input type="text" id="sample3_extraAddress" placeholder="Remark" class="form-control"> -->

          <div id="wrap" style="display:none;border:1px solid;width:331px;height:300px;margin:5px 0;position:relative">
          <img src="//t1.daumcdn.net/postcode/resource/images/close.png" id="btnFoldWrap" style="cursor:pointer;position:absolute;right:0px;top:-1px;z-index:1" onclick="foldDaumPostcode()" alt="접기 버튼">
          </div><br><br>
        </div>

        <div class="form_group">
          <input type="checkbox" id="checkbox" name="checkbox" required>
          <label for="agree-term" class="label-agree-term">
            <span><b>
                <span></span>
            </span>
            I agree all statements in
            <a href="#" class="term-service">Terms of Service</a>
          </label><br><br>
        </div>

        <div class="form_group">
          <button type="submit" id="signup" name="signup" class="btn btn-primary">Sign Up</button>
        </div>

      </form>
    </div>
    <p class="loginhere"><b>
      Have already an account?
      <a href="#" class="loginhere-link">Login Here</a>
    </p>
  </div>
  
  <footer include-html="../static/html/footer.html"></footer>
  
  <script>
    includeHTML(function () {});
    
    /* Verify User ID */
    function id_overlap_check() {
      if($('#uid').val() == ""){
        alert("아이디를 입력해주세요.")
        $('#uid').focus();
        return;
      }

      // $('#uid').change(function () {
      //   $('#id_check_sucess').hide();
      //   $('.id_overlap_button').show();
      //   $('#uid').attr("check_result", "fail");
      // })

      // if ($('#uid').attr("check_result") == "fail"){
      //   alert("Please verify User ID.");
      //   $('#uid').focus();
      //   return false;
      // }

      id_overlap_input = $('#uid');
      $.ajax({
        url: "../model/signup_id_check.php",
        type: "POST",
        data: {
          username: $('#uid').val()
        },
        dataType: 'text',
        success: function (data) {
          if (data == "fail") {
            alert("이미 사용중인 아이디입니다.")
            id_overlap_input.focus();
            return;
          } else {
            alert("사용 가능한 아이디입니다.");
            $('#uid').attr("check_result", "success");
            return;
          }
        },
        error: function(request, status, error) {
				//에러
				console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
			  }
      });
    }


    /* Password & Confirm Password JS */
    function check_pw(){
      var pw = document.getElementById('pass1').value;
      var SC = ["!","@","#","$","%"];
      var check_SC = 0;

      if(pw.length < 6 || pw.length>16){
          window.alert('Password must be 6 - 16 characters and contain special characters.');
          document.getElementById('pass1').value='';
      }
      for(var i=0;i<SC.length;i++){
          if(pw.indexOf(SC[i]) != -1){
              check_SC = 1;
          }
      }
      if(check_SC == 0){
          window.alert('Please include special characters (!,@,#,$,%).')
          document.getElementById('pass1').value='';
      }
      if(document.getElementById('pass1').value !='' && document.getElementById('pass2').value!=''){
          if(document.getElementById('pass1').value==document.getElementById('pass2').value){
              document.getElementById('check').innerHTML='Password is matching.'
              document.getElementById('check').style.color='blue';
          }
          else{
              document.getElementById('check').innerHTML='Password is not matching.';
              document.getElementById('check').style.color='red';
          }
      }
  }

  /* Address JS */
  // 우편번호 찾기 찾기 화면을 넣을 element
  var element_wrap = document.getElementById('wrap');

  function foldDaumPostcode() {
  // iframe을 넣은 element를 안보이게 한다.
  element_wrap.style.display = 'none';
  }

  function sample3_execDaumPostcode() {
  // 현재 scroll 위치를 저장해놓는다.
  var currentScroll = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
  new daum.Postcode({
  oncomplete: function(data) {
      // 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

      // 각 주소의 노출 규칙에 따라 주소를 조합한다.
      // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
      var addr = ''; // 주소 변수
      var extraAddr = ''; // 참고항목 변수

      //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
      if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
          addr = data.roadAddress;
      } else { // 사용자가 지번 주소를 선택했을 경우(J)
          addr = data.jibunAddress;
      }

      // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
      if(data.userSelectedType === 'R'){
          // 법정동명이 있을 경우 추가한다. (법정리는 제외)
          // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
          if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
              extraAddr += data.bname;
          }
          // 건물명이 있고, 공동주택일 경우 추가한다.
          if(data.buildingName !== '' && data.apartment === 'Y'){
              extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
          }
          // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
          if(extraAddr !== ''){
              extraAddr = ' (' + extraAddr + ')';
          }
          // 조합된 참고항목을 해당 필드에 넣는다.
          // document.getElementById("sample3_extraAddress").value = extraAddr;
      
      } else {
          // document.getElementById("sample3_extraAddress").value = '';
      }

      // 우편번호와 주소 정보를 해당 필드에 넣는다.
      document.getElementById('sample3_postcode').value = data.zonecode;
      document.getElementById("sample3_address").value = addr;
      // 커서를 상세주소 필드로 이동한다.
      document.getElementById("sample3_detailAddress").focus();

      // iframe을 넣은 element를 안보이게 한다.
      // (autoClose:false 기능을 이용한다면, 아래 코드를 제거해야 화면에서 사라지지 않는다.)
      element_wrap.style.display = 'none';

      // 우편번호 찾기 화면이 보이기 이전으로 scroll 위치를 되돌린다.
      document.body.scrollTop = currentScroll;
  },
  // 우편번호 찾기 화면 크기가 조정되었을때 실행할 코드를 작성하는 부분. iframe을 넣은 element의 높이값을 조정한다.
  onresize : function(size) {
      element_wrap.style.height = size.height+'px';
  },
  width : '100%',
  height : '100%'
  }).embed(element_wrap);

  // iframe을 넣은 element를 보이게 한다.
  element_wrap.style.display = 'block';
  }

  </script>
  
</body>
</html>