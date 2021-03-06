<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PG 1/60</title>
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
        <!--Perfect Grade-->
        <div class="preview-pg">
            <div class="preview-header">
                <div>
                    <img src="../../resources/images/gundam/grade-logo/PGlogo.jpg" alt="">
                </div>
                <div>
                    <a class="p-text" href="entries/PG/shop-pg.php">Perfect Grade 1/60</a>
                </div>
                <div>
                    <a class="p-question" href="#explain-pg">
                        <i class="fas fa-question"></i>
                    </a>
                </div>
            </div>

            <!--Perfect Grade Catalog-->
            <div class="product-catalog">
                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individual/pg-strike.php">
                            <img src="../../resources/images/gundam/boxart/PG/PG-Strike-Freedom-Gundam-Boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individual/pg-strike.php">PG Strike Freedom</a>
                    </div>
                    <div class="price">6.500.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individual/pg-perfect.php">
                            <img src="../../resources/images/gundam/boxart/PG/pg-perfect-strike-gundam-pa_900x900.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individual/pg-perfect.php">PG Perfect Strike</a>
                    </div>
                    <div class="price">5.600.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individual/pg-seven.php">
                            <img src="../../resources/images/gundam/boxart/PG/PG_00Gundam_seven_sword_G-box_art_900x900.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individual/pg-seven.php">PG 00 Seven Sword</a>
                    </div>
                    <div class="price">6.300.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individual/pg-exia.php">
                            <img src="../../resources/images/gundam/boxart/PG/pg-gundam-exia-lighting-model_1_900x900.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individual/pg-exia.php">PG Exia (Lighting Ver.)</a>
                    </div>
                    <div class="price">10.300.000 VNĐ</div>
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