<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from templatevisual.com/demo/kalista/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Oct 2015 14:16:39 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kalista - Kids Store e-Commerce HTML5 Template</title>

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}" />

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('rs-plugin/css/settings.css') }}" media="screen" />

    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="fullwidth">

    <div id="loader">
        <div class="loader-container">
            <img src="images/loader.gif" alt="" class="loader-site">
        </div>
    </div>

<div id="wrapper">
    <!-- Modal -->
    <div class="modal fade modalexample" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body row">
                    <div class="col-md-6">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="upload/shop_single_01.png" class="img-responsive" alt="">
                                </div>
                                <div class="item">
                                    <img src="upload/shop_single_02.png" class="img-responsive" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                                <i class="sr-only">Previous</i>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                                <i class="sr-only">Next</i>
                            </a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-6">
                        <div class="pull-left">
                            <h4>Advanced Classic Pants</h4>
                        </div>
                        <div class="pull-right">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <span>$31.12</span>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div><!-- end rating -->

                        <p>Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit. Cras neque nulla, convallis non commodo et, euismod nonsese. At vero.</p>

                        <div class="btn-group">
                            <a href="shop-cart.html" class="btn btn-primary" title="">ADD TO CART</a>
                        </div>
                        <div class="addw">
                            <a href="shop-wishlist.html"><i class="fa fa-heart-o"></i> Add to Wishlist</a>
                        </div><!-- end addw -->
                    </div><!-- end col -->
                </div><!-- end modal-body -->
            </div><!-- end modal-content -->
        </div><!-- end modal-diolog -->
    </div><!-- end modal -->

    <div class="fullwidth-topbar">
        <div class="container">
            <div class="topbar">
                <div class="topbar-wrapper clearfix">
                    <div class="pull-left">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cart-plus"></i> Cart: (2 items) <span class="dropme"></span></button>
                            <ul class="dropdown-menu cartdrop" role="menu">
                                <li>
                                    <a href="#">
                                    <img title="product" alt="product" class="alingleft" src="upload/shop_menu_01.jpg">
                                    <h4>Custom Boxer Item <small>Quantity : 1 - Price : $23.12</small></h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <img title="product" alt="product" class="alingleft" src="upload/shop_menu_02.jpg">
                                    <h4>A Man Shoe <small>Quantity : 1 - Price : $23.12</small></h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-checkout.html" class="btn btn-primary">Checkout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">En <span class="dropme"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">GR</a></li>
                                <li><a href="#">TR</a></li>
                                <li><a href="#">AB</a></li>
                                <li><a href="#">SP</a></li>
                                <li><a href="#">IT</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dollar"></i> Euro <span class="dropme"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><i class="fa fa-euro"></i> Dollar</a></li>
                                <li><a href="#"><i class="fa fa-turkish-lira"></i> YTL</a></li>
                                <li><a href="#"><i class="fa fa-yen"></i> Yen</a></li>
                            </ul>
                        </div>
                    </div><!-- end left -->

                    <div class="pull-right">
                        <p><i class="fa fa-gift"></i> Buy one get one special deal for 2015</p>
                    </div><!-- end right -->
                </div><!-- end topbar-wrapper -->
            </div><!-- end topbar -->
        </div><!-- end container -->
    </div><!-- end fullwidth header -->

    <div class="fullwidth-header">
        <header class="header">
            <div class="container">
                <div class="hovermenu ttmenu">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="fa fa-bars"></span>
                            </button>
                            <div class="logo">
                                <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt=""></a>
                            </div>
                        </div><!-- end navbar-header -->

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="fa fa-angle-down"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="index-default.html">Default Version</a></li>
                                        <li><a href="index-one.html">Version One</a></li>
                                        <li><a href="index-two.html">Version Two</a></li>
                                        <li><a href="index-three.html">Version Three</a></li>
                                        <li><a href="index-four.html">Version Four</a></li>
                                    </ul>
                                </li><!-- end mega menu -->
                                <li><a href="about.html">About</a></li>
                                <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Shopping <b class="fa fa-angle-down"></b></a>
                                    <ul class="dropdown-menu pink">
                                        <li>
                                        <div class="ttmenu-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="box">
                                                        <ul>
                                                            <li><a href="shop-single.html">Shop Single</a></li>
                                                            <li><a href="shop-single-alt.html">Shop Single Alt</a></li>
                                                            <li><a href="shop-product-list.html">Shop Product List</a></li>
                                                            <li><a href="shop-filterable-category.html">Shop Filterable</a></li>
                                                            <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                            <li><a href="shop-tag-index.html">Tag Index <span class="badge">NEW</span></a></li>
                                                            <li><a href="shop-cart.html">Shopping Cart</a></li>
                                                        </ul>
                                                    </div><!-- end box -->
                                                </div><!-- end col -->
                                                <div class="col-md-6">
                                                    <div class="box">
                                                        <ul>
                                                            <li><a href="shop-wishlist.html">Wishlist</a></li>
                                                            <li><a href="shop-checkout.html">Checkout</a></li>
                                                            <li><a href="shop-account.html">My Account</a></li>
                                                            <li><a href="shop-track.html">Order Tracking</a></li>
                                                            <li><a href="page-not-found.html">404 Not Found</a></li>
                                                            <li><a href="page-delivery.html">Delivery Time</a></li>
                                                            <li><a href="typography.html">Typography</a></li>
                                                            <li><a href="shortcodes.html">Shortcodes</a></li>
                                                        </ul>
                                                    </div><!-- end box -->
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div><!-- end ttmenu-content -->
                                        </li>
                                    </ul>
                                </li><!-- end mega menu -->
                                <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Boutiques <b class="fa fa-angle-down"></b></a>
                                    <ul class="dropdown-menu orange">
                                        <li>
                                        <div class="ttmenu-content">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="box">
                                                        <ul>
                                                            <li><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested, 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also re. Sections 1.10.32 and 1.10.33 from.</p></li>
                                                        </ul>
                                                    </div><!-- end box -->
                                                </div><!-- end col -->
                                            </div><!-- end row -->

                                            <hr>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="box">
                                                        <ul>
                                                            <li><a href="shop-product-list.html">Toys and Stationery</a></li>
                                                            <li><a href="shop-product-list.html">Baby Safety Products</a></li>
                                                            <li><a href="shop-product-list.html">Gift Items</a></li>

                                                        </ul>
                                                    </div><!-- end box -->
                                                </div><!-- end col -->
                                                <div class="col-md-4">
                                                    <div class="box">
                                                        <ul>
                                                            <li><a href="shop-product-list.html">Organic Materials</a></li>
                                                            <li><a href="shop-product-list.html">Pregnant Products</a></li>
                                                            <li><a href="shop-product-list.html">Diapers and Wipes</a></li>
                                                        </ul>
                                                    </div><!-- end box -->
                                                </div><!-- end col -->
                                                <div class="col-md-4">
                                                    <div class="box">
                                                        <ul>
                                                            <li><a href="shop-product-list.html">Diapers and Wipes</a></li>
                                                            <li><a href="shop-product-list.html">Diapers and Wipes</a></li>
                                                            <li><a href="shop-product-list.html">Others</a></li>
                                                        </ul>
                                                    </div><!-- end box -->
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div><!-- end ttmenu-content -->
                                        </li>
                                    </ul>
                                </li><!-- end mega menu -->
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                </li>
                            </ul><!-- end nav navbar-nav -->
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <div class="big-call">
                                        <span><i class="fa fa-phone"></i> +90 123 45 67</span>
                                    </div>
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!-- end navbar navbar-default clearfix -->
                </div><!-- end menu 1 -->
            </div><!-- end container -->
        </header>
    </div><!-- end fullwidth-header -->

        <section class="slider-section">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/slider_new_01.jpg"  data-saveperformance="off"  data-title="Slide">
                            <img src="upload/slider_new_01.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_01 text-left lft tp-resizeme"
                                data-x="650"
                                data-y="220"
                                data-speed="1000"
                                data-start="600"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Kalista
                            </div>
                            <div class="tp-caption slider_layer_03 lft tp-resizeme rs-parallaxlevel-9"
                                data-x="770"
                                data-y="215"
                                data-speed="1000"
                                data-start="700"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img src="images/dummy.png" alt="" data-lazyload="images/logo.png">
                            </div>
                            <div class="tp-caption slider_layer_02 text-left lft tp-resizeme"
                                data-x="650"
                                data-y="290"
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Great Theme For Your Kids, Child Fashion Website<br> Build limitless templates with page builder!
                            </div>
                            <div class="tp-caption slider_layer_03 lft tp-resizeme rs-parallaxlevel-9"
                                data-x="640"
                                data-y="100"
                                data-speed="1000"
                                data-start="1400"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img src="images/dummy.png" alt="" data-lazyload="upload/slider_04.png">
                            </div>
                            <div class="tp-caption slider_layer_03 lft tp-resizeme rs-parallaxlevel-9"
                                data-x="880"
                                data-y="440"
                                data-speed="1000"
                                data-start="1400"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img src="images/dummy.png" alt="" data-lazyload="upload/slider_04.png">
                            </div>
                            <div class="tp-caption slider_layer_03 lft tp-resizeme rs-parallaxlevel-9"
                                data-x="230"
                                data-y="50"
                                data-speed="1000"
                                data-start="1400"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img src="images/dummy.png" alt="" data-lazyload="upload/slider_01.png">
                            </div>
                            <div class="tp-caption slider_layer_03 lft tp-resizeme rs-parallaxlevel-9"
                                data-x="260"
                                data-y="50"
                                data-speed="1000"
                                data-start="1400"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img src="images/dummy.png" alt="" data-lazyload="upload/slider_02.png">
                            </div>
                            <div class="tp-caption slider_layer_03 lft tp-resizeme rs-parallaxlevel-9"
                                data-x="550"
                                data-y="450"
                                data-speed="1000"
                                data-start="1400"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img src="images/dummy.png" alt="" data-lazyload="upload/slider_03.png">
                            </div>
                            <div class="tp-caption slider_layer_03 lft tp-resizeme rs-parallaxlevel-9"
                                data-x="850"
                                data-y="30"
                                data-speed="1000"
                                data-start="1400"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img src="images/dummy.png" alt="" data-lazyload="upload/slider_06.png">
                            </div>
                            <div class="tp-caption slider_layer_03 lft tp-resizeme rs-parallaxlevel-9"
                                data-x="left"
                                data-y="30"
                                data-speed="1000"
                                data-start="1400"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img src="images/dummy.png" alt="" data-lazyload="upload/slider_07.png">
                            </div>
                            <div class="tp-caption slider_layer_03 lft tp-resizeme rs-parallaxlevel-9"
                                data-x="right"
                                data-y="500"
                                data-speed="1000"
                                data-start="1400"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img src="images/dummy.png" alt="" data-lazyload="upload/slider_08.png">
                            </div>
                            <div class="tp-caption slider_layer_02 text-left lft tp-resizeme"
                                data-x="650"
                                data-y="360"
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="btn btn-primary">Let Start</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    <section class="new-section white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="new-title text-center">
                        <h4>Featured <span>Items</span></h4>
                        <p>Listed below our best seller items with carousel widget</p>
                        <hr>
                    </div><!-- end section-title -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div id="owl-featured">
                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <a class="hover-image" href="shop-single.html" title="">
                            <div class="img-rotate">
                                <span class="badge">BEST SELLING</span>
                                <img src="upload/shop_07.jpg" alt="">
                                <img src="upload/shop_07_bg.jpg" class="rotate-image" alt="">
                            </div>
                        </a>
                        <div class="shop-item-title clearfix">
                            <h4><a href="shop-single.html">Verdenal Children's House</a></h4>
                            <div class="shopmeta">
                                <span class="pull-left">$44.12</span>
                                <div class="rating pull-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div><!-- end rating -->
                            </div><!-- end shop-meta -->
                        </div><!-- end shop-item-title -->
                        <div class="visible-buttons">
                            <a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                            <a data-tooltip="tooltip" data-placement="top" title="Wishlist" href="shop-wishlist.html"><span class="fa fa-heart-o"></span></a>
                            <a data-toggle="modal" data-tooltip="tooltip" data-target=".modalexample" data-placement="top" title="Quick View" href="#"><span class="fa fa-eye"></span></a>
                        </div><!-- end buttons -->
                    </div><!-- end relative -->
                </div><!-- end col -->

                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <a class="hover-image" href="shop-single.html" title="">
                            <div class="img-rotate">
                                <img src="upload/shop_08.jpg" alt="">
                                <img src="upload/shop_08_bg.jpg" class="rotate-image" alt="">
                            </div>
                        </a>
                        <div class="shop-item-title clearfix">
                            <h4><a href="shop-single.html">Blue Baby Carriage</a></h4>
                            <div class="shopmeta">
                                <span class="pull-left">$333.12</span>
                                <div class="rating pull-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- end rating -->
                            </div><!-- end shop-meta -->
                        </div><!-- end shop-item-title -->
                        <div class="visible-buttons">
                            <a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                            <a data-tooltip="tooltip" data-placement="top" title="Wishlist" href="shop-wishlist.html"><span class="fa fa-heart-o"></span></a>
                            <a data-toggle="modal" data-tooltip="tooltip" data-target=".modalexample" data-placement="top" title="Quick View" href="#"><span class="fa fa-eye"></span></a>
                        </div><!-- end buttons -->
                    </div><!-- end relative -->
                </div><!-- end col -->

                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <a class="hover-image" href="shop-single.html" title="">
                            <div class="img-rotate">
                                <span class="badge">BEST SELLING</span>
                                <img src="upload/shop_09.jpg" alt="">
                                <img src="upload/shop_09_bg.jpg" class="rotate-image" alt="">
                            </div>
                        </a>
                        <div class="shop-item-title clearfix">
                            <h4><a href="shop-single.html">Baby sleep set</a></h4>
                            <div class="shopmeta">
                                <span class="pull-left">$121.32</span>
                                <div class="rating pull-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div><!-- end rating -->
                            </div><!-- end shop-meta -->
                        </div><!-- end shop-item-title -->
                        <div class="visible-buttons">
                            <a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                            <a data-tooltip="tooltip" data-placement="top" title="Wishlist" href="shop-wishlist.html"><span class="fa fa-heart-o"></span></a>
                            <a data-toggle="modal" data-tooltip="tooltip" data-target=".modalexample" data-placement="top" title="Quick View" href="#"><span class="fa fa-eye"></span></a>
                        </div><!-- end buttons -->
                    </div><!-- end relative -->
                </div><!-- end col -->

                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <a class="hover-image" href="shop-single.html" title="">
                            <div class="img-rotate">
                                <img src="upload/shop_10.jpg" alt="">
                                <img src="upload/shop_10_bg.jpg" class="rotate-image" alt="">
                            </div>
                        </a>
                        <div class="shop-item-title clearfix">
                            <h4><a href="shop-single.html">Yellow Baby Shoes</a></h4>
                            <div class="shopmeta">
                                <span class="pull-left">$333.12</span>
                                <div class="rating pull-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- end rating -->
                            </div><!-- end shop-meta -->
                        </div><!-- end shop-item-title -->
                        <div class="visible-buttons">
                            <a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                            <a data-tooltip="tooltip" data-placement="top" title="Wishlist" href="shop-wishlist.html"><span class="fa fa-heart-o"></span></a>
                            <a data-toggle="modal" data-tooltip="tooltip" data-target=".modalexample" data-placement="top" title="Quick View" href="#"><span class="fa fa-eye"></span></a>
                        </div><!-- end buttons -->
                    </div><!-- end relative -->
                </div><!-- end col -->

                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <a class="hover-image" href="shop-single.html" title="">
                            <div class="img-rotate">
                                <span class="badge">BEST SELLING</span>
                                <img src="upload/shop_07.jpg" alt="">
                                <img src="upload/shop_07_bg.jpg" class="rotate-image" alt="">
                            </div>
                        </a>
                        <div class="shop-item-title clearfix">
                            <h4><a href="shop-single.html">Verdenal Children's House</a></h4>
                            <div class="shopmeta">
                                <span class="pull-left">$44.12</span>
                                <div class="rating pull-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div><!-- end rating -->
                            </div><!-- end shop-meta -->
                        </div><!-- end shop-item-title -->
                        <div class="visible-buttons">
                            <a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                            <a data-tooltip="tooltip" data-placement="top" title="Wishlist" href="shop-wishlist.html"><span class="fa fa-heart-o"></span></a>
                            <a data-toggle="modal" data-tooltip="tooltip" data-target=".modalexample" data-placement="top" title="Quick View" href="#"><span class="fa fa-eye"></span></a>
                        </div><!-- end buttons -->
                    </div><!-- end relative -->
                </div><!-- end col -->

                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <a class="hover-image" href="shop-single.html" title="">
                            <div class="img-rotate">
                                <img src="upload/shop_08.jpg" alt="">
                                <img src="upload/shop_08_bg.jpg" class="rotate-image" alt="">
                            </div>
                        </a>
                        <div class="shop-item-title clearfix">
                            <h4><a href="shop-single.html">Blue Baby Carriage</a></h4>
                            <div class="shopmeta">
                                <span class="pull-left">$333.12</span>
                                <div class="rating pull-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- end rating -->
                            </div><!-- end shop-meta -->
                        </div><!-- end shop-item-title -->
                        <div class="visible-buttons">
                            <a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                            <a data-tooltip="tooltip" data-placement="top" title="Wishlist" href="shop-wishlist.html"><span class="fa fa-heart-o"></span></a>
                            <a data-toggle="modal" data-tooltip="tooltip" data-target=".modalexample" data-placement="top" title="Quick View" href="#"><span class="fa fa-eye"></span></a>
                        </div><!-- end buttons -->
                    </div><!-- end relative -->
                </div><!-- end col -->

                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <a class="hover-image" href="shop-single.html" title="">
                            <div class="img-rotate">
                                <span class="badge">BEST SELLING</span>
                                <img src="upload/shop_09.jpg" alt="">
                                <img src="upload/shop_09_bg.jpg" class="rotate-image" alt="">
                            </div>
                        </a>
                        <div class="shop-item-title clearfix">
                            <h4><a href="shop-single.html">Baby sleep set</a></h4>
                            <div class="shopmeta">
                                <span class="pull-left">$121.32</span>
                                <div class="rating pull-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div><!-- end rating -->
                            </div><!-- end shop-meta -->
                        </div><!-- end shop-item-title -->
                        <div class="visible-buttons">
                            <a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                            <a data-tooltip="tooltip" data-placement="top" title="Wishlist" href="shop-wishlist.html"><span class="fa fa-heart-o"></span></a>
                            <a data-toggle="modal" data-tooltip="tooltip" data-target=".modalexample" data-placement="top" title="Quick View" href="#"><span class="fa fa-eye"></span></a>
                        </div><!-- end buttons -->
                    </div><!-- end relative -->
                </div><!-- end col -->

                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <a class="hover-image" href="shop-single.html" title="">
                            <div class="img-rotate">
                                <img src="upload/shop_10.jpg" alt="">
                                <img src="upload/shop_10_bg.jpg" class="rotate-image" alt="">
                            </div>
                        </a>
                        <div class="shop-item-title clearfix">
                            <h4><a href="shop-single.html">Yellow Baby Shoes</a></h4>
                            <div class="shopmeta">
                                <span class="pull-left">$333.12</span>
                                <div class="rating pull-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- end rating -->
                            </div><!-- end shop-meta -->
                        </div><!-- end shop-item-title -->
                        <div class="visible-buttons">
                            <a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                            <a data-tooltip="tooltip" data-placement="top" title="Wishlist" href="shop-wishlist.html"><span class="fa fa-heart-o"></span></a>
                            <a data-toggle="modal" data-tooltip="tooltip" data-target=".modalexample" data-placement="top" title="Quick View" href="#"><span class="fa fa-eye"></span></a>
                        </div><!-- end buttons -->
                    </div><!-- end relative -->
                </div><!-- end col -->
            </div><!-- end owl-featured -->
        </div><!-- end container -->
    </section>

    <section class="new-section fullscreen paralbackground parallax" style="background-image:url('upload/parallax_01.jpg');" data-img-width="2880" data-img-height="1800" data-diff="100">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="new-title text-center">
                        <h4><span>Kalista</span> Testimonials</h4>
                        <p>Let's See What Others Say About Kalista Template</p>
                        <hr>
                    </div><!-- end section-title -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-md-12">
                    <div id="owl-testi" class="owl-featured">
                        <div class="testi-item">
                            <div class="testimonial blue">
                                <div class="testi-image">
                                    <img src="upload/comment_01.png" class="img-circle img-responsive" alt="">
                                </div>
                                <h4>Amanda DEO</h4>
                                <small>CEO - google.com</small>
                                <p>Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also by English versions from the 1914 translation.</p>
                            </div><!-- end testimonial -->
                        </div><!-- end col -->

                        <div class="testi-item">
                            <div class="testimonial green">
                                <div class="testi-image">
                                    <img src="upload/comment_02.png" class="img-circle img-responsive" alt="">
                                </div>
                                <h4>Jenny CLARA</h4>
                                <small>CEO - yahoo.com</small>
                                <p>Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also by English versions from the 1914 translation.</p>
                            </div><!-- end testimonial -->
                        </div><!-- end col -->

                        <div class="testi-item">
                            <div class="testimonial orange">
                                <div class="testi-image">
                                    <img src="upload/comment_03.png" class="img-circle img-responsive" alt="">
                                </div>
                                <h4>Suzanna FOX</h4>
                                <small>CEO - bing.com</small>
                                <p>Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also by English versions from the 1914 translation.</p>
                            </div><!-- end testimonial -->
                        </div><!-- end col -->

                        <div class="testi-item">
                            <div class="testimonial pink">
                                <div class="testi-image">
                                    <img src="upload/comment_04.png" class="img-circle img-responsive" alt="">
                                </div>
                                <h4>Jenny JOSEPH</h4>
                                <small>CEO - photodune.com</small>
                                <p>Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also by English versions from the 1914 translation.</p>
                            </div><!-- end testimonial -->
                        </div><!-- end col -->

                        <div class="testi-item">
                            <div class="testimonial yellow">
                                <div class="testi-image">
                                    <img src="upload/comment_05.png" class="img-circle img-responsive" alt="">
                                </div>
                                <h4>Amy AMYLORE</h4>
                                <small>CEO - themeforest.net</small>
                                <p>Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also by English versions from the 1914 translation.</p>
                            </div><!-- end testimonial -->
                        </div><!-- end col -->

                        <div class="testi-item">
                            <div class="testimonial dark">
                                <div class="testi-image">
                                    <img src="upload/comment_06.png" class="img-circle img-responsive" alt="">
                                </div>
                                <h4>Ricky ANDRES</h4>
                                <small>CEO - bing.com</small>
                                <p>Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also by English versions from the 1914 translation.</p>
                            </div><!-- end testimonial -->
                        </div><!-- end col -->
                    </div><!-- end owl-testi -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </section>

    <section class="new-section white">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="new-title text-center">
                        <h4><span>Recent</span> Items</h4>
                        <p>Listed below our awesome recent items with carousel widget</p>
                        <hr>
                    </div><!-- end section-title -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div id="owl-recent">
                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <a class="hover-image" href="shop-single.html" title="">
                            <div class="img-rotate">
                                <span class="badge">BEST SELLING</span>
                                <img src="upload/shop_11.jpg" alt="">
                                <img src="upload/shop_11_bg.jpg" class="rotate-image" alt="">
                            </div>
                        </a>
                        <div class="shop-item-title clearfix">
                            <h4><a href="shop-single.html">Thermomether</a></h4>
                            <div class="shopmeta">
                                <span class="pull-left">$56.12</span>
                                <div class="rating pull-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div><!-- end rating -->
                            </div><!-- end shop-meta -->
                        </div><!-- end shop-item-title -->
                        <div class="visible-buttons">
                            <a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                            <a data-tooltip="tooltip" data-placement="top" title="Wishlist" href="shop-wishlist.html"><span class="fa fa-heart-o"></span></a>
                            <a data-toggle="modal" data-tooltip="tooltip" data-target=".modalexample" data-placement="top" title="Quick View" href="#"><span class="fa fa-eye"></span></a>
                        </div><!-- end buttons -->
                    </div><!-- end relative -->
                </div><!-- end col -->

                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <a class="hover-image" href="shop-single.html" title="">
                            <div class="img-rotate">
                                <img src="upload/shop_12.jpg" alt="">
                                <img src="upload/shop_12_bg.jpg" class="rotate-image" alt="">
                            </div>
                        </a>
                        <div class="shop-item-title clearfix">
                            <h4><a href="shop-single.html">Blue Baby Clothing</a></h4>
                            <div class="shopmeta">
                                <span class="pull-left">$333.12</span>
                                <div class="rating pull-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- end rating -->
                            </div><!-- end shop-meta -->
                        </div><!-- end shop-item-title -->
                        <div class="visible-buttons">
                            <a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                            <a data-tooltip="tooltip" data-placement="top" title="Wishlist" href="shop-wishlist.html"><span class="fa fa-heart-o"></span></a>
                            <a data-toggle="modal" data-tooltip="tooltip" data-target=".modalexample" data-placement="top" title="Quick View" href="#"><span class="fa fa-eye"></span></a>
                        </div><!-- end buttons -->
                    </div><!-- end relative -->
                </div><!-- end col -->

                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <a class="hover-image" href="shop-single.html" title="">
                            <div class="img-rotate">
                                <img src="upload/shop_13.jpg" alt="">
                                <img src="upload/shop_13_bg.jpg" class="rotate-image" alt="">
                            </div>
                        </a>
                        <div class="shop-item-title clearfix">
                            <h4><a href="shop-single.html">Baby toys set</a></h4>
                            <div class="shopmeta">
                                <span class="pull-left">$121.32</span>
                                <div class="rating pull-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div><!-- end rating -->
                            </div><!-- end shop-meta -->
                        </div><!-- end shop-item-title -->
                        <div class="visible-buttons">
                            <a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                            <a data-tooltip="tooltip" data-placement="top" title="Wishlist" href="shop-wishlist.html"><span class="fa fa-heart-o"></span></a>
                            <a data-toggle="modal" data-tooltip="tooltip" data-target=".modalexample" data-placement="top" title="Quick View" href="#"><span class="fa fa-eye"></span></a>
                        </div><!-- end buttons -->
                    </div><!-- end relative -->
                </div><!-- end col -->

                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <a class="hover-image" href="shop-single.html" title="">
                            <div class="img-rotate">
                                <img src="upload/shop_14.jpg" alt="">
                                <img src="upload/shop_14_bg.jpg" class="rotate-image" alt="">
                            </div>
                        </a>
                        <div class="shop-item-title clearfix">
                            <h4><a href="shop-single.html">Custom Car</a></h4>
                            <div class="shopmeta">
                                <span class="pull-left">$333.12</span>
                                <div class="rating pull-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- end rating -->
                            </div><!-- end shop-meta -->
                        </div><!-- end shop-item-title -->
                        <div class="visible-buttons">
                            <a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                            <a data-tooltip="tooltip" data-placement="top" title="Wishlist" href="shop-wishlist.html"><span class="fa fa-heart-o"></span></a>
                            <a data-toggle="modal" data-tooltip="tooltip" data-target=".modalexample" data-placement="top" title="Quick View" href="#"><span class="fa fa-eye"></span></a>
                        </div><!-- end buttons -->
                    </div><!-- end relative -->
                </div><!-- end col -->

                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <a class="hover-image" href="shop-single.html" title="">
                            <div class="img-rotate">
                                <span class="badge">BEST SELLING</span>
                                <img src="upload/shop_18.jpg" alt="">
                                <img src="upload/shop_18_bg.jpg" class="rotate-image" alt="">
                            </div>
                        </a>
                        <div class="shop-item-title clearfix">
                            <h4><a href="shop-single.html">Verdenal Children's House</a></h4>
                            <div class="shopmeta">
                                <span class="pull-left">$44.12</span>
                                <div class="rating pull-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div><!-- end rating -->
                            </div><!-- end shop-meta -->
                        </div><!-- end shop-item-title -->
                        <div class="visible-buttons">
                            <a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                            <a data-tooltip="tooltip" data-placement="top" title="Wishlist" href="shop-wishlist.html"><span class="fa fa-heart-o"></span></a>
                            <a data-toggle="modal" data-tooltip="tooltip" data-target=".modalexample" data-placement="top" title="Quick View" href="#"><span class="fa fa-eye"></span></a>
                        </div><!-- end buttons -->
                    </div><!-- end relative -->
                </div><!-- end col -->
            </div><!-- end owl-featured -->
        </div><!-- end container -->
    </section>

    <section class="new-section grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="banner wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                <img src="upload/banner_02.jpg" alt="" class="img-responsive">
                                <div class="banner-button">
                                    <a href="#" class="btn btn-primary">Get it now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="banner wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <img src="upload/banner_03.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="banner wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <img src="upload/banner_04.jpg" alt="" class="img-responsive">
                                <div class="banner-button">
                                    <a href="#" class="btn btn-primary">Get it now</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <section class="new-section white">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="new-title text-center">
                        <h4>From the <span>Blog</span></h4>
                        <p>Listed below our awesome blog posts with carousel widget</p>
                        <hr>
                    </div><!-- end section-title -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="owl-blog">
                                <div class="blog-item">
                                    <div class="blog-item-image">
                                        <a href="single.html"><img src="upload/blog_01.jpg" alt="" class="img-responsive"></a>
                                    </div>
                                    <h4><a href="single.html">Happy Childrens</a></h4>
                                    <p>Praesent justo tortor, bibendum eu quis, mattis sed nunc.</p>
                                    <div class="meta">
                                        <a href="#"><i class="fa fa-comments-o"></i> 12 Comments</a>
                                        <a href="#"><i class="fa fa-folder-o"></i> News</a>
                                    </div>
                                </div><!-- end blog-item -->
                                <div class="blog-item">
                                    <div class="blog-item-image">
                                        <a href="single.html"><img src="upload/blog_02.jpg" alt="" class="img-responsive"></a>
                                    </div>
                                    <h4><a href="single.html">Mother & Baby Days</a></h4>
                                    <p>Praesent justo, bibendum eu blandit quis, mattis sed nunc.</p>
                                    <div class="meta">
                                        <a href="#"><i class="fa fa-comments-o"></i> 44 Comments</a>
                                        <a href="#"><i class="fa fa-folder-o"></i> Video</a>
                                    </div>
                                </div><!-- end blog-item -->
                                <div class="blog-item">
                                    <div class="blog-item-image">
                                        <a href="single.html"><img src="upload/blog_03.jpg" alt="" class="img-responsive"></a>
                                    </div>
                                    <h4><a href="single.html">Winner of the Week</a></h4>
                                    <p>Praesent justo tortor, bibendum eu blandit, mattis sed nunc.</p>
                                    <div class="meta">
                                        <a href="#"><i class="fa fa-comments-o"></i> 8 Comments</a>
                                        <a href="#"><i class="fa fa-folder-o"></i> Quote</a>
                                    </div>
                                </div><!-- end blog-item -->
                            </div><!-- end owl-blog -->
                        </div>

                        <div class="col-md-4">
                            <div class="newsletter">
                                <h4>Subscribe Us</h4>
                                <p>If would you like to see more campaings, discounts, subscribe our newsletter.</p>
                                <form class="subscribe">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your email..." />
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button">
                                                <span class="fa fa-envelope-o"></span>
                                            </button>
                                        </span>
                                    </div>
                                </form>

                                <div class="big-social text-center">
                                    <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                    <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                    <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                    <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                    <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                                </div><!-- end big-social -->
                            </div><!-- end newsletter -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="120" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    <div class="footer-bg text-center hidden-xs">
        <img src="images/footer.png" alt="" class="img-responsive">
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Payment Methods</h4>
                        </div><!-- end section-title -->

                        <ul class="list-inline payments">
                            <li><a href="#"><i class="fa fa-cc-paypal fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-visa fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-wallet fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-stripe fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-amex fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-discover fa-2x"></i></a></li>
                        </ul>
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>We're available 24/7</h4>
                        </div><!-- end section-title -->

                        <div class="big-call">
                            <span><i class="fa fa-phone"></i> +90 123 45 67</span>
                            <span><i class="fa fa-fax"></i> +90 123 45 68</span>
                        </div>
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr>

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>We Are Kalista</h4>
                        </div><!-- end section-title -->
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also re..</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Useful Links</h4>
                        </div><!-- end section-title -->
                        <ul>
                            <li><a href="#">Homepage</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Terms of usage</a></li>
                            <li><a href="#">Copyrights</a></li>
                        </ul>
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget-title">
                        <h4>Get In Touch</h4>
                    </div><!-- end section-title -->
                    <ul>
                        <li><i class="fa fa-envelope-o"></i> <a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                        <li><i class="fa fa-phone"></i> +90 123 45 67</li>
                        <li><i class="fa fa-link"></i> <a href="#">www.yoursite.com</a></li>
                    </ul>
                    <div class="big-social">
                        <a href="#" title=""><i class="fa fa-facebook"></i></a>
                        <a href="#" title=""><i class="fa fa-twitter"></i></a>
                        <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                    </div><!-- end big-social -->
                </div><!-- end col -->

                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Useful Links</h4>
                        </div><!-- end section-title -->
                        <ul>
                            <li><a href="#">Delivery Time</a></li>
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Secure Payment</a></li>
                        </ul>
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- container -->
    </footer>

    <div class="copyrights text-center">
        <p>Powered by HTML5 CSS3 Bootstrap - Designed by TemplateVisual Pvt Ltd © 2015</p>
    </div><!-- end copy -->

    <div class="backtotop"><i class="fa fa-arrow-up"></i> </div>

</div><!-- end wrapper -->

    <!-- Template core JavaScript's
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
    <script src="js/parallax.js"></script>
    <!-- SLIDER REV -->
    <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script>
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution(
            {
            dottedOverlay:"none",
            delay:16000,
            startwidth:1170,
            startheight:620,
            hideThumbs:200,
            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,
            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview4",
            touchenabled:"on",
            onHoverStop:"on",
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
            parallaxDisableOnMobile:"off",
            keyboardNavigation:"off",
            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,
            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,
            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,
            shadow:0,
            fullWidth:"on",
            fullScreen:"off",
            spinner:"spinner4",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            forceFullWidth:"off",
            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0,
            fullScreenOffsetContainer: ""
            });
        });
    </script>

</body>

<!-- Mirrored from templatevisual.com/demo/kalista/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Oct 2015 14:18:39 GMT -->
</html>