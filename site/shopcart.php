<html>

<head>
    <title></title>
    <link rel="stylesheet" href="../content/css/shopcart.css">
    <script src="../content/js/shopcart.js"></script>
</head>

<body>
    <div id="content">
        <!-- MENU ICON CLUSTER -->
        <div id="menu-icons">
            <!-- <div class="icon" id="menu">
                <img src="https://image.flaticon.com/icons/svg/483/483334.svg" class="nav" alt="" onclick="openSlideMenu()">
            </div>
            <div class="icon" id="searchbarbutton">
                <img src="https://image.flaticon.com/icons/svg/49/49116.svg" class="nav" alt="" onclick="openSearchBar()">
            </div>
            <div class="icon" id="account">
                <img src="https://cdn1.iconfinder.com/data/icons/ui-next-2020-shopping-and-e-commerce-1/12/75_user-circle-512.png" class="nav" alt="" onclick="openSignIn()">
            </div> -->
            <div class="icon" id="cart">
                <img src="https://static.thenounproject.com/png/16757-200.png" class="nav" alt="" onclick="openCart()">
            </div>
        </div>

        <!-- SLIDE OUT MENU   -->
        <div id="slidemenu">
            <h1>Main Menu</h1>
            <div id="close" onclick="closeSlideMenu()">+</div>
            <ul id="main-menu">
                <li><a href="" class="menulink">HOME</a></li>
                <li><a href="" class="menulink">PRODUCTS</a></li>
                <li><a href="" class="menulink">ABOUT US</a></li>
                <li><a href="" class="menulink">CONTACT US</a></li>
                <li><a href="" class="menulink">ORDERS + RESERVATIONS</a></li>
            </ul>
        </div>

        <!-- SEARCH BAR DROPDOWN -->
        <div id="searchcont">
            <div id=search>
                <form action="">
                    <input type="text" class="search-ele" id="searchbar" placeholder="Search here..." autocomplete="on" maxlength="100" onfocus="this.placeholder=''" onblur="this.placeholder='Search here...'"><input type="submit" class="search-ele" id="searchbutton" value="Search">
                </form>
                <img id="slideup" src="https://www.kindpng.com/picc/m/1-10691_up-arrow-svg-hd-png-download.png" alt="" onclick="closeSearchBar()">
            </div>
        </div>

        <!-- OPEN SIGN IN FORM -->
        <div id="personal">
            <div id="signinform">
                <div id="avatarimg">
                    <img id="avatar" src="http://cdn.onlinewebfonts.com/svg/img_258083.png" alt="">
                </div>
                <div id="closeper" onclick="closeSignIn()">
                    +
                </div>
                <div class="perele">
                    <h1>Sign in</h1>
                </div>
                <div id="username container">
                    <input type="text" class="inputclass" placeholder="Username">
                </div>
                <div id="password container">
                    <input type="password" class="inputclass" placeholder="Password">
                </div>
                <div class="per-element" id="memory container">
                    <input type="checkbox"> Remember Me
                </div>
                <div id="button container">
                    <input type="submit" class="inputclass" id="sub">
                </div>
                <div class="per-element">
                    Don't have an account?<br>
                    Sign up <a href="" id="here">here</a>
                </div>
            </div>
        </div>

        <!-- SHOPPING CART SLIDE OUT -->
        <div id="shopcart">

            <div id="cartcontainer">
                <div id="endcart" onclick="closeCart()">+</div>
                <div id="carthead">
                    <h1>Your Cart</h1>
                </div>
                <!-- <div id="cartln">
                    <a href="" class="prev">Go to Cart</a><br>
                    <a href="" class="prev">Your Previous Orders</a>
                </div>
                <div id="cartcontents">
                    Your cart is currently empty
                </div> -->
                <div class="items" >
<img src="../content/image/hinh1.jpg" width="50%" height="100px" alt="">
<p>hữu thoại cofffee</p>
<p>55$</p>
                </div>
            </div>
            
            
            
            <button href="" class="cartlink" id="wishlist">check out</button>
            <!--               <a href="" class= "cartlink" id="checkout">CHECKOUT</a>
              <a href="" class="cartlink" id="wishlist">WISH LIST</a> -->
        </div>
    </div>
</body>

</html>