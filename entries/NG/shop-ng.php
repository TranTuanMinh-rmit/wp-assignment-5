<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Grade</title>
    <link id='stylecss' type="text/css" rel="stylesheet" href="../../resources/scripts/style.css">
    <script src="https://kit.fontawesome.com/fc0ac1d284.js" crossorigin="anonymous"></script>
    <script src="../../resources/scripts/script.js" async></script>
</head>
<body>
    <div class="topheader">
        <!--Login function here-->
        <div class="login">
            <a href="">Login</a>
        </div>
        <!--Top header, for spacing and search-->
        <div class="search-container">
            <form action="/search_result.php" method="GET">
              <input id='search-input' style="width: 300px" type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    <div class="mainheader">
        <div class="logo">
            <a href="../../index.php">
                <img src="../../resources/images/wp-a5-logo.png" alt="" width="40%">
            </a>
        </div>
        <img src="../../resources/images/gundam-shop-background.jpg" alt="" width="100%" height="320px">
    </div>

    <!--Navigation, got both sticky and responsive. Doesn't work in conjuction.-->
    <div class="topnav" id="myTopnav">
        <a class="highgrade" href="../HG/shop-hg.php">HG 1/144</a>
        <a href="../RG/shop-rg.php">RG 1/144</a>
        <a href="../MG/shop-mg.php">MG 1/100</a>
        <a href="../PG/shop-pg.php">PG 1/60</a>
        <a href="../NG/shop-ng.php">No Grade</a>
        <a href="javascript:void(0);" class="icon" onclick="myResNavFunction()">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <!--Body of the shop-->
    <div class="shop">
        <!--No Grade-->
        <div class="preview-ng">
            <div class="preview-header">
                <div>
                    <img src="../../resources/images/gundam/grade-logo/Gunplalogo.png" alt="">
                </div>
                <div>
                    <a class="p-text" href="entries/NG/shop-ng.php">No Grade</a>
                </div>
                <div>
                    <a class="p-question" href="#explain-ng">
                        <i class="fas fa-question"></i>
                    </a>
                </div>
            </div>

            <!--No Grade Catalog-->
            <div class="product-catalog">
                <div class="product-vertical">
                    <div class="image-vertical">
                        <a href="individual/mb-strike.php">
                            <img src="../../resources/images/gundam/boxart/NG/MB-Strike-Strike-Freedom-Gundam.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individual/mb-strike.php">Metal Build Strike Freedom</a>
                    </div>
                    <div class="price">4.900.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-vertical">
                    <div class="image-vertical">
                        <a href="individual/mb-destiny.php">
                            <img src="../../resources/images/gundam/boxart/NG/MB-Destiny-Gundam-Boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individual/mb-destiny.php">Metal Build Destiny</a>
                    </div>
                    <div class="price">4.600.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-vertical">
                    <div class="image-vertical">
                        <a href="individual/hirm-god.php">
                            <img src="../../resources/images/gundam/boxart/NG/hirm-god-gundam_1_900x900.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individual/hirm-god.php">High Resolution God</a>
                    </div>
                    <div class="price">2.600.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-vertical">
                    <div class="image-vertical">
                        <a href="individual/hirm-astray-noir.php">
                            <img src="../../resources/images/gundam/boxart/NG/hi-res-model-gundam-astray-noir-pa_900x900.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individual/hirm-astray-noir.php">High Resolution Astray Noir</a>
                    </div>
                    <div class="price">3.800.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <div class="footer">
        <footer>
            <ul class="items">
                <li>
                    <h3>Email</h3>
                    <a href="#">s3804812@rmit.edu.vn</a><br>
                    <a href="#">s3855825@rmit.edu.vn</a>
                </li>
                <li>
                    <h3>Elsewhere</h3>
                    <ul class="icons">
                        <li>
                            <a href="https://github.com/TranTuanMinh-rmit/wp-assignment-5">
                                <i class="fab fa-github"></i>
                                <span class="label">GitHub</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-codepen"></i>
                                <span class="label">Codepen</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </footer>
    </div>
</body>
</html>