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
                <section class="page-title pt-200 pos-rel bg_img " data-background="{{asset("assets/img/bg/page_bg01.jpg")}} ">
                    <div class="container ">
                        <div class="page-title-wrap ">
                            <div class="row mt-none-30 align-items-end">
                                <div class="col-lg-9 mt-30">
                                    <div class="page-title-box">
                                        <span class="sub-title">
                                            <img src="{{ asset('assets/img/icon/eye-icon.svg') }}" alt=""> Dự Án
                                        </span>
                                        <h2 class="title">
                                            Khám phá dự án: <strong>{{ $website->name }}</strong> 
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 mt-30">
                                    <div class="count-box">
                                        <h2 class="number">10<span class="suffix">+</span></h2>
                                        <span class="text">our most popular <br> casestudy</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- page title end  -->

                <!-- casestudy section start  -->
                <div class="csd-img pt-70 pb-65">
                    <div class="container">
                        <div class="item-details_image pos-rel">
                            <img src="{{ asset('storage/' . $website->main_image) }}" alt="{{ $website->name }}">
                        </div>
                    </div>
                </div>
                <div class="sd-ser-content_wrap pb-90" bis_skin_checked="1">
                    <div class="container" bis_skin_checked="1">
                        <div class="sd-ser-content">
                            <h2 class="sd-title">{{ $website->name }}</h2>
                            <p class="sd-content">
                                {!! $website->description !!}
                            </p>
                            <br>
                            <p class="sd-content">
                                Duy trì sự hiện diện trực tuyến hiệu quả không chỉ nâng cao khả năng hiển thị mà còn tạo ra những tương tác có ý nghĩa với khách hàng, thúc đẩy lòng trung thành với thương hiệu và cải thiện khả năng giữ chân khách hàng. Bằng cách theo dõi các xu hướng và hành vi của đối tượng, doanh nghiệp có thể đi trước đối thủ cạnh tranh và định vị bản thân.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="csd-ser_warp" bis_skin_checked="1">
                    <div class="container" bis_skin_checked="1">
                        <div class="csd-ser_inner ul_li_between" bis_skin_checked="1">
                            <div class="csd-item ul_li" bis_skin_checked="1">
                                <div class="xb-icon" bis_skin_checked="1"><img src="{{asset('assets/img/icon/csd-icon01.svg')}}" alt=""></div>
                                <h6 class="xb-text">client : <span> innomax</span></h6>
                            </div>
                            <div class="csd-item ul_li" bis_skin_checked="1">
                                <div class="xb-icon" bis_skin_checked="1"><img src="{{asset('assets/img/icon/csd-icon02.svg')}}" alt=""></div>
                                <h6 class="xb-text">services : <span> Marketing</span></h6>
                            </div>
                            <div class="csd-item ul_li" bis_skin_checked="1">
                                <div class="xb-icon" bis_skin_checked="1"><img src="{{asset('assets/img/icon/csd-icon03.svg')}}" alt=""></div>
                                <h6 class="xb-text">completed date : <span> 20-11-2024</span></h6>
                            </div>
                            <div class="csd-item ul_li" bis_skin_checked="1">
                                <div class="xb-icon" bis_skin_checked="1"><img src="{{asset('assets/img/icon/csd-icon04.svg')}}" alt=""></div>
                                <h6 class="xb-text">location : <span> New York,NY,USA</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sd-service_wrap pt-90 pb-130" bis_skin_checked="1">
                    <div class="container" bis_skin_checked="1">
                        <div class="sd-ser-outcome" bis_skin_checked="1">
                            <div class="sd-heading" bis_skin_checked="1">
                                <h2 class="sd-title">Project requirement</h2>
                                <p class="sd-content">Our client seeks optimize presence across platforms, connecting you with your audience and driving engagement. We help you build a strong online <br> identity that boosts profitability and supports business growth.</p>
                            </div>
                            <div class="sd-list-item ul_li" bis_skin_checked="1">
                                <ul class="sd-ser-list list-unstyled">
                                    <li><img src="{{asset('assets/img/icon/check-icon.svg')}}" alt="">Platform Audit &amp; Strategy Development.</li>
                                    <li><img src="{{asset('assets/img/icon/check-icon.svg')}}" alt="">Content Creation &amp; Curation.</li>
                                    <li><img src="{{asset('assets/img/icon/check-icon.svg')}}" alt="">SEO Optimization Search Engines.</li>
                                    <li><img src="{{asset('assets/img/icon/check-icon.svg')}}" alt="">Scheduling &amp; Consistency.</li>
                                </ul>
                                <ul class="sd-ser-list list-unstyled">
                                    <li><img src="{{asset('assets/img/icon/check-icon.svg')}}" alt="">Analytics &amp; Performance Monitoring.</li>
                                    <li><img src="{{asset('assets/img/icon/check-icon.svg')}}" alt="">Community Management.</li>
                                    <li><img src="{{asset('assets/img/icon/check-icon.svg')}}" alt="">Ongoing Adjustments &amp; Reporting.</li>
                                    <li><img src="{{asset('assets/img/icon/check-icon.svg')}}" alt="">Ad Campaign Integration.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="sd-heading csd-heading pt-90" bis_skin_checked="1">
                            <h2 class="sd-title">Solution &amp; result</h2>
                            <p class="sd-content"><span>Solution:</span> Our online media management services streamline your brand's digital presence by developing tailored strategies for content creation, social media engagement, and audience targeting. We utilize data-driven insights to enhance your online visibility across multiple platforms.
                            </p>
                            <br>
                            <p class="sd-content"><span>Result:</span> By implementing these solutions, businesses experience increased brand awareness, higher engagement rates, and improved customer loyalty. Our clients have seen significant growth in website traffic and profitability, solidifying their position in the competitive digital landscape.
                            </p>
                        </div>
    
                        <div class="similar-casestudy pt-80">
                            <h2 class="similar-casestudy-title">Dự án đã làm</h2>
                            <div class="row mt-none-30">
                                @foreach($similarWebsites->take(3) as $similarWebsite) <!-- Chỉ lấy 3 bài tương tự -->
                                    <div class="col-lg-4 col-md-6 mt-30">
                                        <div class="casestudy-item">
                                            <div class="casestudy-img">
                                                <a href="{{ route('project.detail', ['slug' => $similarWebsite->slug]) }}"> <!-- Liên kết đến chi tiết bài tương tự -->
                                                    <img src="{{ asset('storage/' . $similarWebsite->main_image) }}" alt="{{ $similarWebsite->name }}">
                                                </a>
                                                <div class="content_wrap">
                                                    <h3 class="item_title">{{ $similarWebsite->name }}</h3> <!-- Hiển thị tên bài tương tự -->
                                                    <span class="item_tag">{{ $similarWebsite->category->name }}</span> <!-- Hiển thị danh mục -->
                                                </div>
                                            </div>
                                            <a class="xb-overlay" href="{{ route('project.detail', ['slug' => $similarWebsite->slug]) }}"></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
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
