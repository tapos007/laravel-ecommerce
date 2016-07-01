<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SimpleOne - A Responsive Html5 Ecommerce Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=100" >
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/metisMenu.min.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" rel="stylesheet"  />
    <link href="{{asset('css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('css/cloud-zoom.css')}}" rel="stylesheet">
    <link href="{{asset('css/portfolio.css')}}" rel="stylesheet">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- fav -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    @yield('custom_css')

</head>
<body>
<!-- Header Start -->
<header>
    <div class="headerstrip">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> <a href="index.html" class="logo pull-left"><img src="{{asset('img/logo.png')}}" alt="SimpleOne" title="SimpleOne"></a>
                    <!-- Top Nav Start -->
                    <div class="pull-left">
                        <div class="navbar" id="topnav">
                            <div class="navbar-inner">
                                <ul class="nav" >
                                    <li><a class="home active" href="/">Home</a> </li>
                                    <li><a class="myaccount" href="#">My Account</a> </li>
                                    <li><a class="shoppingcart" href="#">Shopping Cart</a> </li>
                                    <li><a class="checkout" href="#">CheckOut</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Nav End -->
                    <div class="pull-right">
                        <form class="form-search top-search">
                            <input type="text" class="input-medium search-query" placeholder="Search Here…">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="headerdetails">
            <div class="pull-left">
                <ul class="nav language pull-left">
                    <li class="dropdown hover"> <a href="#" class="dropdown-toggle" data-toggle="">US Doller <b class="caret"></b></a>
                        <ul class="dropdown-menu currency">
                            <li><a href="#">US Doller</a> </li>
                            <li><a href="#">Euro </a> </li>
                            <li><a href="#">British Pound</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown hover"> <a href="#" class="dropdown-toggle" data-toggle="">English <b class="caret"></b></a>
                        <ul class="dropdown-menu language">
                            <li><a href="#">English</a> </li>
                            <li><a href="#">Spanish</a> </li>
                            <li><a href="#">German</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <ul class="nav topcart pull-left">
                    <li class="dropdown hover carticon "> <a href="#" class="dropdown-toggle" > Shopping Cart <span class="label label-orange font14">1 item(s)</span> - $589.50 <b class="caret"></b></a>
                        <ul class="dropdown-menu topcartopen ">
                            <li>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="image"><a href="product.html"><img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"></a></td>
                                        <td class="name"><a href="product.html">MacBook</a></td>
                                        <td class="quantity">x&nbsp;1</td>
                                        <td class="total">$589.50</td>
                                        <td class="remove"><i class="icon-remove"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="image"><a href="product.html"><img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"></a></td>
                                        <td class="name"><a href="product.html">MacBook</a></td>
                                        <td class="quantity">x&nbsp;1</td>
                                        <td class="total">$589.50</td>
                                        <td class="remove"><i class="icon-remove "></i></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="textright"><b>Sub-Total:</b></td>
                                        <td class="textright">$500.00</td>
                                    </tr>
                                    <tr>
                                        <td class="textright"><b>Eco Tax (-2.00):</b></td>
                                        <td class="textright">$2.00</td>
                                    </tr>
                                    <tr>
                                        <td class="textright"><b>VAT (17.5%):</b></td>
                                        <td class="textright">$87.50</td>
                                    </tr>
                                    <tr>
                                        <td class="textright"><b>Total:</b></td>
                                        <td class="textright">$589.50</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="well pull-right buttonwrap"> <a class="btn btn-orange" href="#">View Cart</a> <a class="btn btn-orange" href="#">Checkout</a> </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div id="categorymenu">
            <nav class="subnav">
                <ul class="nav-pills categorymenu">
                    <li><a class="active"  href="/">Home</a></li>
                    <li><a href="{{route('shop.products')}}">Products</a></li>
                    <li><a href="{{route('shop.featured')}}">Featured</a></li>
                    <li><a href="myaccount.html">My Account & other</a>
                        <div>
                            <ul>
                                <li><a href="myaccount.html">My Account</a> </li>
                                <li><a href="login.html">Login</a> </li>
                                <li><a href="register.html">Register</a> </li>
                                <li><a href="wishlist.html">Wishlist</a> </li>
                                <li><a href="contact.html">Contact</a> </li>
                                <li><a href="page-404.html">404</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="features.html">Features</a> </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header End -->

@yield('content')
<!-- Footer -->
<footer id="footer">
    <section class="footersocial">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 aboutus col-sm-6">
                    <h2>About Us </h2>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                        <br>
                        t has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                </div>
                <div class="col-lg-3 contact col-sm-6">
                    <h2>Contact Us </h2>
                    <ul>
                        <li class="phone"> +123 456 7890, +123 456 7890</li>
                        <li class="mobile"> +123 456 7890, +123 456 78900</li>
                        <li class="email"> test@test.com</li>
                        <li class="email"> test@test.com</li>
                    </ul>
                </div>
                <div class="col-lg-3 twitter col-sm-6">
                    <h2>Twitter </h2>
                    <div id="twitter">
                    </div>
                </div>
                <div class="col-lg-3 facebook col-sm-6">
                    <h2>Facebook </h2>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-like-box" data-href="http://www.facebook.com/envato" data-width="292" data-show-faces="true" data-colorscheme="light" data-stream="false" data-show-border="false" data-header="false"  data-height="240"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="footerlinks">
        <div class="container">
            <div class="info">
                <ul>
                    <li><a href="#">Privacy Policy</a>
                    </li>
                    <li><a href="#">Terms &amp; Conditions</a>
                    </li>
                    <li><a href="#">Affiliates</a>
                    </li>
                    <li><a href="#">Newsletter</a>
                    </li>
                </ul>
            </div>
            <div id="footersocial">
                <a href="#" title="Facebook" class="facebook">Facebook</a>
                <a href="#" title="Twitter" class="twitter">Twitter</a>
                <a href="#" title="Linkedin" class="linkedin">Linkedin</a>
                <a href="#" title="rss" class="rss">rss</a>
                <a href="#" title="Googleplus" class="googleplus">Googleplus</a>
                <a href="#" title="Skype" class="skype">Skype</a>
                <a href="#" title="Flickr" class="flickr">Flickr</a>
            </div>
        </div>
    </section>
    <section class="copyrightbottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"> All images are copyright to their owners. </div>
                <div class="col-lg-6 textright"> ShopSimple @ 2012 </div>
            </div>
        </div>
    </section>
    <a id="gotop" href="#">Back to top</a>
</footer>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/respond.min.js')}}"></script>
<script src="{{asset('js/application.js')}}"></script>
<script src="{{asset('js/bootstrap-tooltip.js')}}"></script>
<script defer src="{{asset('js/jquery.fancybox.js')}}"></script>
<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('js/jquery.tweet.js')}}"></script>--}}
<script  src="{{asset('js/cloud-zoom.1.0.2.js')}}"></script>
<script  type="text/javascript" src="{{asset('js/jquery.validate.js')}}"></script>
<script type="text/javascript"  src="{{asset('js/jquery.carouFredSel-6.1.0-packed.js')}}"></script>
<script type="text/javascript"  src="{{asset('js/jquery.mousewheel.min.js')}}"></script>
<script type="text/javascript"  src="{{asset('js/jquery.touchSwipe.min.js')}}"></script>
<script type="text/javascript"  src="{{asset('js/jquery.ba-throttle-debounce.min.js')}}"></script>
<script src="{{asset('js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('js/metisMenu.min.js')}}"></script>
<script defer src="{{asset('js/custom.js')}}"></script>
@yield('custom_js')
</body>
</html>