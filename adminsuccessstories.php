<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
 <style>
#more {display: none;}
glyphicon { margin-right:5px; }
.thumbnail
{
    margin-bottom: 20px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 0px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}
.listings{
    padding: 100px 0;
}

.listings ul.properties_list{
    list-style: none;
    overflow: hidden;
}

.listings ul.properties_list li{
    display: block;
    width: 340px;
    height: auto;
    position: relative;
    float: left;
    margin: 0 40px 40px 0;
}

.listings ul.properties_list li img.property_img{
    width: 100%;
    height: auto!important;
    vertical-align: top;
}


.listings ul.properties_list li .price{
    position: absolute;
    top: 10px;
    left: 10px;
    padding: 15px 20px;
    background: #ffffff;
    color: #514d4d;
    font-family: "lato-bold", Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
    letter-spacing: 1px;

    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -o-border-radius: 2px;
}


.listings ul.properties_list li:nth-child(3n+0){
    margin-right: 0;
}

.listings ul li .property_details{
    width: 298px;
    padding: 10px 20px 14px 20px;
    border-bottom: 1px solid #f2f1f1;
    border-left: 1px solid #f2f1f1;
    border-right: 1px solid #f2f1f1;

    transition: all .2s linear;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -o-transition: all .2s linear;
}

.listings ul li:hover .property_details{
    border-bottom: 1px solid #95badf;
    border-left: 1px solid #95badf;
    border-right: 1px solid #95badf;
}

.listings ul li .property_details h1{
    color: #666464;
    font-family: "lato-bold", Helvetica, Arial, sans-serif;
    font-size: 16px!important;
    font-weight: bold;
    margin-bottom: 5px;
    line-height: 28px;
}

.listings ul li .property_details h1 a{
    text-decoration: none;
    color: #666464;
}

.listings ul li .property_details h2{
    color: #9d9d9d;
    font-family: "lato-regular", Helvetica, Arial, sans-serif;
    font-size: 12px;
    line-height: 26px;
}

.listings ul li .property_details .property_size{
    color: #676767;
}

.listings .more_listing{
    display: block;
    width: 100%;
    text-align: center;
    margin: 84px 0 22px 0;
}

.listings .more_listing_btn{
    text-decoration: none;
    padding: 20px 40px;
    border: 2px solid #bfd9f1;
    border-radius: 30px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -o-border-radius: 30px;
    color: #afcbe6;
    font-family: "lato-regular", Helvetica, Arial, sans-serif;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;

    transition: all .2s linear;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -o-transition: all .2s linear;
}

.listings .more_listing_btn:hover{
    color: #a0c3e5;
    border: 2px solid #a0c3e5;    
}

.wrapper{
    width: 1100px;
    margin: 0 auto;
    position: relative;
}
</style>
</head>
<body>
<div class=>
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            MAIL: <a href="#">www.globalcsr.com</a>
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                            <p>PHONE: <span>+91 9365897412/ +91 9362587410</span></p>
                        </div><!-- .header-bar-text -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                        <a href="logg.php">Join Us/ Sign In</a>
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                       <h2>   Global CSR</h2>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                  <li class="current-menu-item"><a href="index.php">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="adminlogin.php">User's Details</a></li>
                                <li><a href="problems.php">Raised Problems</a></li>
                                <li><a href="approvedproblems.php">Approved Problems</a></li>
                                <li><a href="adminsuccessstories.php">Success Stories</a></li>
                                <li><a href="amount.php">Amount</a></li>
                                <li><a href="index.php">Logout</a></li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->
    <div id="products" class="row list-group">
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                 <div class="caption">
   <h4 align="center"> Success Stories</h4><br>
    <section class="listings">
        <div class="wrapper">
            <ul class="properties_list">
            <?php
                     mysql_connect("localhost","root");
                     mysql_select_db("fund");
                    $q=mysql_query("select *from successstories");
                     while($row=mysql_fetch_array($q))
                        {
                            $name=$row[0];
                            $email=$row[1];
                            $a=$row[2];
                            $b=$row[3];
                            $image=$row[6];
                            $raised=$row[5];
                        ?>
                <li>
                      <a href="upload.php">  <img class="thumb" src="<?php echo $image;?>" width="300" height="200" >
                    </a>
                    <span class="price"><?php echo 'Problem Title.'.$a;?></span>
                    <div class="property_details">
                        <h1>
                        <?php echo 'Needed Amount.'.$b;?><br>
                        Raised Amount:<?php echo  $raised ;?>
                        </h1>
                    </div>
                </li>
            <?php
                }
            ?>
            </ul>
        </div>
    </section>
                    </div>
                </div>
            </div>
    </div>
   <div class="home-page-icon-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box active">
                        <figure class="d-flex justify-content-center">
                            <img src="images/hands-gray.png" alt="">
                            <img src="images/hands-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Become a Volunteer</h3>
                        </header>

                        <div class="entry-content">
                            <p>“The best way to find yourself, is to lose yourself in the service of others.” – Mahatma Gandhi</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="images/donation-gray.png" alt="">
                            <img src="images/donation-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Fund Raiser</h3>
                        </header>

                        <div class="entry-content">
                            <p>“Be happy with what you have while working for what you want.” – Helen Keller</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="images/charity-gray.png" alt="">
                            <img src="images/charity-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Donator</h3>
                        </header>

                        <div class="entry-content">
                            <p>"The value of a man resides in what he gives and not in what he is capable of receiving."-Albert Einstein   </p>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

   

    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <h2><a class="foot-logo" href="#">Global CSR</a></h2>

                            <p>"Want to keep Christ in Christmas? Feed the hungry, clothe the naked, forgive the guilty,
welcome the unwanted,<span id="dots">...</span><span id="more">
care for the ill,
love your enemies, and do unto others as you would have done unto you."
―Steve Maraboli</p>
<button onClick="myFunction()" id="myBtn" class="btn orange-border">Read more</button>

                            <ul class="d-flex flex-wrap align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="https://www.google.com/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.facebook.com/"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>

                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Become  a Volunteer</a></li>
                            <li><a href="#">Donate</a></li>
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Latest News</h2>

                            <ul>
                                <li>
                                    <h3><a href="#">A new cause to help</a></h3>
                                    <div class="posted-date">MArch 12, 2019</div>
                                </li>

                                <li>
                                    <h3><a href="#">We love to help people</a></h3>
                                    <div class="posted-date">MArch 12, 2019</div>
                                </li>

                                <li>
                                    <h3><a href="#">The new ideas for helping</a></h3>
                                    <div class="posted-date">MArch 12, 2019</div>
                                </li>
                            </ul>
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+91 9362587410</span></li>
                                <li><i class="fa fa-envelope"></i><span>www.globalcsr.com</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Madurai-Tamilnadu</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center" method="post">
                                <input type="email" placeholder="Your email" name="email">
                                <input type="submit" value="send" name="send">
                                <?php $con=mysql_connect("localhost","root","");
            mysql_select_db("fund",$con);
            $q=mysql_query("select *from subscribers;");
            while($row=mysql_fetch_array($q))
            {
             $c=$row[0];?>
             <label><?php echo $c."subscribers";?></label><?php }?>
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
</body>