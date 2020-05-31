<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HG 1/144</title>
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
        <!--High Grade-->
        <div class="preview-hg">
            <div class="preview-header">
                <div>
                    <img src="../../resources/images/gundam/grade-logo/HGlogo.jpg" alt="">
                </div>
                <div>
                    <a class="p-text" href="#cata-hg">High Grade 1/144</a>
                </div>
                <div>
                    <a class="p-question" href="#explain-hg">
                        <i class="fas fa-question"></i>
                    </a>
                </div>
            </div>
            <!--High Grade catalog 1st row-->
            <div class="product-catalog-row">
                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individuals/hg-strike-freedom.php">
                            <img src="../../resources/images/gundam/boxart/HG/HG-Strike-Freedom-Gundam-Boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individuals/hg-strike-freedom.php">HGCE Strike Freedom</a>
                    </div>
                    <div class="price">650.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individuals/hg-destiny-gundam.php">
                            <img src="../../resources/images/gundam/boxart/HG/hgce-destiny-gundam-boxart.JPG" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individuals/hg-destiny-gundam.php">HGCE Destiny</a>
                    </div>
                    <div class="price">630.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individuals/hg-infinite-justice-gundam.php">
                            <img src="../../resources/images/gundam/boxart/HG/hgce-infinite-justice-gundam-boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individuals/hg-infinite-justice-gundam.php">HGCE Infinite Justice</a>
                    </div>
                    <div class="price">660.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individuals/hg-force-impulse-gundam.php">
                            <img src="../../resources/images/gundam/boxart/HG/HGCE-Force-Impulse-Gundam-boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individuals/hg-force-impulse-gundam.php">HGCE Force Impulse</a>
                    </div>
                    <div class="price">550.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>
            </div>

            <!--Second Row-->
            <div class="product-catalog-row">
                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individuals/hg-aile-strike.php">
                            <img src="../../resources/images/gundam/boxart/HG/HGCE-Aile-Strike-Gundam-boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individuals/hg-aile-strike.php">HGCE Aile Strike</a>
                    </div>
                    <div class="price">500.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individuals/hg-windam.php">
                            <img src="../../resources/images/gundam/boxart/HG/hgce-windam-boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individuals/hg-windam.php">HGCE Windam</a>
                    </div>
                    <div class="price">500.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individuals/hg-narrative.php">
                            <img src="../../resources/images/gundam/boxart/HG/hguc-narrative-c-boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individuals/hg-narrative.php">HGUC Narrative Gundam C-Pack</a>
                    </div>
                    <div class="price">500.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individuals/hg-full-armour.php">
                            <img src="../../resources/images/gundam/boxart/HG/hguc-fa-unicorn-boxart.jpeg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individuals/hg-full-armour.php">HGUC FA Unicorn Gundam</a>
                    </div>
                    <div class="price">700.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>
            </div>

            <!--Third Row-->
            <div class="product-catalog-row">
                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individuals/hg-mkii.php">
                            <img src="../../resources/images/gundam/boxart/HG/hguc-gundam-mk2-titans-boxart.png" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individuals/hg-mkii.php">HGUC Gundam MkII(Titans)</a>
                    </div>
                    <div class="price">500.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individuals/hg-delta-kai.php">
                            <img src="../../resources/images/gundam/boxart/HG/hguc-delta-kai-boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individuals/hg-delta-kai.php">HGUC Delta Kai Gundam</a>
                    </div>
                    <div class="price">680.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individuals/hg-sinanju-stein.php">
                            <img src="../../resources/images/gundam/boxart/HG/hguc-sinanju-stein-boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individuals/hg-sinanju-stein.php">HGUC Sinanju Stein(Nar. ver)</a>
                    </div>
                    <div class="price">680.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="individuals/hg-hyaku-shiki.php">
                            <img src="../../resources/images/gundam/boxart/HG/hguc-hyaku-shiki-boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="individuals/hg-hyaku-shiki.php">HGUC Hyaku Shiki</a>
                    </div>
                    <div class="price">550.000 VNĐ</div>
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