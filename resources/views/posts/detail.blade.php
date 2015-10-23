@include('include.header1')
        <div class="page-wrapper white-section clearfix">
            <div class="row">
                <div class="col-md-8">
                    <h2>Blog</h2>
                </div><!-- end col -->

                <div class="col-md-4">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ol>
                </div>
            </div><!-- end row -->

            <hr>

            <!-- START BUILDER -->

            <div class="row">
                <div id="content" class="col-md-9 col-sm-12">
                    <div id="singleblog" class="blog-wrap">
                        <div class="blog-media">
                            <a href="blog-single.html" title=""><img src="{{ asset('upload/blog_01.jpg') }}" alt="" class="img-responsive"></a>
                        </div><!-- end blog media -->
                        <div class="post-date">
                            <span class="day">{{ date_format($post->post_date, 'd') }}</span>
                            <span class="month">{{ date_format($post->post_date, 'M') }}</span>
                        </div><!-- end post-date -->
                        <div class="post-content">
                            <h2><a href="blog-single.html">{{ $post->post_title }}</a></h2>
                                <div class="post-meta">
                                <span><i class="fa fa-user"></i> <a href="#">{{ get_the_author_meta( 'display_name', $post->post_author ) }}</a> </span>
                                <span><i class="fa fa-tag"></i>
                                    @foreach (get_the_category($post->ID) as $cat)
                                        <a href="#">{{ $cat->name }}</a>
                                    @endforeach
                                </span
                                <span><i class="fa fa-comments"></i> <a href="#">{{ $post->comment_count }} Comments</a></span>
                            </div><!-- end post-meta -->

                            {{ $post->post_content }}
                        </div><!-- post-content -->
                    </div><!-- end blog-wrapper -->

                        <div class="comment-box">
                            <div class="page-title">
                                <h2>{{ $post->comment_count }} Comments</h2>
                            </div>

                            <hr>

                            <div class="comment-list-wrapper">
                                <div class="comment-list">
                                    @foreach($comments as $comment)
                                        @if($comment->comment_parent == 0)
                                        <div class="media">
                                            <div class="pull-left relative">
                                                <img class="img-responsive img-circle" src="{{ asset('upload/comment_01.png') }}" alt="">
                                            </div>
                                            <div class="pull-right relative">
                                                <a href="#{{ $comment->comment_ID }}" class="btn btn-primary btn-sm">Reply</a>
                                            </div>
                                            <div class="media-body">
                                                <h3>{{ $comment->comment_author }}</h3>
                                                <span>{{ $comment->comment_date }}</span>
                                                <p>{{ $comment->comment_content }}</p>
                                            </div><!-- end media-body -->
                                        </div><!-- end media -->
                                        @foreach (get_comments( array('post_id' => $post->ID, 'parent' => $comment->comment_ID) ) as $comment_child)
                                            <div class="media reply-comment">
                                                <div class="pull-left relative">
                                                    <img class="img-responsive img-circle" src="{{ asset('upload/comment_02.png') }}" alt="">
                                                </div>
                                                <div class="pull-right relative">
                                                    <a href="#{{ $comment->comment_ID }}" class="btn btn-primary btn-sm">Reply</a>
                                                </div>
                                                <div class="media-body">
                                                    <h3>{{ $comment_child->comment_author }}</h3>
                                                    <span>{{ $comment_child->comment_date }}</span>
                                                    <p>{{ $comment_child->comment_content }}</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        @endforeach
                                        @endif
                                    @endforeach
                                </div><!-- end comment-list -->
                            </div><!-- end comment-list-wrapper -->

                            <div class="page-title">
                                <h2>Leave a Comment</h2>
                            </div>

                            <hr>

                            <div class="comment-form-wrap">
                                <form class="form-horizontal" role="form" method="post">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="website" class="col-sm-2 control-label">Website</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="website" name="website" placeholder="www.yoursite.com" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="message" class="col-sm-2 control-label">Message</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="message" rows="4" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <input id="submit" name="submit" type="submit" value="Submit Comment" class="btn btn-primary">
                                        </div>
                                    </div>
                                </form>
                            </div><!-- end comment-form-wrap -->
                        </div><!-- end comment -->

                        <br>

                </div><!-- end content -->

                @include('include.right-sidebar')

            </div><!-- end row -->
        </div><!-- end white -->

        <div class="white-section withtitle clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title bgcolor">
                        <h4>From the <span>Shop</span></h4>
                    </div><!-- end section-title -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div id="owl-featured">
                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <a class="hover-image" href="shop-single.html" title="">
                            <div class="img-rotate">
                                <span class="badge">BEST SELLING</span>
                                <img src="{{ asset('upload/shop_07.jpg') }}" alt="">
                                <img src="{{ asset('upload/shop_07_bg.jpg') }}" class="rotate-image" alt="">
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
                                <img src="{{ asset('upload/shop_08.jpg') }}" alt="">
                                <img src="{{ asset('upload/shop_08_bg.jpg') }}" class="rotate-image" alt="">
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
                                <img src="{{ asset('upload/shop_09.jpg') }}" alt="">
                                <img src="{{ asset('upload/shop_09_bg.jpg') }}" class="rotate-image" alt="">
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
                                <img src="{{ asset('upload/shop_10.jpg') }}" alt="">
                                <img src="{{ asset('upload/shop_10_bg.jpg') }}" class="rotate-image" alt="">
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
                                <img src="{{ asset('upload/shop_07.jpg') }}" alt="">
                                <img src="{{ asset('upload/shop_07_bg.jpg') }}" class="rotate-image" alt="">
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
                                <img src="{{ asset('upload/shop_08.jpg') }}" alt="">
                                <img src="{{ asset('upload/shop_08_bg.jpg') }}" class="rotate-image" alt="">
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
                                <img src="{{ asset('upload/shop_09.jpg') }}" alt="">
                                <img src="{{ asset('upload/shop_09_bg.jpg') }}" class="rotate-image" alt="">
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
                                <img src="{{ asset('upload/shop_10.jpg') }}" alt="">
                                <img src="{{ asset('upload/shop_10_bg.jpg') }}" class="rotate-image" alt="">
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
        </div><!-- end white-section -->

    </div><!-- end container -->

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
        <img src="{{ asset('images/footer.png') }}" alt="" class="img-responsive">
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
@include('include.footer')