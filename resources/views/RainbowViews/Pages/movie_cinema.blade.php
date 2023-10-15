<!-- prs navigation End -->
<!-- prs title wrapper Start -->
<div class="prs_title_main_sec_wrapper">
    <div class="prs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_title_heading_wrapper">
                    <h2>Released Movie</h2>
                    <ul>
                        <li><a href="#">Home</a>
                        </li>
                        <li>&nbsp;&nbsp; >&nbsp;&nbsp; Released Movie</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- prs title wrapper End -->
<!-- prs mc slider wrapper Start -->
<div class="prs_mc_slider_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_heading_section_wrapper">
                    <h2>Released Movie</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_mc_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{ $assetPathRainbow }}/images/content/movie_category/slider_img1.jpg"
                                alt="about_img">
                        </div>
                        <div class="item">
                            <img src="{{ $assetPathRainbow }}/images/content/movie_category/slider_img2.jpg"
                                alt="about_img">
                        </div>
                        <div class="item">
                            <img src="{{ $assetPathRainbow }}/images/content/movie_category/slider_img3.jpg"
                                alt="about_img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- prs mc slider wrapper End -->
<!-- prs mc category slidebar Start -->
<div class="prs_mc_category_sidebar_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                <div class="prs_mcc_left_side_wrapper">
                    <div class="prs_mcc_left_searchbar_wrapper">
                        <form action="/rainbow/search" method="get">

                            <input type="text" name="keySearch" placeholder="Search Movie">
                            <button type="submit"><i class="flaticon-tool"></i>
                        </form>
                        </button>
                    </div>
                    <div class="prs_mcc_bro_title_wrapper">
                        <h2>browse title</h2>
                        <ul>
                            <li>
                                <i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a
                                    href="/rainbow/movie_cinema">All <span>	
									</span></a>
                            </li>
                            @foreach ($listCinema as $mc)
                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a
                                        href="/rainbow/searchcinema?cinema={{ $mc->Id }}">{{ $mc->Name }}
                                        <span>{{ $mc->tong }}</span></a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="prs_mcc_event_title_wrapper">
                        <h2>Top Events</h2>
                        <img src="{{ $assetPathRainbow }}/images/content/movie_category/event_img.jpg" alt="event_img">
                        <h3><a href="#">Music Event in india</a></h3>
                        <p>Pune <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                    class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
                        </p>
                        <h4>June 07 <span>08:00-12:00 pm</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="prs_mcc_right_side_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="prs_mcc_right_side_heading_wrapper">
                                <h2>Our Top Movies</h2>
                                <ul class="nav nav-pills">
                                    <li class="active"><a data-toggle="pill" href="#grid"><i
                                                class="fa fa-th-large"></i></a>
                                    </li>
                                    <li><a data-toggle="pill" href="#list"><i class="fa fa-list"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="tab-content">
                                    <div id="list" class="tab-pane fade in active">
                                        <div class="row">
                                            @if (sizeof($listMovie) == 0)
                                            <p class='text-danger'> No data found </p>
                                            @else
                                            @for ($i = 0; $i < sizeof($listMovie); $i++)
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="prs_mcc_list_movie_main_wrapper">
                                                    <div class="prs_mcc_list_movie_img_wrapper">
                                                        <img style="width:265px;height:325px;"
                                                                src="{{ $listMovie[$i]->photos[0]->Src }}"
                                                                alt="movie_img" />
                                                    </div>
                                                    <div class="prs_mcc_list_movie_img_cont_wrapper">
                                                        <div class="prs_mcc_list_left_cont_wrapper">
                                                            <h2>{{$listMovie[$i]->Name}}</h2>
                                                            <p>{{$listMovie[$i]->movieCategory->Name}} &nbsp;&nbsp;&nbsp;<i
                                                                    class="fa fa-star"></i><i
                                                                    class="fa fa-star"></i><i
                                                                    class="fa fa-star"></i><i
                                                                    class="fa fa-star-o"></i><i
                                                                    class="fa fa-star-o"></i>
                                                            </p>
                                                            <h4>Movie Director - {{$listMovie[$i]->director->Name}}</h4>
                                                        </div>
                                                        <div class="prs_mcc_list_right_cont_wrapper"> <a
                                                                href="/rainbow/movie_booking/{{$listMovie[$i]->Id}}"><i
                                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                                        </div>
                                                        <div class="prs_mcc_list_bottom_cont_wrapper">
                                                            <p style="width: 500px;
                                                            overflow: hidden;
                                                            white-space: nowrap; 
                                                            text-overflow: ellipsis;">{{$listMovie[$i]->Description}}</p>
                                                            <ul>
                                                                <li><a class="button test-popup-link" rel="external" href="{{ $listMovie[$i]->VideoTrailer }}">View Trailer</a>
                                                                </li>
                                                                <li><a href="/rainbow/movie_single/{{ $listMovie[$i]->Id }}">View Details</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor
                                            {{ $listMovie->links() }}
                                    @endif
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 visible-sm visible-xs">
                    <div class="prs_mcc_left_side_wrapper">
                        <div class="prs_mcc_left_searchbar_wrapper">
                            <input type="text" placeholder="Search Movie">
                            <button><i class="flaticon-tool"></i>
                            </button>
                        </div>
                        <div class="prs_mcc_bro_title_wrapper">
                            <h2>browse title</h2>
                            <ul>
                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">All
                                        <span>23,124</span></a>
                                </li>
                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Action
                                        <span>512</span></a>
                                </li>
                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Romantic
                                        <span>548</span></a>
                                </li>
                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Love
                                        <span>557</span></a>
                                </li>
                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Musical
                                        <span>554</span></a>
                                </li>
                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Drama
                                        <span>567</span></a>
                                </li>
                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Thriller
                                        <span>689</span></a>
                                </li>
                                <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Horror
                                        <span>478</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="prs_mcc_event_title_wrapper">
                            <h2>Top Events</h2>
                            <img src="{{ $assetPathRainbow }}/images/content/movie_category/event_img.jpg"
                                alt="event_img">
                            <h3><a href="#">Music Event in india</a></h3>
                            <p>Mumbai & Pune <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
                                        class="fa fa-star-o"></i></span>
                            </p>
                            <h4>June 07 <span>08:00-12:00 pm</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs mc category slidebar End -->
    <!-- prs theater Slider Start -->
    <div class="prs_theater_main_slider_wrapper">
        <div class="prs_theater_img_overlay"></div>
        <div class="prs_theater_sec_heading_wrapper">
            <h2>TOP MOVIES IN THEATRES</h2>
        </div>
        <div class="wrap-album-slider">
            <ul class="album-slider">
                <li class="album-slider__item">
                    <figure class="album">
                        <div class="prs_upcom_movie_box_wrapper">
                            <div class="prs_upcom_movie_img_box">
                                <img src="{{ $assetPathRainbow }}/images/content/up1.jpg" alt="movie_img" />
                                <div class="prs_upcom_movie_img_overlay"></div>
                                <div class="prs_upcom_movie_img_btn_wrapper">
                                    <ul>
                                        <li><a href="#">View Trailer</a>
                                        </li>
                                        <li><a href="#">View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="prs_upcom_movie_content_box">
                                <div class="prs_upcom_movie_content_box_inner">
                                    <h2><a href="#">Busting Car</a></h2>
                                    <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="prs_upcom_movie_content_box_inner_icon">
                                    <ul>
                                        <li><a href="movie_booking.html"><i
                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End album body -->
                    </figure>
                    <!-- End album -->
                </li>
                <!-- End album slider item -->
                <li class="album-slider__item">
                    <figure class="album">
                        <div class="prs_upcom_movie_box_wrapper">
                            <div class="prs_upcom_movie_img_box">
                                <img src="{{ $assetPathRainbow }}/images/content/up2.jpg" alt="movie_img" />
                                <div class="prs_upcom_movie_img_overlay"></div>
                                <div class="prs_upcom_movie_img_btn_wrapper">
                                    <ul>
                                        <li><a href="#">View Trailer</a>
                                        </li>
                                        <li><a href="#">View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="prs_upcom_movie_content_box">
                                <div class="prs_upcom_movie_content_box_inner">
                                    <h2><a href="#">Busting Car</a></h2>
                                    <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="prs_upcom_movie_content_box_inner_icon">
                                    <ul>
                                        <li><a href="movie_booking.html"><i
                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End album body -->
                    </figure>
                    <!-- End album -->
                </li>
                <!-- End album slider item -->
                <li class="album-slider__item">
                    <figure class="album">
                        <div class="prs_upcom_movie_box_wrapper">
                            <div class="prs_upcom_movie_img_box">
                                <img src="{{ $assetPathRainbow }}/images/content/up3.jpg" alt="movie_img" />
                                <div class="prs_upcom_movie_img_overlay"></div>
                                <div class="prs_upcom_movie_img_btn_wrapper">
                                    <ul>
                                        <li><a href="#">View Trailer</a>
                                        </li>
                                        <li><a href="#">View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="prs_upcom_movie_content_box">
                                <div class="prs_upcom_movie_content_box_inner">
                                    <h2><a href="#">Busting Car</a></h2>
                                    <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="prs_upcom_movie_content_box_inner_icon">
                                    <ul>
                                        <li><a href="movie_booking.html"><i
                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End album body -->
                    </figure>
                    <!-- End album -->
                </li>
                <!-- End album slider item -->
                <li class="album-slider__item">
                    <figure class="album">
                        <div class="prs_upcom_movie_box_wrapper">
                            <div class="prs_upcom_movie_img_box">
                                <img src="{{ $assetPathRainbow }}/images/content/up4.jpg" alt="movie_img" />
                                <div class="prs_upcom_movie_img_overlay"></div>
                                <div class="prs_upcom_movie_img_btn_wrapper">
                                    <ul>
                                        <li><a href="#">View Trailer</a>
                                        </li>
                                        <li><a href="#">View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="prs_upcom_movie_content_box">
                                <div class="prs_upcom_movie_content_box_inner">
                                    <h2><a href="#">Busting Car</a></h2>
                                    <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="prs_upcom_movie_content_box_inner_icon">
                                    <ul>
                                        <li><a href="movie_booking.html"><i
                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End album body -->
                    </figure>
                    <!-- End album -->
                </li>
                <!-- End album slider item -->
                <li class="album-slider__item">
                    <figure class="album">
                        <div class="prs_upcom_movie_box_wrapper">
                            <div class="prs_upcom_movie_img_box">
                                <img src="{{ $assetPathRainbow }}/images/content/up5.jpg" alt="movie_img" />
                                <div class="prs_upcom_movie_img_overlay"></div>
                                <div class="prs_upcom_movie_img_btn_wrapper">
                                    <ul>
                                        <li><a href="#">View Trailer</a>
                                        </li>
                                        <li><a href="#">View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="prs_upcom_movie_content_box">
                                <div class="prs_upcom_movie_content_box_inner">
                                    <h2><a href="#">Busting Car</a></h2>
                                    <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="prs_upcom_movie_content_box_inner_icon">
                                    <ul>
                                        <li><a href="movie_booking.html"><i
                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End album body -->
                    </figure>
                    <!-- End album -->
                </li>
                <!-- End album slider item -->
                <li class="album-slider__item">
                    <figure class="album">
                        <div class="prs_upcom_movie_box_wrapper">
                            <div class="prs_upcom_movie_img_box">
                                <img src="{{ $assetPathRainbow }}/images/content/up6.jpg" alt="movie_img" />
                                <div class="prs_upcom_movie_img_overlay"></div>
                                <div class="prs_upcom_movie_img_btn_wrapper">
                                    <ul>
                                        <li><a href="#">View Trailer</a>
                                        </li>
                                        <li><a href="#">View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="prs_upcom_movie_content_box">
                                <div class="prs_upcom_movie_content_box_inner">
                                    <h2><a href="#">Busting Car</a></h2>
                                    <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="prs_upcom_movie_content_box_inner_icon">
                                    <ul>
                                        <li><a href="movie_booking.html"><i
                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End album body -->
                    </figure>
                    <!-- End album -->
                </li>
                <!-- End album slider item -->
                <li class="album-slider__item">
                    <figure class="album">
                        <div class="prs_upcom_movie_box_wrapper">
                            <div class="prs_upcom_movie_img_box">
                                <img src="{{ $assetPathRainbow }}/images/content/up7.jpg" alt="movie_img" />
                                <div class="prs_upcom_movie_img_overlay"></div>
                                <div class="prs_upcom_movie_img_btn_wrapper">
                                    <ul>
                                        <li><a href="#">View Trailer</a>
                                        </li>
                                        <li><a href="#">View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="prs_upcom_movie_content_box">
                                <div class="prs_upcom_movie_content_box_inner">
                                    <h2><a href="#">Busting Car</a></h2>
                                    <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="prs_upcom_movie_content_box_inner_icon">
                                    <ul>
                                        <li><a href="movie_booking.html"><i
                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End album body -->
                    </figure>
                    <!-- End album -->
                </li>
                <!-- End album slider item -->
            </ul>
            <!-- End slider -->
        </div>
    </div>
    <!-- prs theater Slider End -->
    <!-- prs patner slider Start -->
    <div class="prs_patner_main_section_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_heading_section_wrapper">
                        <h2>Our Patner’s</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_pn_slider_wraper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{ $assetPathRainbow }}/images/content/p1.jpg" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{ $assetPathRainbow }}/images/content/p2.jpg" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{ $assetPathRainbow }}/images/content/p3.jpg" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{ $assetPathRainbow }}/images/content/p4.jpg" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{ $assetPathRainbow }}/images/content/p5.jpg" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{ $assetPathRainbow }}/images/content/p6.jpg" alt="patner_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs patner slider End -->
    <!-- prs Newsletter Wrapper Start -->
    <div class="prs_newsletter_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="prs_newsletter_text">
                        <h3>Get update sign up now !</h3>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="prs_newsletter_field">
                        <input type="text" placeholder="Enter Your Email">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs Newsletter Wrapper End -->
