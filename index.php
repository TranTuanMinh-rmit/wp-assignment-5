<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gundam Shop</title>
    <link id='stylecss' type="text/css" rel="stylesheet" href="resources/scripts/style.css">
    <script src="https://kit.fontawesome.com/fc0ac1d284.js" crossorigin="anonymous"></script>
    <script src="resources/scripts/script.js" async></script>
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
              <input class="search" id='search-input' style="width: 300px" type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    <div class="mainheader">
        <div class="logo">
            <a href="index.php">
                <img src="resources/images/wp-a5-logo.png" alt="" width="40%">
            </a>
        </div>
        <img src="resources/images/gundam-shop-background.jpg" alt="" width="100%" height="320px">
    </div>

    <!--Navigation, got both sticky and responsive. Doesn't work in conjuction.-->
    <div class="topnav" id="myTopnav">
        <a class="highgrade" href="entries/HG/shop-hg.php">HG 1/144</a>
        <a href="entries/RG/shop-rg.php">RG 1/144</a>
        <a href="entries/MG/shop-mg.php">MG 1/100</a>
        <a href="entries/PG/shop-pg.php">PG 1/60</a>
        <a href="entries/NG/shop-ng.php">No Grade</a>
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
                    <img src="resources/images/gundam/grade-logo/HGlogo.jpg" alt="">
                </div>
                <div>
                    <a class="p-text" href="entries/HG/shop-hg.php">High Grade 1/144</a>
                </div>
                <div>
                    <a class="p-question" href="#explain-hg">
                        <i class="fas fa-question"></i>
                    </a>
                </div>
            </div>
            <!--High Grade catalog-->
            <div class="product-catalog">
                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="entries/HG/individuals/hg-strike-freedom.php">
                            <img src="resources/images/gundam/boxart/HG/HG-Strike-Freedom-Gundam-Boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/HG/individuals/hg-strike-freedom.php">HGCE Strike Freedom</a>
                    </div>
                    <div class="price">650.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="entries/HG/individuals/hg-destiny-gundam.php">
                            <img src="resources/images/gundam/boxart/HG/hgce-destiny-gundam-boxart.JPG" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/HG/individuals/hg-destiny-gundam.php">HGCE Destiny</a>
                    </div>
                    <div class="price">630.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="entries/HG/individuals/hg-infinite-justice-gundam.php">
                            <img src="resources/images/gundam/boxart/HG/hgce-infinite-justice-gundam-boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/HG/individuals/hg-infinite-justice-gundam.php">HGCE Infinite Justice</a>
                    </div>
                    <div class="price">660.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="entries/HG/individuals/hg-force-impulse-gundam.php">
                            <img src="resources/images/gundam/boxart/HG/HGCE-Force-Impulse-Gundam-boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/HG/individuals/hg-force-impulse-gundam.php">HGCE Force Impulse</a>
                    </div>
                    <div class="price">550.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>
            </div>
        </div>

        <!--Real Grade-->
        <div class="preview-rg">
            <div class="preview-header">
                <div>
                    <img src="resources/images/gundam/grade-logo/RGlogo.jpg" alt="">
                </div>
                <div>
                    <a class="p-text" href="entries/RG/shop-rg.php">Real Grade 1/144</a>
                </div>
                <div>
                    <a class="p-question" href="#explain-rg">
                        <i class="fas fa-question"></i>
                    </a>
                </div>
            </div>

            <!--Real Grade Catalog-->
            <div class="product-catalog">
                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="entries/RG/individual/rg-strike.php">
                            <img src="resources/images/gundam/boxart/RG/RG_Strike_Freedom_Gundam_Boxart.png" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/RG/individual/rg-strike.php">RG Strike Freedom</a>
                    </div>
                    <div class="price">680.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="entries/RG/individual/rg-full.php">
                            <img src="resources/images/gundam/boxart/RG/RG-Full-burnern.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/RG/individual/rg-full.php">RG Gundam Full Burnern</a>
                    </div>
                    <div class="price">650.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="entries/RG/individual/rg-impulse.php">
                            <img src="resources/images/gundam/boxart/RG/rg-force-impulse-gundam.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/RG/individual/rg-impulse.php">RG Force Impulse</a>
                    </div>
                    <div class="price">680.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="entries/RG/individual/rg-nu.php">
                            <img src="resources/images/gundam/boxart/RG/rg-rx-93-nu-gundam.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/RG/individual/rg-nu.php">RG Nu Gundam</a>
                    </div>
                    <div class="price">920.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>
            </div>
        </div>

        <!--Master Grade-->
        <div class="preview-mg">
            <div class="preview-header">
                <div>
                    <img src="resources/images/gundam/grade-logo/MGlogo.jpg" alt="">
                </div>
                <div>
                    <a class="p-text" href="entries/MG/shop-mg.php">Master Grade 1/100</a>
                </div>
                <div>
                    <a class="p-question" href="#explain-mg">
                        <i class="fas fa-question"></i>
                    </a>
                </div>
            </div>

            <!--Master Grade Catalog-->
            <div class="product-catalog">
                <div class="product-vertical">
                    <div class="image-vertical">
                        <a href="entries/MG/individual/mg-strike.php">
                            <img src="resources/images/gundam/boxart/MG/MG-Strike-Freedom-Gundam-Boxart.png" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/MG/individual/mg-strike.php">MG Strike Freedom</a>
                    </div>
                    <div class="price">1.200.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-vertical">
                    <div class="image-vertical">
                        <a href="entries/MG/individual/mg-zaku-luna.php">
                            <img src="resources/images/gundam/boxart/MG/mg-gunner-zaku-warrior-lunamaria-hawke-boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/MG/individual/mg-zaku-luna.php">MG Zaku Warrior Lunamaria</a>
                    </div>
                    <div class="price">1.000.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-vertical">
                    <div class="image-vertical">
                        <a href="entries/MG/individual/mg-exia-dark.php">
                            <img src="resources/images/gundam/boxart/MG/mg-gundam-exia-dark-matter-boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/MG/individual/mg-exia-dark.php">MG Exia Dark Matter</a>
                    </div>
                    <div class="price">1.100.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-vertical">
                    <div class="image-vertical">
                        <a href="entries/MG/individual/mg-build.php">
                            <img src="resources/images/gundam/boxart/MG/MG-Build-Strike-boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/MG/individual/mg-build.php">MG Build Strike Full Package</a>
                    </div>
                    <div class="price">1.100.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>
            </div>
        </div>

        <!--Perfect Grade-->
        <div class="preview-pg">
            <div class="preview-header">
                <div>
                    <img src="resources/images/gundam/grade-logo/PGlogo.jpg" alt="">
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
                        <a href="entries/PG/individual/pg-strike.php">
                            <img src="resources/images/gundam/boxart/PG/PG-Strike-Freedom-Gundam-Boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/PG/individual/pg-strike.php">PG Strike Freedom</a>
                    </div>
                    <div class="price">6.500.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="entries/PG/individual/pg-perfect.php">
                            <img src="resources/images/gundam/boxart/PG/pg-perfect-strike-gundam-pa_900x900.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/PG/individual/pg-perfect.php">PG Perfect Strike</a>
                    </div>
                    <div class="price">5.600.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="entries/PG/individual/pg-seven.php">
                            <img src="resources/images/gundam/boxart/PG/PG_00Gundam_seven_sword_G-box_art_900x900.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/PG/individual/pg-seven.php">PG 00 Seven Sword</a>
                    </div>
                    <div class="price">6.300.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-horizontal">
                    <div class="image-horizontal">
                        <a href="entries/PG/individual/pg-exia.php">
                            <img src="resources/images/gundam/boxart/PG/pg-gundam-exia-lighting-model_1_900x900.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/PG/individual/pg-exia.php">PG Exia (Lighting Ver.)</a>
                    </div>
                    <div class="price">10.300.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>
            </div>
        </div>

        <!--No Grade-->
        <div class="preview-ng">
            <div class="preview-header">
                <div>
                    <img src="resources/images/gundam/grade-logo/Gunplalogo.png" alt="">
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
                        <a href="entries/NG/individual/mb-strike.php">
                            <img src="resources/images/gundam/boxart/NG/MB-Strike-Strike-Freedom-Gundam.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/NG/individual/mb-strike.php">Metal Build Strike Freedom</a>
                    </div>
                    <div class="price">4.900.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-vertical">
                    <div class="image-vertical">
                        <a href="entries/NG/individual/mb-destiny.php">
                            <img src="resources/images/gundam/boxart/NG/MB-Destiny-Gundam-Boxart.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/NG/individual/mb-destiny.php">Metal Build Destiny</a>
                    </div>
                    <div class="price">4.600.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-vertical">
                    <div class="image-vertical">
                        <a href="entries/NG/individual/hirm-god.php">
                            <img src="resources/images/gundam/boxart/NG/hirm-god-gundam_1_900x900.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/NG/individual/hirm-god.php">High Resolution God</a>
                    </div>
                    <div class="price">2.600.000 VNĐ</div>
                    <div class="cart">
                        <input type="button" value="Add to Cart" onclick="" class="button">
                    </div>
                </div>

                <div class="product-vertical">
                    <div class="image-vertical">
                        <a href="entries/NG/individual/hirm-astray-noir.php">
                            <img src="resources/images/gundam/boxart/NG/hi-res-model-gundam-astray-noir-pa_900x900.jpg" title="Strike Freedom" alt="Strike Freedom">
                        </a>
                    </div>
                    <div class="name">
                        <a href="entries/NG/individual/hirm-astray-noir.php">High Resolution Astray Noir</a>
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