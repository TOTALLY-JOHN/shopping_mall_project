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
        <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
        <script src="../static/js/includeHTML.js"></script>
        <link rel="stylesheet" href="../styles/index.css?after">
        <link rel="stylesheet" href="../styles/search_result.css?after">
    </head>
<body>
    <?php 
      include 'user_menu_bar.php';
    ?>
    <nav include-html="../static/html/nav.html"></nav>
    <div id="bannerContainer" class="container-fluid py-5 text-center text-white fs-4">
        SEARCH RESULT
    </div>

    <!-- Search Box --> 
    <div id="search-box" class="input-group">
        <input id="myInput" type="search" class="form-control rounded" placeholder="Please Search Any Items!" 
        aria-label="Search" aria-describedby="search-addon" onkeydown="textSearch()"/>
        <button type="button" class="btn btn-outline-primary">search</button>
    </div>
                
    <div id="bodyContainer" class="container-fluid mt-5">
    <!-- FILL HERE! -->
        
        <div class="container">
            <div>
                <h2 onchange="calculateAmount()">5 Items Found!</h2>
            </div>   
            <ul id="myUL" class="list-group list-group-horizontal">
                <li><div class="list-group-item">
                    <article class="col-item">
                        <div class="photo">
                            <a href="#"> <img src="../images/main_image1.jpg" onclick="ItemMessage()" class="img-responsive" alt="Product Image" /> </a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price-details col-md-6">
                                    <p class="details">
                                        Out of Stock Now!
                                    </p>
                                    <h1>Cheap Clothes</h1>
                                    <span class="price-new">$110.00</span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div></li>
                <li><div class="list-group-item">
                    <article class="col-item">
                        <div class="photo">   
                            <a href="#"> <img src="../images/main_image2.jpg" onclick="ItemMessage()" class="img-responsive" alt="Product Image" /> </a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price-details col-md-6">
                                    <p class="details">
                                        Out of Stock Now!
                                    </p>
                                    <h1>Men's Suit</h1>
                                    <span class="price-new">$80.00</span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div></li>
                <li><div class="list-group-item">
                    <article class="col-item">
                        <div class="photo">   
                            <a href="#"> <img src="../images/main_image2.jpg" onclick="ItemMessage()" class="img-responsive" alt="Product Image" /> </a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price-details col-md-6">
                                    <p class="details">
                                        Out of Stock Now!
                                    </p>
                                    <h1>Men's Jacket</h1>
                                    <span class="price-new">$80.00</span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div></li>
                <li><div class="list-group-item">
                    <article class="col-item">
                        <div class="photo">   
                            <a href="#"> <img src="../images/main_image2.jpg" onclick="ItemMessage()" class="img-responsive" alt="Product Image" /> </a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price-details col-md-6">
                                    <p class="details">
                                        Out of Stock Now!
                                    </p>
                                    <h1>Women's Clothes</h1>
                                    <span class="price-new">$80.00</span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div></li>
                <li><div class="list-group-item">
                    <article class="col-item">
                        <div class="photo">   
                            <a href="#"> <img src="../images/main_image2.jpg" onclick="ItemMessage()" class="img-responsive" alt="Product Image" /> </a>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price-details col-md-6">
                                    <p class="details">
                                        Out of Stock Now!
                                    </p>
                                    <h1>Women's Outfit</h1>
                                    <span class="price-new">$80.00</span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div></li>
            </ul>           
    </div> 

    <nav aria-label="Page navigation example" class="page-nav">
        <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>

    <footer include-html="../static/html/footer.html"></footer>

    <script>
        includeHTML(function () {});

        function calculateAmount() {
            
        }

        function ItemMessage() {
            window.alert('Out Of Stock Now!') 

        }

        function textSearch() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('myInput');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName('li');

            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("article")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
                } else {
                li[i].style.display = "none";
                }  
            }
        }
    </script>
</body>
</html>
