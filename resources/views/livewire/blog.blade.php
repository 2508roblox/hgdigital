<div>

    <head>

        <title>Tin Tức - HGDIGITAL.SITE</title>

        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/fontawesome.css">
        <link rel="stylesheet" href="/assets/css/animate.css">
        <link rel="stylesheet" href="/assets/css/swiper.min.css">
        <link rel="stylesheet" href="/assets/css/slick.css">
        <link rel="stylesheet" href="/assets/css/odometer.css">
        <link rel="stylesheet" href="/assets/css/nice-select.css">
        <link rel="stylesheet" href="/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="/assets/css/cursor.css">
        <link rel="stylesheet" href="/assets/css/custom-font.css">
        <link rel="stylesheet" href="/assets/css/main.css">
    </head>

    <body class="sco_agency">

        <!-- backtotop - start -->
        <div class="xb-backtotop">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->

        <!-- Preloader - Start -->
        <div id="xb-loadding" class="xb-loader">
            <div class="xb-dual-ring"></div>
        </div>
        <!-- Preloader - End -->

        <div class="body_wrap">

            <!-- header start -->
            @livewire('inc.header-blog')
            <!-- header end -->

            <!-- main area start  -->
            <main>
                <!-- page title start  -->
                <section class="page-title  pt-200 pos-rel bg_img" data-background="/assets/img/bg/page_bg01.jpg">
                    <div class="container">
                        <div class="page-title-wrap sd-title-wrap">
                            <div class="row mt-none-30 align-items-end">
                                <div class="col-lg-9 mt-30">
                                    <div class="page-title-box">
                                        <span class="sub-title"><img src="/assets/img/icon/magic-icon.svg" alt="">
                                            Blog</span>
                                        <h2 class="title">Chuyên sâu từ blog SEO & CNTT - Nguồn cảm hứng cho thành công.</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 mt-30">
                                    <div class="sd-right-img pos-rel">
                                        <img src="/assets/img/hero/cd-img02.png" alt="">
                                        <div class="sd-arrow-shape style-2">
                                            <img class="xbzoominzoomup" src="/assets/img/shape/brd_shape.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- page title end  -->

                <!-- blog-slide end  -->
                <div class="blog pt-70">
                    <div class="container">
                        <div class="blog-slider swiper-container pos-rel">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="blog-slide-item">
                                        <div class="xb-item--img"><a href="/blog/detail"><img
                                                    src="/assets/img/blog/b-img01.jpg" alt=""></a></div>
                                        <div class="xb-item--holder">
                                            <a href="#!" class="xb-item--tag">software</a>
                                            <h2 class="xb-item--title border-effect"><a href="/blog/detail">How to
                                                    optimize your IT network for maximum performance.</a></h2>
                                            <p class="xb-item--content">Embark on an enlightening journey through the
                                                realm of IT solutions as we delve into the <br> latest technological
                                                advancements shaping the digital landscape.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-slide-item">
                                        <div class="xb-item--img"><img src="/assets/img/blog/b-img02.jpg" alt=""></div>
                                        <div class="xb-item--holder">
                                            <a href="#!" class="xb-item--tag">technology</a>
                                            <h2 class="xb-item--title border-effect"><a href="/blog/detail">How to
                                                    perform a comprehensive SEO audit step by step guide.</a></h2>
                                            <p class="xb-item--content">Performing a comprehensive SEO audit involves a
                                                systematic analysis of your website to <br> identify areas for
                                                improvement and ensure that it aligns with best practices.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-slide-item">
                                        <div class="xb-item--img"><img src="/assets/img/blog/b-img01.jpg" alt=""></div>
                                        <div class="xb-item--holder">
                                            <a href="#!" class="xb-item--tag">software</a>
                                            <h2 class="xb-item--title border-effect"><a href="/blog/detail">How to
                                                    optimize your IT network for maximum performance.</a></h2>
                                            <p class="xb-item--content">Embark on an enlightening journey through the
                                                realm of IT solutions as we delve into the <br> latest technological
                                                advancements shaping the digital landscape.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-slide-item">
                                        <div class="xb-item--img"><img src="/assets/img/blog/b-img02.jpg" alt=""></div>
                                        <div class="xb-item--holder">
                                            <a href="#!" class="xb-item--tag">technology</a>
                                            <h2 class="xb-item--title border-effect"><a href="/blog/detail">How to
                                                    perform a comprehensive SEO audit step by step guide.</a></h2>
                                            <p class="xb-item--content">Performing a comprehensive SEO audit involves a
                                                systematic analysis of your website to <br> identify areas for
                                                improvement and ensure that it aligns with best practices.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="blog-item_button">
                                <div class="blog-swiper-btn swiper-button-prev"><img
                                        src="/assets/img/icon/prev-icon.png" alt=""></div>
                                <div class="blog-swiper-btn swiper-button-next"><img
                                        src="/assets/img/icon/next-icon.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- blog-slide end  -->

                <!-- blog content start  -->
                <section class="blog_details_section pb-130 mt-120">
                    <div class="container">
                        <div class="row mt-none-30 g-0 align-items-start">
                            <div class="col-lg-8 mt-30">
                                <div class="blog_details_content">
                                    @foreach ($blogs as $blog)
                                    <div class="blog_details_item ul_li">
                                        <div class="xb-item--img"><a href="#!"><img src="{{ Storage::url($blog->thumbnail) }}"
                                                    alt=""></a></div>
                                        <div class="xb-item--holder">
                                            <span class="xb-item--text">{{ $blog->category->name }}</span>
                                            <h3 class="xb-item--title border-effect"><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></h3>
                                            <span class="xb-item--content">{{ Str::limit($blog->short_description, 100) }}</span>
                                            <div class="xb-item--button mt-50">
                                                <a href="/blog/{{ $blog->slug }}">Xem chi tiết <i class="far fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <ul class="blog-pagination ul_li">
                                        <li><a href="#!"><i class="fas fa-chevron-double-left"></i></a></li>
                                        <li><a href="#!">1</a></li>
                                        <li class="active"><a href="#!">2</a></li>
                                        <li><a href="#!">3</a></li>
                                        <li><a href="#!"><i class="fas fa-chevron-double-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-30">
                                <div class="sidebar">
                                    <div class="sidebar_widget">
                                        <h3 class="sidebar_widget_title">Search</h3>
                                        <div class="form-group">
                                            <input class="form-control" type="search" name="search" placeholder="">
                                            <button type="submit" class="search_icon">
                                                <img src="/assets/img/icon/search-icon.svg" alt="Icon Search">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="sidebar_widget ">
                                        <h3 class="sidebar_widget_title ">Bài viết nổi bật</h3>
                                        <ul class="recent_post_block list-unstyled ">
                                            @foreach ($relatedPosts as $post)
                                                <li class="recent_post_item ">
                                                    <h3 class="post-title border-effect-2 "><a
                                                            href="/blog/{{ $post->slug }} ">{{ $post->title }}</a></h3>
                                                    <span><img src="/assets/img/icon/profile-circle.svg " alt=" ">By
                                                        ADMIN</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="sidebar_widget ">
                                        <h3 class="sidebar_widget_title ">Danh mục</h3>
                                        <ul class="category_list_block list-unstyled ">
                                            @foreach ($categories as $category)
                                                <li>
                                                    <a href="# ">
                                                        <span><i class="far fa-arrow-right "></i>
                                                            {{ $category->name }}</span>
                                                        <span>({{ $category->blogs->count() }})</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="sidebar_widget ">
                                            <h3 class="sidebar_widget_title ">Tags</h3>
                                            <ul class="tags_block list-unstyled ">
                                                @foreach ($tags as $tag)
                                                <li><a href="#! ">{{ $tag->name }}</a></li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <!-- blog content end -->


                <!-- cta section start  -->
                @livewire('inc.footer-cta')
                <!-- cta section end  -->

            </main>
            <!-- main area end  -->

            <!-- footer strt -->
            @livewire('inc.footer-blog')

            <!-- footer end -->

        </div>

        <!-- jquery include -->
        <script src="/assets/js/jquery-3.7.1.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/swiper.min.js"></script>
        <script src="/assets/js/slick.min.js"></script>
        <script src="/assets/js/gsap.js"></script>
        <script src="/assets/js/wow.min.js"></script>
        <script src="/assets/js/appear.js"></script>
        <script src="/assets/js/parallaxie.js"></script>
        <script src="/assets/js/parallax-scroll.js"></script>
        <script src="/assets/js/odometer.min.js"></script>
        <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="/assets/js/isotope.pkgd.min.js"></script>
        <script src="/assets/js/cursor-bundle.js"></script>
        <script src="/assets/js/easing.min.js"></script>
        <script src="/assets/js/scrollspy.js"></script>
        <script src="/assets/js/jquery.nice-select.min.js"></script>
        <script src="/assets/js/jquery.marquee.min.js"></script>
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="/assets/js/main.js"></script>

    </body>

</div>
