<div>

    <head>

        <!--========= Required meta tags =========-->

        <title>Dự Án Đã Làm - HGDIGITAL.SITE</title>


        <!-- css include -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/swiper.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/odometer.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/cursor.css">
        <link rel="stylesheet" href="assets/css/custom-font.css">
        <link rel="stylesheet" href="assets/css/main.css">
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

        <div class="body_wrap o-hidden">

            <!-- header start -->
            @livewire('inc.header-blog')
            <!-- header end -->

            <!-- main area start  -->
            <main>
                <!-- page title start  -->
                <section class="page-title pt-200 pos-rel bg_img " data-background="assets/img/bg/page_bg01.jpg ">
                    <div class="container ">
                        <div class="page-title-wrap ">
                            <div class="row mt-none-30 align-items-end ">
                                <div class="col-lg-9 mt-30 ">
                                    <div class="page-title-box ">
                                        <span class="sub-title "><img src="assets/img/icon/eye-icon.svg "
                                                alt=" "> Dự Án</span>
                                        <h2 class="title ">Khám phá các dự án đã thực hiện, nổi bật với những giải pháp SEO và CNTT chuyển mình.

                                        </h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 mt-30 ">
                                    <div class="count-box ">
                                        <h2 class="number ">10<span class="suffix ">+</span></h2>
                                        <span class="text ">our most popular <br> casestudy</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- page title end  -->

                <!-- casestudy section start  -->
                <section class="casestudy pt-70 pb-130 ">
                    <div class="container ">
                        <div class="row justify-content-center ">
                            <div class="col-lg-8">
                                <div class="team-menu casestudy-menu">
                                    <button class="active" data-filter="*">View all</button>
                                    @foreach($categories as $category)
                                        <button data-filter=".cat{{ $category->id }}">{{ $category->name }}</button>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="casestudy-content mt-70 ">
                            <div class="row grid mt-none-30">
                                @foreach($websites as $website)
                                    <div class="col-lg-4 col-md-6 grid-item cat{{ $website->category_id }} mt-30">
                                        <div class="casestudy-item">
                                            <div class="casestudy-img" style="max-height: 300px;">
                                                <a href="{{ route('project.detail', ['slug' => $website->slug]) }}"> <!-- Link to the project detail route -->
                                                    <img style="height: 100%; object-fit: cover;" src="{{ asset('storage/' . $website->main_image) }}" alt="{{ $website->name }}">
                                                </a>
                                                <div class="content_wrap">
                                                    <h3 class="item_title">{{ $website->name }}</h3>
                                                    <span class="item_tag">{{ $website->category->name }}</span> <!-- Display category name -->
                                                </div>
                                            </div>
                                            <a class="xb-overlay" href="{{ route('project.detail', ['slug' => $website->slug]) }}"></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class=" text-center xb-btn mt-55 ">
                                <a href="casestudy.html " class="thm-btn thm-btn--aso thm-btn--aso_black ">Load more
                                    casestudy</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- casestudy section end  -->

                <!-- cta section start  -->
                @livewire('inc.footer-cta')

                <!-- cta section end  -->

            </main>
            <!-- main area end  -->

            <!-- footer strt -->
            @livewire('inc.footer-blog')
        </div>

        <!-- jquery include -->
        <script src="assets/js/jquery-3.7.1.min.js "></script>
        <script src="assets/js/bootstrap.bundle.min.js "></script>
        <script src="assets/js/swiper.min.js "></script>
        <script src="assets/js/slick.min.js "></script>
        <script src="assets/js/gsap.js "></script>
        <script src="assets/js/wow.min.js "></script>
        <script src="assets/js/appear.js "></script>
        <script src="assets/js/parallaxie.js "></script>
        <script src="assets/js/parallax-scroll.js "></script>
        <script src="assets/js/odometer.min.js "></script>
        <script src="assets/js/imagesloaded.pkgd.min.js "></script>
        <script src="assets/js/isotope.pkgd.min.js "></script>
        <script src="assets/js/cursor-bundle.js "></script>
        <script src="assets/js/easing.min.js "></script>
        <script src="assets/js/scrollspy.js "></script>
        <script src="assets/js/jquery.nice-select.min.js "></script>
        <script src="assets/js/jquery.marquee.min.js "></script>
        <script src="assets/js/jquery.magnific-popup.min.js "></script>
        <script src="assets/js/main.js "></script>

    </body>

</div>
