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
        주문한 상품 관리 및 프로필 설정
    </div>

    <div id="bodyContainer" class="container-fluid mt-5">
        <!-- FILL HERE! -->
        
        <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="rounded">
                    <div class="table-responsive table-borderless">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </th>
                                    <th>상품 번호</th>
                                    <th>상품명</th>
                                    <th>배송상태</th>
                                    <th>금액</th>
                                    <th>구입시간</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                <tr class="cell-1">
                                    <td class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </td>
                                    <td>#SO-13487</td>
                                    <td>Gasper Antunes</td>
                                    <td><span class="badge badge-success">Fullfilled</span></td>
                                    <td>$2674.00</td>
                                    <td>Today</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                                <tr class="cell-1">
                                    <td class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </td>
                                    <td>#SO-13453</td>
                                    <td>Aartsen van</td>
                                    <td><span class="badge badge-info">Confirmed</span></td>
                                    <td>$3454.00</td>
                                    <td>Yesterday</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                                <tr class="cell-1">
                                    <td class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </td>
                                    <td>#SO-13498</td>
                                    <td>Trashes Habard</td>
                                    <td><span class="badge badge-danger">Partially shipped</span></td>
                                    <td>$6274.00</td>
                                    <td>May 12,2020</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                                <tr class="cell-1">
                                    <td class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </td>
                                    <td>#SO-16499</td>
                                    <td>Samban Hubart</td>
                                    <td><span class="badge badge-success">Fullfilled</span></td>
                                    <td>$6375.00</td>
                                    <td>May 11,2020</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer include-html="../static/html/footer.html"></footer>
    
    <script>
        includeHTML(function () {});
        $(document).ready(function(){

        $('.toggle-btn').click(function() {
        $(this).toggleClass('active').siblings().removeClass('active');
        });

        });
    </script>
</body>
</html>