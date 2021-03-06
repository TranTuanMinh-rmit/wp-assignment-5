<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gundam Shop</title>
    <link id='stylecss' type="text/css" rel="stylesheet" href="resources/scripts/checkout.css">
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
              <input id='search-input' style="width: 300px" type="text" placeholder="Search.." name="search">
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
        <a href="#realgrade">RG 1/144</a>
        <a href="#mastergrade">MG 1/100</a>
        <a href="#perfectgrade">PG 1/60</a>
        <a href="#nograde">No Grade</a>
        <a href="javascript:void(0);" class="icon" onclick="myResNavFunction()">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <!--Body of the shop-->
    <div class="shop-checkout">
        <div class="row">
            <div class="col-75">
              <div class="container">
                <form action="/action_page.php">
        
                  <div class="row">
                    <div class="col-50">
                      <h3>Billing Address</h3>
                      <label for="fname"></i> Full Name</label>
                      <input class="checkout" type="text" id="fname" name="firstname" placeholder="Your Name" pattern='([A-Z][a-z]*)([\\s\\\-][A-Z][a-z]'>
                      <label for="email"></i> Email</label>
                      <input type="text" id="email" name="email" placeholder="john@example.com">
                      <label for="adr"></i> Address</label>
                      <input type="text" id="adr" name="address" placeholder="Your Address">
                      <label for="city"></i> City</label>
                      <input type="text" id="city" name="city" placeholder="City">
                    </div>
        
                    <div class="col-50">
                      <h3>Payment</h3>
                      <label for="cname">Name on Card</label>
                      <input type="text" id="cname" name="cardname" placeholder="Name">
                      <label for="ccnum">Credit card number</label>
                      <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}">
                      <label for="expmonth">Exp Month</label>
                      <input type="text" id="expmonth" name="expmonth" placeholder="Month">
                      <div class="row">
                        <div class="col-50">
                          <label for="expyear">Exp Year</label>
                          <input type="text" id="expyear" name="expyear" placeholder="Year">
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="submit" value="Continue to checkout" class="btn">
                </form>
              </div>
            </div>
            <div class="col-25">
              <div class="container">
                <h4>Cart <span class="price" style="color:black"></i> <b>0</b></span></h4>
                
                <p>Total <span class="price" style="color:black"><b>VND 0</b></span></p>
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