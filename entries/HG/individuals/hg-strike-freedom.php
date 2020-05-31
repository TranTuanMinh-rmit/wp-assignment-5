<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HG Strike Freedom</title>
    <link id='stylecss' type="text/css" rel="stylesheet" href="../../../resources/scripts/style.css">
    <script src="https://kit.fontawesome.com/fc0ac1d284.js" crossorigin="anonymous"></script>
    <script src="../../../resources/scripts/script.js" async></script>
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
            <a href="../../../index.php">
                <img src="../../../resources/images/wp-a5-logo.png" alt="" width="40%">
            </a>
        </div>
        <img src="../../../resources/images/gundam-shop-background.jpg" alt="" width="100%" height="320px">
    </div>

    <!--Navigation, got both sticky and responsive. Doesn't work in conjuction.-->
    <div class="topnav" id="myTopnav">
        <a class="highgrade" href="../../HG/shop-hg.php">HG 1/144</a>
        <a href="../../RG/shop-rg.php">RG 1/144</a>
        <a href="../../MG/shop-mg.php">MG 1/100</a>
        <a href="../../PG/shop-pg.php">PG 1/60</a>
        <a href="../../NG/shop-ng.php">No Grade</a>
        <a href="javascript:void(0);" class="icon" onclick="myResNavFunction()">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <!--Body of the shop-->
    <div class="shop">
        <div class="title">
            <h1>Strike Freedom Gundam</h1>
        </div>

        <div class="entry-body">
            <div class="pictures-display">
                <div class="pictures-display-pri">
                    <img class="myImg" src="../../../resources/images/gundam/boxart/HG/HG-Strike-Freedom-Gundam-Boxart.jpg" alt="HGCE Strike Freedom" width="85%">
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                    </div>
                </div>

                <div class="pictures-display-sec">
                    <img class="myImg" src="../../../resources/images/gundam/boxart/HG/Review art/hgce-strike-freedom-gundam-revive (1).jpg" alt="HGCE Strike Freedom" width="16%" height="15%">
                    <img class="myImg" src="../../../resources/images/gundam/boxart/HG/Review art/hgce-strike-freedom-gundam-revive (2).jpg" alt="HGCE Strike Freedom" width="16%" height="15%">
                    <img class="myImg" src="../../../resources/images/gundam/boxart/HG/Review art/hgce-strike-freedom-gundam-revive (3).jpg" alt="HGCE Strike Freedom" width="16%" height="15%">
                    <img class="myImg" src="../../../resources/images/gundam/boxart/HG/Review art/hgce-strike-freedom-gundam-revive (4).jpg" alt="HGCE Strike Freedom" width="16%" height="15%">
                    <img class="myImg" src="../../../resources/images/gundam/boxart/HG/Review art/hgce-strike-freedom-gundam-revive (5).jpg" alt="HGCE Strike Freedom" width="16%" height="15%">
                </div>
            </div>

            <div class="display-info">
                <div class="info-header">
                    <p class="scale-era">1/144th scale High Grade Cosmic Era</p>
                    <p class="gunpla-name">Strike Freedom Gundam (Revive ver.)</p>
                </div>

                <div class="info-content">
                    <div class="info-price">
                        <a class="info-cost"><span>Price: đ </span>650.000</a>
                    </div>

                    <form action="" method="POST">
                        <div class="add-to-cart" name="addToCart">
                            <input type="number" value="Add to Cart" min="1" max="10" value="1">
                            <input type="button" value="Add to Cart" onclick="" class="button">
                        </div>
                    </form>  <input type="button" value="Add to Cart" onclick="" class="button">
                        </div>
                    </form>
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