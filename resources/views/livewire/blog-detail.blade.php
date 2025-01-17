<div>
    <head>


        <title>{{ $blog->title }} - HGDIGITAL.SITE</title>


        <!-- css include -->
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
                <section class="page-title pt-200 pos-rel bg_img " data-background="/assets/img/bg/page_bg01.jpg ">
                    <div class="container ">
                        <div class="page-title-wrap sd-title-wrap ">
                            <div class="row mt-none-30 align-items-end ">
                                <div class="col-lg-9 mt-30 ">
                                    <div class="page-title-box ">
                                        <span class="sub-title "><img src="/assets/img/icon/magic-icon.svg " alt=" "> Chi tiết bài viết</span>
                                        <h2 class="title ">Những hiểu biết chuyên sâu từ blog SEO & Giải pháp CNTT của chúng tôi - nguồn tài nguyên cho thành công của bạn</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 mt-30 ">
                                    <div class="sd-right-img pos-rel ">
                                        <img src="/assets/img/hero/cd-img02.png " alt=" ">
                                        <div class="sd-arrow-shape style-2 ">
                                            <img class="xbzoominzoomup " src="/assets/img/shape/brd_shape.png " alt=" ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- page title end  -->

                <!-- blog content start  -->
                <section class="blog_details_section pt-70 ">
                    <div class="container ">
                        <div class="item-details_image pos-rel mb-80 ">
                            <img src="{{ Storage::url($blog->image) }}" alt=" " style="width: 100%; height: auto;">
                        </div>
                        <div class="item_details_content pb-80 ">
                            <ul class="post_meta ul_li list-unstyled ">
                                <li>
                                    <a href="#! ">
                                        <span class="meta_label1 ">{{ $blog->category->name }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#! ">
                                        <span class="meta_icon ">
                                <img src="/assets/img/icon/icon_calendar.svg " alt="Icon Calendar ">
                              </span>
                                        <span class="meta_label ">{{ $blog->created_at->format('d/m/Y') }}</span>
                                    </a>
                                </li>
                            </ul>
                            <h2 class="item_details_heading ">Exploring IT solutions unraveling the latest digital advancements & they are revolutionizing.</h2>
                            <p class="mb-40 ">Embark on an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.Embark <br> on an enlightening journey through the realm of IT solutions as
                                we delve into the latest technological advancements shaping the digital landscape.</p>
                            <div class="row ">
                                <div class="col-md-6 ">
                                    <ul class="post_meta list-unstyled ul_li ">
                                        <li>
                                            <a href="#! ">
                                                <span class="meta_icon ">
                                    <img src="/assets/img/icon/user-black.svg " alt="Icon User ">
                                  </span>
                                                <span class="meta_label ">by ADMIN</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#! ">
                                                <span class="meta_icon ">
                                    <img src="/assets/img/icon/icon_comment.svg " alt="Icon Comment ">
                                  </span>
                                                <span class="meta_label ">{{ $blog->comments }} Bình luận</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#! ">
                                                <span class="meta_icon ">
                                    <img src="/assets/img/icon/icon_eye.svg " alt="Icon Eye ">
                                  </span>
                                                <span class="meta_label ">{{ $blog->views }} Lượt xem</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 ">
                                    <ul class="post_meta list-unstyled ul_li justify-content-md-end ">
                                        <li>
                                            <a href="#! ">
                                                <span class="meta_icon ">
                                    <img src="/assets/img/icon/icon_link.svg " alt="Icon Link ">
                                  </span>
                                                <span class="meta_label ">Chia sẻ</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#! ">
                                                <span class="meta_icon ">
                                    <img src="/assets/img/icon/icon_bookmark.svg " alt="Icon Bookmark ">
                                  </span>
                                                <span class="meta_label ">Lưu</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="mt-5 ">
                        </div>
                        <div class="row mt-none-30 g-0 align-items-start ">
                            <div class="col-lg-8 mt-30 ">
                                <div class="blog_details_content ">
                                    <div class="post_audio ">
                                        <button class="audio_play_btn " type="button ">
                                        <i class="fas fa-play "></i>
                                      <span>6:24</span>
                                      <span>Listen to this article!</span>
                                    </button>
                                    </div>
                               {!! $blog->content !!}

                                </div>
                            </div>
                            <div class="col-lg-4 mt-30 ">
                                <div class="sidebar ">
                                    <div class="sidebar_widget ">
                                        <h3 class="sidebar_widget_title ">Search</h3>
                                        <div class="form-group ">
                                            <input class="form-control " type="search " name="search " placeholder=" ">
                                            <button type="submit " class="search_icon ">
                                        <img src="/assets/img/icon/search-icon.svg " alt="Icon Search ">
                                      </button>
                                        </div>
                                    </div>
                                    <div class="sidebar_widget ">
                                        <h3 class="sidebar_widget_title ">Bài viết nổi bật</h3>
                                        <ul class="recent_post_block list-unstyled ">
                                            @foreach ($relatedPosts as $post)
                                            <li class="recent_post_item ">
                                                <h3 class="post-title border-effect-2 "><a href="/blog/{{ $post->slug }} ">{{ $post->title }}</a></h3>
                                                <span><img src="/assets/img/icon/profile-circle.svg " alt=" ">By ADMIN</span>
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
                                                    <span><i class="far fa-arrow-right "></i> {{ $category->name }}</span>
                                                    <span>({{ $category->blogs->count() }})</span>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
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
                        <div class="related-blog pt-130 pb-130 ">
                            <h2 class="related-blog-title ">Bài viết liên quan</h2>
                            <div class="row mt-none-30 ">
                                @foreach ($blogSameCategory as $blog)
                                <div class="col-lg-4 col-md-6 mt-30 ">
                                    <div class="blog-details_wrap ">
                                        <div class="blog-details_item ">
                                            <div class="xb-item--img " style="width: 100%;">
                                            <a href="/blog/{{ $blog->slug }} "><img src="{{ Storage::url($blog->thumbnail) }}" alt=" " style="width: 100%; height: auto;"></a>
                                            </div>
                                            <div class="xb-item--holder ">
                                                <div class="xb-item--meta ul_li ">
                                                    <span class="xb-item--meta_label1 ">{{ $blog->category->name }}</span>
                                                    <span class="xb-item--meta_label ">By ADMIN</span>
                                                </div>
                                                <h3 class="item_details_info_heading border-effect ">
                                                    <a href="/blog/{{ $blog->slug }} ">{{ $blog->title }}</a></h3>
                                                <a href="/blog/{{ $blog->slug }} " class="xb-item--det-btn ">Xem thêm <i class="far fa-long-arrow-right "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- cta section start  -->
                    <section class="cta ">
                        <div class="container ">
                            <div class="cta-wrap ">
                                <div class="cta-inner ul_li_between ">
                                    <div class="xb-item--holder wow fadeInLeft " data-wow-delay="100ms " data-wow-duration="600ms ">
                                        <h2 class="xb-item--title ">Stop wasting money on bad SEO.</h2>
                                        <span class="xb-item--content ">Book a free consultation for the SEO results you need.</span>
                                        <div class="xb-btn mt-45 ">
                                            <a href="/contact " class="thm-btn thm-btn--aso thm-btn--aso_white ">Book a free consultation</a>
                                        </div>
                                    </div>
                                    <div class="cta-right_img wow fadeInRight " data-wow-delay="150ms " data-wow-duration="600ms ">
                                        <img class="updown " src="/assets/img/cta/clip-bord.png " alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- cta section end  -->
                </section>
                <!-- blog content end -->

            </main>
            <!-- main area end  -->

            <!-- footer strt -->
      @livewire('inc.footer-blog')
            <!-- footer end -->

        </div>

        <!-- jquery include -->
        <script src="/assets/js/jquery-3.7.1.min.js "></script>
        <script src="/assets/js/bootstrap.bundle.min.js "></script>
        <script src="/assets/js/swiper.min.js "></script>
        <script src="/assets/js/slick.min.js "></script>
        <script src="/assets/js/gsap.js "></script>
        <script src="/assets/js/wow.min.js "></script>
        <script src="/assets/js/appear.js "></script>
        <script src="/assets/js/parallaxie.js "></script>
        <script src="/assets/js/parallax-scroll.js "></script>
        <script src="/assets/js/odometer.min.js "></script>
        <script src="/assets/js/imagesloaded.pkgd.min.js "></script>
        <script src="/assets/js/isotope.pkgd.min.js "></script>
        <script src="/assets/js/cursor-bundle.js "></script>
        <script src="/assets/js/easing.min.js "></script>
        <script src="/assets/js/scrollspy.js "></script>
        <script src="/assets/js/jquery.nice-select.min.js "></script>
        <script src="/assets/js/jquery.marquee.min.js "></script>
        <script src="/assets/js/jquery.magnific-popup.min.js "></script>
        <script src="/assets/js/main.js "></script>

    </body>

</div>
