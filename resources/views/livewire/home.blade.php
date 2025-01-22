<div>
    @section('metatags')
    <title>Thiết Kế Website - HG Digital</title>
    <meta name="description" content="Chuyên cung cấp dịch vụ thiết kế website chuyên nghiệp, tối ưu SEO, giá rẻ tại HG Digital.">
    <meta name="keywords" content="thiết kế website, dịch vụ thiết kế web, website chuyên nghiệp">
    <meta property="og:title" content="HG Digital - Thiết Kế Website Chuyên Nghiệp">
    <meta property="og:description" content="Thiết kế website chuyên nghiệp, tối ưu hóa SEO và giá cả hợp lý.">
@endsection
    <style>
        @media (max-width: 768px) {
    /* Khi màn hình nhỏ hơn hoặc bằng 768px */
  
    #kkkfii {
        font-size: 16px !important;
    max-width: 42rem !important;
    text-align: center !important;
    text-transform: capitalize !important;
    line-height: 2rem !important;
    font-weight: 600;
    }

    .service .xb-item--item  {
        font-size: 14px;
    }
    .cs-feature-item .xb-item--icons {
        display: flex;
        justify-content: center;
    }
    .cs-feature-item .xb-item--title {
        display: flex;
        justify-content: center;
    }
    .cs-feature-item .xb-item--list {
        display: flex;
        text-align: center;
  
}
}
    </style>
    <body class="cybersecurity">

        <!-- backtotop - start -->
        <div class="xb-backtotop style-3">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->

         <!-- Preloader - Start -->
         <div id="xb-loadding" class="xb-loader style-3"><div class="xb-dual-ring"></div></div>
        <!-- Preloader - End -->

        <div class="body_wrap">

            <!-- header start -->
            @livewire('inc.header')

            <!-- header end -->

            <!-- main area start  -->
            <main>
                <!-- hero section start  -->
                <section class="hero hero-style-three pos-rel pt-120 bg_img" data-background="/assets/img/bg/hero-bg03.png">
                    <div class="container">
                        <div class="hero_wrap pt-90">
                            <div class="xb-hero text-center">
                                <h1 class="xb-item--title wow skewIn" style="font-weight: 600;" data-wow-delay="000ms" data-wow-duration="900ms">HGDIGITAL</h1>
                                <div class="xb-item--holder wow fadeInUp" data-wow-delay="150ms" data-wow-duration="600ms">
                                    <p id="kkkfii" class="xb-item--list" style="  font-size: 32px;
                                            max-width: 42rem;
                                            text-align: start;
                                            text-transform: capitalize;
                                            line-height: 3rem;
                                            font-weight: 600;">Dịch vụ thiết kế website chuyên nghiệp cho doanh nghiệp của bạn</p>
                                    <div class="hero-btn">
                                        <a href="#!" class="blc-btn">
                                            <span>YÊU CẦU BÁO GIÁ <i class="far fa-angle-right"></i></span>

                                            <span class="btn-shape">
                                                <svg width="362" height="78" viewBox="0 0 362 78" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.5 22.7183L25.5093 1.39453H337.972L361.5 22.7092V56.5515L337.98 76.6051H25.5093L0.5 55.2813V22.7183Z" fill="url(#paint0_linear_1600_9966956)" stroke="#23263C" />
                                                    <defs>
                                                      <linearGradient id="paint0_linear_1600_9966956" x1="1.29285" y1="38.9973" x2="362" y2="33.9973" gradientUnits="userSpaceOnUse">
                                                        <stop offset="0" stop-color="#431DAB" />
                                                        <stop offset="1" stop-color="#AE6DFE" />
                                                      </linearGradient>
                                                    </defs>
                                                  </svg>
                                            </span>
                                            <span class="btn-shape2">
                                                <svg width="271" height="60" viewBox="0 0 271 60" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.5 17.2308L20.1225 0.5H252.042L270.5 17.2217V43.7692L252.05 59.5H20.1225L0.5 42.7692V17.2308Z" fill="#010315" stroke="url(#paint0_linear_1742_661)" />
                                                    <defs>
                                                      <linearGradient id="paint0_linear_1742_661" x1="271" y1="61.5556" x2="232.791" y2="-3.08978" gradientUnits="userSpaceOnUse">
                                                        <stop offset="0" stop-color="#6780D2" />
                                                        <stop offset="1" stop-color="#2F3B8D" />
                                                      </linearGradient>
                                                    </defs>
                                                  </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xb-shape">
                        <div class="shape shape--one"><img  loading="lazy" src="{{ asset('assets/img/shape/hero03.png') }}" alt=""></div>
                        <div class="shape shape--two"><img  loading="lazy" src="{{ asset('assets/img/shape/hero04.png') }}" alt=""></div>
                        <div class="shape shape--three"><img  loading="lazy" src="{{ asset('assets/img/shape/hero-linear.png') }}" alt=""></div>
                        <div class="shape shape--four"><img  loading="lazy" src="{{ asset('assets/img/shape/hero-linear02.png') }}" alt=""></div>
                        <div class="shape shape--five"><img  loading="lazy" src="{{ asset('assets/img/shape/hero-linear03.png') }}" alt=""></div>
                    </div>
                    <div class="sc_hero_video">
                        <video
                            class="responsive-video"
                            loop
                            muted
                            playsinline
                            autoplay>
                            <source src="https://html.xpressbuddy.com/innomax/cyber_security_hero.mp4" type="video/mp4">
                        </video>
                    </div>
                </section>
                <!-- hero section end  -->

                <!-- brand section start  -->
                 <section class="brand mt-90">
                    <div class="cs-brand_wrap pt-60 pb-60 pos-rel">
                        <div class="cs-brand-inner marquee-left">
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd01.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd02.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd03.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd04.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd05.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd06.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd07.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd08.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd09.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="cs-brand-inner marquee-right">
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd10.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd11.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd12.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd13.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd14.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd15.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd16.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd17.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="cs-brand-item">
                                <div class="xb-inner">
                                    <div class="xb-img">
                                        <img  loading="lazy" src="{{ asset('assets/img/brand/cs-brd18.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cs-brand_content">
                            <div class="xb-holder">
                                <span class="sub-title">
                                    <span data-parallax='{"x":50,"y":70}'>
                                        <span class="sub-title--inner"><span>Website Chất lượng</span></span>
                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.4871 16.9645C18.7081 17.5684 18.1337 18.1603 17.5235 17.9576L1.04049 12.4812C0.386752 12.264 0.32721 11.3626 0.946757 11.0613L7.10885 8.06472C7.6312 7.81065 8.0478 7.38145 8.28597 6.85171L11.0963 0.602306C11.3788 -0.0259072 12.2816 0.00653915 12.5183 0.653458L18.4871 16.9645Z" fill="#F65A0B" />
                                        </svg>
                                    </span>
                                </span>
                                <h2 class="title"> <span>100+ doanh nghiệp</span> việt nam</h2>
                                <span class="sub-title sub-title--two">
                                    <span data-parallax='{"x":-50,"y":-70}'>
                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.779727 1.06017C0.567847 0.453069 1.15106 -0.130154 1.75818 0.0817293L18.1571 5.80495C18.8075 6.03193 18.8535 6.93416 18.2295 7.22609L12.0231 10.1298C11.497 10.376 11.074 10.7989 10.8279 11.325L7.92409 17.5315C7.63216 18.1554 6.72993 18.1094 6.50295 17.459L0.779727 1.06017Z" fill="#E2EA46" />
                                        </svg><span class="sub-title--inner"><span>Giá cả hợp lý</span></span>
                                    </span>
                                </span>

                            </div>
                        </div>
                    </div>
                 </section>
                <!-- brand section end  -->

                <!-- service section start  -->
                 <section class="service pt-170 pb-100">
                    <div class="container">
                        <div class="cd-service_wrap pos-rel">
                            <div class="sec-title--two sec-title--three text-center mb-30">
                                <span class="sub-title wow fadeInDown" data-wow-duration="600ms"><img  loading="lazy" src="{{ asset('assets/img/icon/ser_layer.svg') }}" alt=""><span>Services</span></span>
                                <h2 class="title wow fadeInDown" data-wow-duration="600ms">Giải pháp thiết kế website</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="cs-service-item mt-30">
                                        <div class="xb-item--inner">
                                            <div class="xb-item--icon">
                                                <img  loading="lazy" src="{{ asset('assets/img/icon/airdrop-white.svg') }}" alt="">
                                            </div>
                                            <h3 class="xb-item--title">Thiết kế website chất lượng</h3>
                                            <ul class="xb-item--item list-unstyled">
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Xây dựng website an toàn, thân thiện.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Tích hợp SEO tối ưu hóa thứ hạng.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Giải pháp đa ngôn ngữ cho toàn cầu.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Tích hợp Zalo OA kết nối khách hàng.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Bảo mật với chứng chỉ SSL.</li>

                                            </ul>
                                        </div>
                                        <div class="border-bg1">
                                            <svg width="410" height="360" viewBox="0 0 410 360" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="410" height="360" rx="15" fill="#010315" />
                                                <rect x="0.5" y="0.5" width="409" height="359" rx="14.5" fill="url(#paint0_radial_1685_8961)" stroke="#23263C" />
                                                <rect opacity="0.5" x="63" width="190" height="1" fill="url(#paint1_radial_1685_896345)" />
                                                <defs>
                                                  <radialGradient id="paint0_radial_1685_8961" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(205) scale(288.23 306.36)">
                                                    <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                    <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                                  </radialGradient>
                                                  <radialGradient id="paint1_radial_1685_896345" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(158 0.5) scale(95 0.5)">
                                                    <stop offset="0" stop-color="white" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                  </radialGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="border-bg2">
                                            <svg width="410" height="360" viewBox="0 0 410 360" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="410" height="360" rx="15" fill="#010315" />
                                                <rect x="0.5" y="0.5" width="409" height="359" rx="14.5" fill="url(#paint0_radial_1685_8951)" stroke="url(#paint1_linear_1685_895)" />
                                                <rect opacity="0.5" x="63" width="190" height="1" fill="url(#paint2_radial_1685_8951)" />
                                                <defs>
                                                  <radialGradient id="paint0_radial_1685_8952" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(205) scale(288.23 306.36)">
                                                    <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                    <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                                  </radialGradient>
                                                  <linearGradient id="paint1_linear_1685_895" x1="410" y1="369.333" x2="221.101" y2="288.747" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#6780D2" />
                                                    <stop offset="1" stop-color="#2F3B8D" />
                                                  </linearGradient>
                                                  <radialGradient id="paint2_radial_1685_8951" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(158 0.5) scale(95 0.5)">
                                                    <stop offset="0" stop-color="white" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                  </radialGradient>
                                                </defs>
                                              </svg>
                                        </div>
                                        <a href="service-details.html" class="xb-overlay xb-overlay-link"></a>
                                    </div>
                                    <div class="cs-service-item mt-30">
                                        <div class="xb-item--inner">
                                            <div class="xb-item--icon">
                                                <img  loading="lazy" src="{{ asset('assets/img/icon/finger-scan.svg') }}" alt="">
                                            </div>
                                            <h3 class="xb-item--title">Quản lý đơn hàng hiệu quả</h3>
                                            <ul class="xb-item--item list-unstyled">
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Hệ thống quản lý đơn hàng dễ sử dụng.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Tối ưu quy trình giao hàng và thanh toán.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Đảm bảo theo dõi đơn hàng minh bạch.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Hỗ trợ khách hàng 24/7.</li>
                                            </ul>


                                        </div>
                                        <div class="border-bg1">
                                            <svg width="410" height="360" viewBox="0 0 410 360" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="410" height="360" rx="15" fill="#010315" />
                                                <rect x="0.5" y="0.5" width="409" height="359" rx="14.5" fill="url(#paint0_radial_1685_8962)" stroke="#23263C" />
                                                <rect opacity="0.5" x="63" width="190" height="1" fill="url(#paint1_radial_1685_89678)" />
                                                <defs>
                                                  <radialGradient id="paint0_radial_1685_8962" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(205) scale(288.23 306.36)">
                                                    <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                    <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                                  </radialGradient>
                                                  <radialGradient id="paint1_radial_1685_89678" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(158 0.5) scale(95 0.5)">
                                                    <stop offset="0" stop-color="white" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                  </radialGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="border-bg2">
                                            <svg width="410" height="360" viewBox="0 0 410 360" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="410" height="360" rx="15" fill="#010315" />
                                                <rect x="0.5" y="0.5" width="409" height="359" rx="14.5" fill="url(#paint0_radial_1685_8953)" stroke="url(#paint1_linear_1685_8951)" />
                                                <rect opacity="0.5" x="63" width="190" height="1" fill="url(#paint2_radial_1685_8953)" />
                                                <defs>
                                                  <radialGradient id="paint0_radial_1685_8953" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(205) scale(288.23 306.36)">
                                                    <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                    <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                                  </radialGradient>
                                                  <linearGradient id="paint1_linear_1685_8951" x1="410" y1="369.333" x2="221.101" y2="288.747" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#6780D2" />
                                                    <stop offset="1" stop-color="#2F3B8D" />
                                                  </linearGradient>
                                                  <radialGradient id="paint2_radial_1685_8953" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(158 0.5) scale(95 0.5)">
                                                    <stop offset="0" stop-color="white" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                  </radialGradient>
                                                </defs>
                                              </svg>
                                        </div>
                                        <a href="service-details.html" class="xb-overlay xb-overlay-link"></a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="cs-service-item mt-30">
                                        <div class="xb-item--inner">
                                            <div class="xb-item--icon">
                                                <img  loading="lazy" src="{{ asset('assets/img/icon/cloud-add.svg') }}" alt="">
                                            </div>
                                            <h3 class="xb-item--title">Giải pháp SEO tối ưu</h3>
                                            <ul class="xb-item--item list-unstyled">
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Tối ưu nội dung website.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Tăng cường sự hiện diện trực tuyến.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Theo dõi và điều chỉnh chiến lược SEO.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Cung cấp báo cáo chi tiết hiệu quả SEO.</li>
                                            </ul>



                                        </div>
                                        <div class="border-bg1">
                                            <svg width="410" height="360" viewBox="0 0 410 360" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="410" height="360" rx="15" fill="#010315" />
                                                <rect x="0.5" y="0.5" width="409" height="359" rx="14.5" fill="url(#paint0_radial_1685_89634)" stroke="#23263C" />
                                                <rect opacity="0.5" x="63" width="190" height="1" fill="url(#paint1_radial_1685_8964)" />
                                                <defs>
                                                  <radialGradient id="paint0_radial_1685_8963" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(205) scale(288.23 306.36)">
                                                    <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                    <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                                  </radialGradient>
                                                  <radialGradient id="paint1_radial_1685_8964" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(158 0.5) scale(95 0.5)">
                                                    <stop offset="0" stop-color="white" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                  </radialGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="border-bg2">
                                            <svg width="410" height="360" viewBox="0 0 410 360" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="410" height="360" rx="15" fill="#010315" />
                                                <rect x="0.5" y="0.5" width="409" height="359" rx="14.5" fill="url(#paint0_radial_1685_8955)" stroke="url(#paint1_linear_1685_8952)" />
                                                <rect opacity="0.5" x="63" width="190" height="1" fill="url(#paint2_radial_1685_8955)" />
                                                <defs>
                                                  <radialGradient id="paint0_radial_1685_8955" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(205) scale(288.23 306.36)">
                                                    <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                    <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                                  </radialGradient>
                                                  <linearGradient id="paint1_linear_1685_892" x1="410" y1="369.333" x2="221.101" y2="288.747" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#6780D2" />
                                                    <stop offset="1" stop-color="#2F3B8D" />
                                                  </linearGradient>
                                                  <radialGradient id="paint2_radial_1685_8955" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(158 0.5) scale(95 0.5)">
                                                    <stop offset="0" stop-color="white" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                  </radialGradient>
                                                </defs>
                                              </svg>
                                        </div>
                                        <a href="service-details.html" class="xb-overlay xb-overlay-link"></a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="cs-service-item mt-30">
                                        <div class="xb-item--inner">
                                            <div class="xb-item--icon">
                                                <img  loading="lazy" src="{{ asset('assets/img/icon/check02.svg') }}" alt="">
                                            </div>
                                            <h3 class="xb-item--title">Chuyển đổi trang web của bạn</h3>
                                            <ul class="xb-item--item list-unstyled">
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Tăng cường tương tác người dùng.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Thiết kế giao diện hấp dẫn.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Tối ưu hóa trải nghiệm trên mọi thiết bị.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Bảo trì và cập nhật định kỳ.</li>
                                            </ul>


                                        </div>
                                        <div class="border-bg1">
                                            <svg width="410" height="360" viewBox="0 0 410 360" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="410" height="360" rx="15" fill="#010315" />
                                                <rect x="0.5" y="0.5" width="409" height="359" rx="14.5" fill="url(#paint0_radial_1685_896466)" stroke="#23263C" />
                                                <rect opacity="0.5" x="63" width="190" height="1" fill="url(#paint1_radial_1685_89677)" />
                                                <defs>
                                                  <radialGradient id="paint0_radial_1685_896466" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(205) scale(288.23 306.36)">
                                                    <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                    <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                                  </radialGradient>
                                                  <radialGradient id="paint1_radial_1685_89677" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(158 0.5) scale(95 0.5)">
                                                    <stop offset="0" stop-color="white" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                  </radialGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="border-bg2">
                                            <svg width="410" height="360" viewBox="0 0 410 360" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="410" height="360" rx="15" fill="#010315" />
                                                <rect x="0.5" y="0.5" width="409" height="359" rx="14.5" fill="url(#paint0_radial_1685_89588)" stroke="url(#paint1_linear_1685_89599)" />
                                                <rect opacity="0.5" x="63" width="190" height="1" fill="url(#paint2_radial_1685_8956)" />
                                                <defs>
                                                  <radialGradient id="paint0_radial_1685_89588" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(205) scale(288.23 306.36)">
                                                    <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                    <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                                  </radialGradient>
                                                  <linearGradient id="paint1_linear_1685_89599" x1="410" y1="369.333" x2="221.101" y2="288.747" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#6780D2" />
                                                    <stop offset="1" stop-color="#2F3B8D" />
                                                  </linearGradient>
                                                  <radialGradient id="paint2_radial_1685_8956" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(158 0.5) scale(95 0.5)">
                                                    <stop offset="0" stop-color="white" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                  </radialGradient>
                                                </defs>
                                              </svg>
                                        </div>
                                        <a href="service-details.html" class="xb-overlay xb-overlay-link"></a>
                                    </div>
                                    <div class="cs-service-item mt-30">
                                        <div class="xb-item--inner">
                                            <div class="xb-item--icon">
                                                <img  loading="lazy" src="{{ asset('assets/img/icon/ranking.svg') }}" alt="">
                                            </div>
                                            <h3 class="xb-item--title">Giải pháp theo ngành</h3>
                                            <ul class="xb-item--item list-unstyled">
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Thiết kế website cho mọi lĩnh vực.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Giải pháp cho doanh nghiệp vừa và nhỏ.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Hỗ trợ doanh nghiệp công nghệ.</li>
                                                <li><img loading="lazy" src="{{ asset('assets/img/icon/plus.svg') }}" alt=""> Tư vấn cho tổ chức phi lợi nhuận.</li>
                                            </ul>

                                        </div>
                                        <div class="border-bg1">
                                            <svg width="410" height="360" viewBox="0 0 410 360" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="410" height="360" rx="15" fill="#010315" />
                                                <rect x="0.5" y="0.5" width="409" height="359" rx="14.5" fill="url(#paint0_radial_1685_8965107)" stroke="#23263C" />
                                                <rect opacity="0.5" x="63" width="190" height="1" fill="url(#paint1_radial_1685_896111)" />
                                                <defs>
                                                  <radialGradient id="paint0_radial_1685_8965107" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(205) scale(288.23 306.36)">
                                                    <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                    <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                                  </radialGradient>
                                                  <radialGradient id="paint1_radial_1685_89611" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(158 0.5) scale(95 0.5)">
                                                    <stop offset="0" stop-color="white" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                  </radialGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="border-bg2">
                                            <svg width="410" height="360" viewBox="0 0 410 360" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="410" height="360" rx="15" fill="#010315" />
                                                <rect x="0.5" y="0.5" width="409" height="359" rx="14.5" fill="url(#paint0_radial_1685_89512)" stroke="url(#paint1_linear_1685_89513)" />
                                                <rect opacity="0.5" x="63" width="190" height="1" fill="url(#paint2_radial_1685_8958)" />
                                                <defs>
                                                  <radialGradient id="paint0_radial_1685_89512" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(205) scale(288.23 306.36)">
                                                    <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                    <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                                  </radialGradient>
                                                  <linearGradient id="paint1_linear_1685_89513" x1="410" y1="369.333" x2="221.101" y2="288.747" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#6780D2" />
                                                    <stop offset="1" stop-color="#2F3B8D" />
                                                  </linearGradient>
                                                  <radialGradient id="paint2_radial_1685_8958" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(158 0.5) scale(95 0.5)">
                                                    <stop offset="0" stop-color="white" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                  </radialGradient>
                                                </defs>
                                              </svg>
                                        </div>
                                        <a href="service-details.html" class="xb-overlay xb-overlay-link"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="cs-ser_shape">
                                <img  loading="lazy" src="{{ asset('assets/img/shape/service01.png') }}" alt="">
                            </div>
                        </div>
                        <div class="xb-btn z-2 pos-rel text-center mt-55 wow fadeInUp" data-wow-duration="600ms">
                            <a href="{{ route('home') }}#service_packs" class="blc-btn">
                                
                                <span>Liên Hệ Báo Giá <i class="far fa-angle-right"></i></span>
                                <span class="btn-shape">
                                    <svg width="362" height="78" viewBox="0 0 362 78" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 22.7183L25.5093 1.39453H337.972L361.5 22.7092V56.5515L337.98 76.6051H25.5093L0.5 55.2813V22.7183Z" fill="url(#paint0_linear_1600_9966914)" stroke="#23263C" />
                                        <defs>
                                          <linearGradient id="paint0_linear_1600_9966914" x1="1.29285" y1="38.9973" x2="362" y2="33.9973" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#431DAB" />
                                            <stop offset="1" stop-color="#AE6DFE" />
                                          </linearGradient>
                                        </defs>
                                      </svg>
                                </span>
                                <span class="btn-shape2">
                                    <svg width="271" height="60" viewBox="0 0 271 60" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 17.2308L20.1225 0.5H252.042L270.5 17.2217V43.7692L252.05 59.5H20.1225L0.5 42.7692V17.2308Z" fill="#010315" stroke="url(#paint0_linear_1742_66115)" />
                                        <defs>
                                          <linearGradient id="paint0_linear_1742_66115" x1="271" y1="61.5556" x2="232.791" y2="-3.08978" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#6780D2" />
                                            <stop offset="1" stop-color="#2F3B8D" />
                                          </linearGradient>
                                        </defs>
                                      </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                 </section>
                <!-- service section end  -->

                <!-- about section start  -->
                 <section class="about pt-60 pb-100">
                    <div class="container">
                        <div class="cs-about-wrap pos-rel">
                            <div class="row mt-none-60">
                                <div class="col-lg-6 mt-60">
                                    <div class="cs-about_left">
                                        <div class="sec-title--two sec-title--three">
                                            <span class="sub-title wow fadeInUp" data-wow-duration="600ms"><img  loading="lazy" src="{{ asset('assets/img/icon/magic02.svg') }}" alt=""><span>Về chúng tôi </span></span>
                                            <h2 class="title wow skewIn" data-wow-delay="150ms" data-wow-duration="600ms">Giải Pháp Thiết Kế Website Sáng Tạo Từ Đội Ngũ Năng Động</h2>
                                            <p class="content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="600ms">Với đội ngũ trẻ trung, nhiệt huyết và đam mê công nghệ, chúng tôi mang đến giải pháp thiết kế website chuyên nghiệp, tối ưu và phù hợp với mọi nhu cầu kinh doanh.</p>
                                        </div>
                                        <div class="xb-btn mt-85 wow fadeInUp" data-wow-delay="450ms" data-wow-duration="600ms">
                                            <a href="about.html" class="blc-btn">
                                                <span>Liên Hệ Báo Giá <i class="far fa-angle-right"></i></span>
                                                <span class="btn-shape">
                                                    <svg width="271" height="60" viewBox="0 0 271 60" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.5 17.2308L20.1225 0.5H252.042L270.5 17.2217V43.7692L252.05 59.5H20.1225L0.5 42.7692V17.2308Z" fill="#010315" stroke="url(#paint0_linear_1742_66189)" />
                                                        <defs>
                                                          <linearGradient id="paint0_linear_1742_66189" x1="271" y1="61.5556" x2="232.791" y2="-3.08978" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#6780D2" />
                                                            <stop offset="1" stop-color="#2F3B8D" />
                                                          </linearGradient>
                                                        </defs>
                                                      </svg>
                                                </span>
                                                <span class="btn-shape2">
                                                    <svg width="362" height="78" viewBox="0 0 362 78" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.5 22.7183L25.5093 1.39453H337.972L361.5 22.7092V56.5515L337.98 76.6051H25.5093L0.5 55.2813V22.7183Z" fill="url(#paint0_linear_1600_9966989)" stroke="#23263C" />
                                                        <defs>
                                                          <linearGradient id="paint0_linear_1600_9966989" x1="1.29285" y1="38.9973" x2="362" y2="33.9973" gradientUnits="userSpaceOnUse">
                                                            <stop offset="0" stop-color="#431DAB" />
                                                            <stop offset="1" stop-color="#AE6DFE" />
                                                          </linearGradient>
                                                        </defs>
                                                      </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-60">
                                    <div class="cs-about_right wow fadeInRight" data-wow-duration="600ms">
                                        <div class="xb-img">
                                            <img  loading="lazy" src="{{ asset('assets/img/about/img04.png') }}" alt="">
                                        </div>
                                        <div class="xb-content">
                                            <div class="xb-item--img">
                                                <img  loading="lazy" src="{{ asset('assets/img/bg/abt-cnt_bg.png') }}" alt="">
                                            </div>
                                            <div class="xb-item--inner">
                                                <h3 class="xb-item--number">100+</h3>
<span class="xb-item--list">Đối tác đã tin tưởng sử dụng dịch vụ của chúng tôi</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xb-shape">
                                <img  loading="lazy" src="{{ asset('assets/img/bg/content_bg.png') }}" alt="">
                            </div>
                        </div>
                        <div class="cs-feature pos-rel pt-140 z-1">
                            <div class="row mt-none-30">
                                <div class="col-lg-3 col-md-6 cs-feature-col mt-30">
                                    <div class="cs-feature-item">
                                        <div class="xb-item--icons">
                                            <img loading="lazy" src="{{ asset('assets/img/icon/frature-icon01.png') }}" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Giao diện chuyên nghiệp</h3>
                                        <span class="xb-item--list">Thiết kế hiện đại, thu hút và phù hợp với thương hiệu.</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 cs-feature-col mt-30">
                                    <div class="cs-feature-item">
                                        <div class="xb-item--icons">
                                            <img loading="lazy" src="{{ asset('assets/img/icon/frature-icon02.png') }}" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Tối ưu tốc độ</h3>
                                        <span class="xb-item--list">Đảm bảo tải trang nhanh, trải nghiệm mượt mà.</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 cs-feature-col mt-30">
                                    <div class="cs-feature-item">
                                        <div class="xb-item--icons">
                                            <img loading="lazy" src="{{ asset('assets/img/icon/frature-icon03.png') }}" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Tích hợp thông minh</h3>
                                        <span class="xb-item--list">Hỗ trợ quản lý sản phẩm, đặt hàng, thanh toán.</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 cs-feature-col mt-30">
                                    <div class="cs-feature-item">
                                        <div class="xb-item--icons">
                                            <img loading="lazy" src="{{ asset('assets/img/icon/frature-icon04.png') }}" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Chuẩn hóa SEO</h3>
                                        <span class="xb-item--list">Tăng thứ hạng, thu hút khách hàng từ công cụ tìm kiếm.</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                 </section>
                <!-- about section end  -->

                <!-- work section start  -->
                <section class="work">
                    <div class="container">
                        <div class="xb-work-wrap pos-rel bg_img pt-100 pb-155" data-background="/assets/img/bg/work-bg.png">
                            <div class="sec-title--two sec-title--three text-center mb-60">
                                <span class="sub-title wow fadeInDown" data-wow-duration="600ms"><img loading="lazy" src="{{ asset('assets/img/icon/work.svg') }}" alt=""><span>Quy Trình Làm Việc</span></span>
                                <h2 class="title wow fadeInDown" data-wow-duration="600ms">Quy Trình Làm Việc Tại HG Digital</h2>

                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-4 mt-30 d-inline-flex justify-content-center">
                                    <div class="xb-work-item pos-rel wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="600ms">
                                        <div class="xb-item--ineer">
                                            <div class="xb-item--icon">
                                                <img  loading="lazy" src="{{ asset('assets/img/icon/work-icon01.png') }}" alt="">
                                            </div>
                                            <h4 class="xb-item--title">Yêu Cầu & Báo Giá</h4>
                                        </div>
                                        <div class="xb-img">
                                            <img  loading="lazy" src="{{ asset('assets/img/work/img01.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--list">
                                            <div class="xb-item--line"><img  loading="lazy" src="{{ asset('assets/img/icon/das-linee01.png') }}" alt=""></div>
                                            <span class="xb-item--number">01</span>
                                        </div>
                                        <div class="xb-item--arrow"><img  loading="lazy" src="{{ asset('assets/img/icon/right-arrow.png') }}" alt=""></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-30 d-inline-flex justify-content-center">
                                    <div class="xb-work-item xb-work-item--middle pos-rel">
                                        <div class="xb-item--ineer">
                                            <div class="xb-item--icon">
                                                <img  loading="lazy" src="{{ asset('assets/img/icon/work-icon02.png') }}" alt="">
                                            </div>
                                            <h4 class="xb-item--title" style="text-transform: capitalize;">Thực hiện dự án theo kế hoạch.</h4>
                                        </div>
                                        <div class="xb-img">
                                            <img  loading="lazy" src="{{ asset('assets/img/work/img02.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--list">
                                            <div class="xb-item--line"><img  loading="lazy" src="{{ asset('assets/img/icon/das-linee01.png') }}" alt=""></div>
                                            <span class="xb-item--number">02</span>
                                        </div>
                                        <div class="xb-item--arrow"><img  loading="lazy" src="{{ asset('assets/img/icon/right-arrow.png') }}" alt=""></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-30 d-inline-flex justify-content-center">
                                    <div class="xb-work-item pos-rel wow fadeInRight" data-wow-delay="150ms" data-wow-duration="600ms">
                                        <div class="xb-item--ineer">
                                            <div class="xb-item--icon">
                                                <img  loading="lazy" src="{{ asset('assets/img/icon/work-icon03.png') }}" alt="">
                                            </div>
                                            <h4 class="xb-item--title" style="text-transform: capitalize;">Bàn giao sản phẩm.</h4>
                                        </div>
                                        <div class="xb-img">
                                            <img  loading="lazy" src="{{ asset('assets/img/work/img03.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--list">
                                            <div class="xb-item--line"><img  loading="lazy" src="{{ asset('assets/img/icon/das-linee01.png') }}" alt=""></div>
                                            <span class="xb-item--number">03</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </section>
                 <!-- work section end  -->

                <!-- industries section start  -->
                 <section class="industries pt-120">
                    <div class="container">
                        <div class="sec-title--two sec-title--three text-center mb-60">
                            <span class="sub-title wow fadeInDown" data-wow-duration="600ms"><img  loading="lazy" src="{{ asset('assets/img/icon/magic02.svg') }}" alt=""><span>Lĩnh Vực Làm Việc</span></span>
                            <h2 class="title wow fadeInDown" data-wow-duration="600ms">HG DIGITAL cung cấp các ngành nghề đa dạng.</h2>
                        </div>
                    </div>
                    <div class="industries-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cs-industries-item">
                                    <div class="xb-item--inner">
                                        <div class="xb-item--icon">
                                            <img  loading="lazy" class="default" src="/assets/img/icon/ftd_01.svg" alt="">
                                            <img  loading="lazy" class="hover" src="/assets/img/icon/ft_01.svg" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Finance</h3>
                                    </div>
                                    <div class="bg-shape1">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.000976562" y="0.000976562" width="241.997" height="219" rx="15" fill="url(#paint0_linear_1742_6131)" />
                                            <rect x="0.500977" y="0.500977" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <rect width="241.997" height="219" rx="15" fill="url(#paint1_radial_1742_6131)" />
                                            <rect x="0.5" y="0.5" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_6131" x1="127.049" y1="-29.199" x2="127.049" y2="178.851" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#3A3645" />
                                                <stop offset="1" stop-color="#010315" />
                                              </linearGradient>
                                              <radialGradient id="paint1_radial_1742_6131" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(120.999) scale(170.124 186.369)">
                                                <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                              </radialGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                    <div class="bg-shape2">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.00195312 15C0.00195312 6.71572 6.71768 0 15.002 0H227.002C235.286 0 242.002 6.71573 242.002 15V204C242.002 212.284 235.286 219 227.002 219H15.002C6.71768 219 0.00195312 212.284 0.00195312 204V15Z" fill="url(#paint0_linear_1742_583)" />
                                            <path d="M0.501953 15C0.501953 6.99187 6.99382 0.5 15.002 0.5H227.002C235.01 0.5 241.502 6.99187 241.502 15V204C241.502 212.008 235.01 218.5 227.002 218.5H15.002C6.99382 218.5 0.501953 212.008 0.501953 204V15Z" stroke="url(#paint1_linear_1742_583)" stroke-opacity="0.7" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_583" x1="229.002" y1="55.653" x2="216.981" y2="306.586" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#010315" />
                                                <stop offset="0.29614" stop-color="#090536" />
                                                <stop offset="0.833198" stop-color="#431DAB" stop-opacity="0.59" />
                                                <stop offset="1" stop-color="#431DAB" />
                                              </linearGradient>
                                              <linearGradient id="paint1_linear_1742_583" x1="242.002" y1="222.626" x2="129.794" y2="175.752" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#6780D2" />
                                                <stop offset="1" stop-color="#2F3B8D" />
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cs-industries-item">
                                    <div class="xb-item--inner">
                                        <div class="xb-item--icon">
                                            <img  loading="lazy" class="default" src="/assets/img/icon/ftd_02.svg" alt="">
                                            <img  loading="lazy" class="hover" src="/assets/img/icon/ft_02.svg" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Healthcare</h3>
                                    </div>
                                    <div class="bg-shape1">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.000976562" y="0.000976562" width="241.997" height="219" rx="15" fill="url(#paint0_linear_1742_6132)" />
                                            <rect x="0.500977" y="0.500977" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <rect width="241.997" height="219" rx="15" fill="url(#paint1_radial_1742_6132)" />
                                            <rect x="0.5" y="0.5" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_6132" x1="127.049" y1="-29.199" x2="127.049" y2="178.851" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#3A3645" />
                                                <stop offset="1" stop-color="#010315" />
                                              </linearGradient>
                                              <radialGradient id="paint1_radial_1742_6132" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(120.999) scale(170.124 186.369)">
                                                <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                              </radialGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                    <div class="bg-shape2">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.00195312 15C0.00195312 6.71572 6.71768 0 15.002 0H227.002C235.286 0 242.002 6.71573 242.002 15V204C242.002 212.284 235.286 219 227.002 219H15.002C6.71768 219 0.00195312 212.284 0.00195312 204V15Z" fill="url(#paint0_linear_1742_583)" />
                                            <path d="M0.501953 15C0.501953 6.99187 6.99382 0.5 15.002 0.5H227.002C235.01 0.5 241.502 6.99187 241.502 15V204C241.502 212.008 235.01 218.5 227.002 218.5H15.002C6.99382 218.5 0.501953 212.008 0.501953 204V15Z" stroke="url(#paint1_linear_1742_5833)" stroke-opacity="0.7" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_5833" x1="229.002" y1="55.653" x2="216.981" y2="306.586" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#010315" />
                                                <stop offset="0.29614" stop-color="#090536" />
                                                <stop offset="0.833198" stop-color="#431DAB" stop-opacity="0.59" />
                                                <stop offset="1" stop-color="#431DAB" />
                                              </linearGradient>
                                              <linearGradient id="paint1_linear_1742_5833" x1="242.002" y1="222.626" x2="129.794" y2="175.752" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#6780D2" />
                                                <stop offset="1" stop-color="#2F3B8D" />
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cs-industries-item">
                                    <div class="xb-item--inner">
                                        <div class="xb-item--icon">
                                            <img  loading="lazy" class="default" src="/assets/img/icon/ftd_03.svg" alt="">
                                            <img  loading="lazy" class="hover" src="/assets/img/icon/ft_03.svg" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Government</h3>
                                    </div>
                                    <div class="bg-shape1">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.000976562" y="0.000976562" width="241.997" height="219" rx="15" fill="url(#paint0_linear_1742_613245)" />
                                            <rect x="0.500977" y="0.500977" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <rect width="241.997" height="219" rx="15" fill="url(#paint1_radial_1742_61327)" />
                                            <rect x="0.5" y="0.5" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_613245" x1="127.049" y1="-29.199" x2="127.049" y2="178.851" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#3A3645" />
                                                <stop offset="1" stop-color="#010315" />
                                              </linearGradient>
                                              <radialGradient id="paint1_radial_1742_61327" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(120.999) scale(170.124 186.369)">
                                                <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                              </radialGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                    <div class="bg-shape2">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.00195312 15C0.00195312 6.71572 6.71768 0 15.002 0H227.002C235.286 0 242.002 6.71573 242.002 15V204C242.002 212.284 235.286 219 227.002 219H15.002C6.71768 219 0.00195312 212.284 0.00195312 204V15Z" fill="url(#paint0_linear_1742_583)" />
                                            <path d="M0.501953 15C0.501953 6.99187 6.99382 0.5 15.002 0.5H227.002C235.01 0.5 241.502 6.99187 241.502 15V204C241.502 212.008 235.01 218.5 227.002 218.5H15.002C6.99382 218.5 0.501953 212.008 0.501953 204V15Z" stroke="url(#paint1_linear_1742_5833)" stroke-opacity="0.7" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_58336" x1="229.002" y1="55.653" x2="216.981" y2="306.586" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#010315" />
                                                <stop offset="0.29614" stop-color="#090536" />
                                                <stop offset="0.833198" stop-color="#431DAB" stop-opacity="0.59" />
                                                <stop offset="1" stop-color="#431DAB" />
                                              </linearGradient>
                                              <linearGradient id="paint1_linear_1742_58336" x1="242.002" y1="222.626" x2="129.794" y2="175.752" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#6780D2" />
                                                <stop offset="1" stop-color="#2F3B8D" />
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cs-industries-item">
                                    <div class="xb-item--inner">
                                        <div class="xb-item--icon">
                                            <img  loading="lazy" class="default" src="/assets/img/icon/ftd_04.svg" alt="">
                                            <img  loading="lazy" class="hover" src="/assets/img/icon/ft_04.svg" alt="">
                                        </div>
                                        <h3 class="xb-item--title">E-commerce</h3>
                                    </div>
                                    <div class="bg-shape1">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.000976562" y="0.000976562" width="241.997" height="219" rx="15" fill="url(#paint0_linear_1742_6132458)" />
                                            <rect x="0.500977" y="0.500977" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <rect width="241.997" height="219" rx="15" fill="url(#paint1_radial_1742_61329)" />
                                            <rect x="0.5" y="0.5" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_6132458" x1="127.049" y1="-29.199" x2="127.049" y2="178.851" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#3A3645" />
                                                <stop offset="1" stop-color="#010315" />
                                              </linearGradient>
                                              <radialGradient id="paint1_radial_1742_61329" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(120.999) scale(170.124 186.369)">
                                                <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                              </radialGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                    <div class="bg-shape2">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.00195312 15C0.00195312 6.71572 6.71768 0 15.002 0H227.002C235.286 0 242.002 6.71573 242.002 15V204C242.002 212.284 235.286 219 227.002 219H15.002C6.71768 219 0.00195312 212.284 0.00195312 204V15Z" fill="url(#paint0_linear_1742_583)" />
                                            <path d="M0.501953 15C0.501953 6.99187 6.99382 0.5 15.002 0.5H227.002C235.01 0.5 241.502 6.99187 241.502 15V204C241.502 212.008 235.01 218.5 227.002 218.5H15.002C6.99382 218.5 0.501953 212.008 0.501953 204V15Z" stroke="url(#paint1_linear_1742_5833)" stroke-opacity="0.7" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_583369" x1="229.002" y1="55.653" x2="216.981" y2="306.586" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#010315" />
                                                <stop offset="0.29614" stop-color="#090536" />
                                                <stop offset="0.833198" stop-color="#431DAB" stop-opacity="0.59" />
                                                <stop offset="1" stop-color="#431DAB" />
                                              </linearGradient>
                                              <linearGradient id="paint1_linear_1742_583360" x1="242.002" y1="222.626" x2="129.794" y2="175.752" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#6780D2" />
                                                <stop offset="1" stop-color="#2F3B8D" />
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cs-industries-item">
                                    <div class="xb-item--inner">
                                        <div class="xb-item--icon">
                                            <img  loading="lazy" class="default" src="/assets/img/icon/ftd_05.svg" alt="">
                                            <img  loading="lazy" class="hover" src="/assets/img/icon/ft_05.svg" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Energy</h3>
                                    </div>
                                    <div class="bg-shape1">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.000976562" y="0.000976562" width="241.997" height="219" rx="15" fill="url(#paint0_linear_1742_613245812)" />
                                            <rect x="0.500977" y="0.500977" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <rect width="241.997" height="219" rx="15" fill="url(#paint1_radial_1742_61324)" />
                                            <rect x="0.5" y="0.5" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_613245812" x1="127.049" y1="-29.199" x2="127.049" y2="178.851" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#3A3645" />
                                                <stop offset="1" stop-color="#010315" />
                                              </linearGradient>
                                              <radialGradient id="paint1_radial_1742_61324" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(120.999) scale(170.124 186.369)">
                                                <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                              </radialGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                    <div class="bg-shape2">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.00195312 15C0.00195312 6.71572 6.71768 0 15.002 0H227.002C235.286 0 242.002 6.71573 242.002 15V204C242.002 212.284 235.286 219 227.002 219H15.002C6.71768 219 0.00195312 212.284 0.00195312 204V15Z" fill="url(#paint0_linear_1742_583)" />
                                            <path d="M0.501953 15C0.501953 6.99187 6.99382 0.5 15.002 0.5H227.002C235.01 0.5 241.502 6.99187 241.502 15V204C241.502 212.008 235.01 218.5 227.002 218.5H15.002C6.99382 218.5 0.501953 212.008 0.501953 204V15Z" stroke="url(#paint1_linear_1742_5833)" stroke-opacity="0.7" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_58336913" x1="229.002" y1="55.653" x2="216.981" y2="306.586" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#010315" />
                                                <stop offset="0.29614" stop-color="#090536" />
                                                <stop offset="0.833198" stop-color="#431DAB" stop-opacity="0.59" />
                                                <stop offset="1" stop-color="#431DAB" />
                                              </linearGradient>
                                              <linearGradient id="paint1_linear_1742_58336013" x1="242.002" y1="222.626" x2="129.794" y2="175.752" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#6780D2" />
                                                <stop offset="1" stop-color="#2F3B8D" />
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cs-industries-item">
                                    <div class="xb-item--inner">
                                        <div class="xb-item--icon">
                                            <img  loading="lazy" class="default" src="/assets/img/icon/ftd_06.svg" alt="">
                                            <img  loading="lazy" class="hover" src="/assets/img/icon/ft_06.svg" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Education</h3>
                                    </div>
                                    <div class="bg-shape1">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.000976562" y="0.000976562" width="241.997" height="219" rx="15" fill="url(#paint0_linear_1742_613734)" />
                                            <rect x="0.500977" y="0.500977" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <rect width="241.997" height="219" rx="15" fill="url(#paint1_radial_1742_6131225)" />
                                            <rect x="0.5" y="0.5" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_613734" x1="127.049" y1="-29.199" x2="127.049" y2="178.851" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#3A3645" />
                                                <stop offset="1" stop-color="#010315" />
                                              </linearGradient>
                                              <radialGradient id="paint1_radial_1742_6131225" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(120.999) scale(170.124 186.369)">
                                                <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                              </radialGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                    <div class="bg-shape2">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.00195312 15C0.00195312 6.71572 6.71768 0 15.002 0H227.002C235.286 0 242.002 6.71573 242.002 15V204C242.002 212.284 235.286 219 227.002 219H15.002C6.71768 219 0.00195312 212.284 0.00195312 204V15Z" fill="url(#paint0_linear_1742_583)" />
                                            <path d="M0.501953 15C0.501953 6.99187 6.99382 0.5 15.002 0.5H227.002C235.01 0.5 241.502 6.99187 241.502 15V204C241.502 212.008 235.01 218.5 227.002 218.5H15.002C6.99382 218.5 0.501953 212.008 0.501953 204V15Z" stroke="url(#paint1_linear_1742_58333)" stroke-opacity="0.7" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_5833367" x1="229.002" y1="55.653" x2="216.981" y2="306.586" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#010315" />
                                                <stop offset="0.29614" stop-color="#090536" />
                                                <stop offset="0.833198" stop-color="#431DAB" stop-opacity="0.59" />
                                                <stop offset="1" stop-color="#431DAB" />
                                              </linearGradient>
                                              <linearGradient id="paint1_linear_1742_5833367" x1="242.002" y1="222.626" x2="129.794" y2="175.752" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#6780D2" />
                                                <stop offset="1" stop-color="#2F3B8D" />
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cs-industries-item">
                                    <div class="xb-item--inner">
                                        <div class="xb-item--icon">
                                            <img  loading="lazy" class="default" src="/assets/img/icon/ftd_07.svg" alt="">
                                            <img  loading="lazy" class="hover" src="/assets/img/icon/ft_07.svg" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Manufacturing</h3>
                                    </div>
                                    <div class="bg-shape1">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.000976562" y="0.000976562" width="241.997" height="219" rx="15" fill="url(#paint0_linear_1742_6137)" />
                                            <rect x="0.500977" y="0.500977" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <rect width="241.997" height="219" rx="15" fill="url(#paint1_radial_1742_61312)" />
                                            <rect x="0.5" y="0.5" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_6137" x1="127.049" y1="-29.199" x2="127.049" y2="178.851" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#3A3645" />
                                                <stop offset="1" stop-color="#010315" />
                                              </linearGradient>
                                              <radialGradient id="paint1_radial_1742_61312" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(120.999) scale(170.124 186.369)">
                                                <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                              </radialGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                    <div class="bg-shape2">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.00195312 15C0.00195312 6.71572 6.71768 0 15.002 0H227.002C235.286 0 242.002 6.71573 242.002 15V204C242.002 212.284 235.286 219 227.002 219H15.002C6.71768 219 0.00195312 212.284 0.00195312 204V15Z" fill="url(#paint0_linear_1742_583)" />
                                            <path d="M0.501953 15C0.501953 6.99187 6.99382 0.5 15.002 0.5H227.002C235.01 0.5 241.502 6.99187 241.502 15V204C241.502 212.008 235.01 218.5 227.002 218.5H15.002C6.99382 218.5 0.501953 212.008 0.501953 204V15Z" stroke="url(#paint1_linear_1742_58333)" stroke-opacity="0.7" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_58333" x1="229.002" y1="55.653" x2="216.981" y2="306.586" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#010315" />
                                                <stop offset="0.29614" stop-color="#090536" />
                                                <stop offset="0.833198" stop-color="#431DAB" stop-opacity="0.59" />
                                                <stop offset="1" stop-color="#431DAB" />
                                              </linearGradient>
                                              <linearGradient id="paint1_linear_1742_58333" x1="242.002" y1="222.626" x2="129.794" y2="175.752" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#6780D2" />
                                                <stop offset="1" stop-color="#2F3B8D" />
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cs-industries-item">
                                    <div class="xb-item--inner">
                                        <div class="xb-item--icon">
                                            <img  loading="lazy" class="default" src="/assets/img/icon/ftd_08.svg" alt="">
                                            <img  loading="lazy" class="hover" src="/assets/img/icon/ft_08.svg" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Crypto</h3>
                                    </div>
                                    <div class="bg-shape1">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.000976562" y="0.000976562" width="241.997" height="219" rx="15" fill="url(#paint0_linear_1742_6138)" />
                                            <rect x="0.500977" y="0.500977" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <rect width="241.997" height="219" rx="15" fill="url(#paint1_radial_1742_61314)" />
                                            <rect x="0.5" y="0.5" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_6138" x1="127.049" y1="-29.199" x2="127.049" y2="178.851" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#3A3645" />
                                                <stop offset="1" stop-color="#010315" />
                                              </linearGradient>
                                              <radialGradient id="paint1_radial_1742_61314" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(120.999) scale(170.124 186.369)">
                                                <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                              </radialGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                    <div class="bg-shape2">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.00195312 15C0.00195312 6.71572 6.71768 0 15.002 0H227.002C235.286 0 242.002 6.71573 242.002 15V204C242.002 212.284 235.286 219 227.002 219H15.002C6.71768 219 0.00195312 212.284 0.00195312 204V15Z" fill="url(#paint0_linear_1742_583)" />
                                            <path d="M0.501953 15C0.501953 6.99187 6.99382 0.5 15.002 0.5H227.002C235.01 0.5 241.502 6.99187 241.502 15V204C241.502 212.008 235.01 218.5 227.002 218.5H15.002C6.99382 218.5 0.501953 212.008 0.501953 204V15Z" stroke="url(#paint1_linear_1742_58315)" stroke-opacity="0.7" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_58315" x1="229.002" y1="55.653" x2="216.981" y2="306.586" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#010315" />
                                                <stop offset="0.29614" stop-color="#090536" />
                                                <stop offset="0.833198" stop-color="#431DAB" stop-opacity="0.59" />
                                                <stop offset="1" stop-color="#431DAB" />
                                              </linearGradient>
                                              <linearGradient id="paint1_linear_1742_58315" x1="242.002" y1="222.626" x2="129.794" y2="175.752" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#6780D2" />
                                                <stop offset="1" stop-color="#2F3B8D" />
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cs-industries-item">
                                    <div class="xb-item--inner">
                                        <div class="xb-item--icon">
                                            <img  loading="lazy" class="default" src="/assets/img/icon/ftd_09.svg" alt="">
                                            <img  loading="lazy" class="hover" src="/assets/img/icon/ft_09.svg" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Logistics</h3>
                                    </div>
                                    <div class="bg-shape1">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.000976562" y="0.000976562" width="241.997" height="219" rx="15" fill="url(#paint0_linear_1742_613616)" />
                                            <rect x="0.500977" y="0.500977" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <rect width="241.997" height="219" rx="15" fill="url(#paint1_radial_1742_6131016)" />
                                            <rect x="0.5" y="0.5" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_613616" x1="127.049" y1="-29.199" x2="127.049" y2="178.851" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#3A3645" />
                                                <stop offset="1" stop-color="#010315" />
                                              </linearGradient>
                                              <radialGradient id="paint1_radial_1742_6131016" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(120.999) scale(170.124 186.369)">
                                                <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                              </radialGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                    <div class="bg-shape2">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.00195312 15C0.00195312 6.71572 6.71768 0 15.002 0H227.002C235.286 0 242.002 6.71573 242.002 15V204C242.002 212.284 235.286 219 227.002 219H15.002C6.71768 219 0.00195312 212.284 0.00195312 204V15Z" fill="url(#paint0_linear_1742_583)" />
                                            <path d="M0.501953 15C0.501953 6.99187 6.99382 0.5 15.002 0.5H227.002C235.01 0.5 241.502 6.99187 241.502 15V204C241.502 212.008 235.01 218.5 227.002 218.5H15.002C6.99382 218.5 0.501953 212.008 0.501953 204V15Z" stroke="url(#paint1_linear_1742_58319)" stroke-opacity="0.7" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_5831915" x1="229.002" y1="55.653" x2="216.981" y2="306.586" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#010315" />
                                                <stop offset="0.29614" stop-color="#090536" />
                                                <stop offset="0.833198" stop-color="#431DAB" stop-opacity="0.59" />
                                                <stop offset="1" stop-color="#431DAB" />
                                              </linearGradient>
                                              <linearGradient id="paint1_linear_1742_5831915" x1="242.002" y1="222.626" x2="129.794" y2="175.752" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#6780D2" />
                                                <stop offset="1" stop-color="#2F3B8D" />
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cs-industries-item">
                                    <div class="xb-item--inner">
                                        <div class="xb-item--icon">
                                            <img  loading="lazy" class="default" src="/assets/img/icon/ftd_10.svg" alt="">
                                            <img  loading="lazy" class="hover" src="/assets/img/icon/ft_10.svg" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Technology</h3>
                                    </div>
                                    <div class="bg-shape1">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.000976562" y="0.000976562" width="241.997" height="219" rx="15" fill="url(#paint0_linear_1742_61310)" />
                                            <rect x="0.500977" y="0.500977" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <rect width="241.997" height="219" rx="15" fill="url(#paint1_radial_1742_61318)" />
                                            <rect x="0.5" y="0.5" width="240.997" height="218" rx="14.5" stroke="white" stroke-opacity="0.1" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_61310" x1="127.049" y1="-29.199" x2="127.049" y2="178.851" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#3A3645" />
                                                <stop offset="1" stop-color="#010315" />
                                              </linearGradient>
                                              <radialGradient id="paint1_radial_1742_61318" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(120.999) scale(170.124 186.369)">
                                                <stop offset="0" stop-color="white" stop-opacity="0.05" />
                                                <stop offset="1" stop-color="#050014" stop-opacity="0" />
                                              </radialGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                    <div class="bg-shape2">
                                        <svg width="242" height="219" viewBox="0 0 242 219" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.00195312 15C0.00195312 6.71572 6.71768 0 15.002 0H227.002C235.286 0 242.002 6.71573 242.002 15V204C242.002 212.284 235.286 219 227.002 219H15.002C6.71768 219 0.00195312 212.284 0.00195312 204V15Z" fill="url(#paint0_linear_1742_583)" />
                                            <path d="M0.501953 15C0.501953 6.99187 6.99382 0.5 15.002 0.5H227.002C235.01 0.5 241.502 6.99187 241.502 15V204C241.502 212.008 235.01 218.5 227.002 218.5H15.002C6.99382 218.5 0.501953 212.008 0.501953 204V15Z" stroke="url(#paint1_linear_1742_58319)" stroke-opacity="0.7" />
                                            <defs>
                                              <linearGradient id="paint0_linear_1742_58319" x1="229.002" y1="55.653" x2="216.981" y2="306.586" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#010315" />
                                                <stop offset="0.29614" stop-color="#090536" />
                                                <stop offset="0.833198" stop-color="#431DAB" stop-opacity="0.59" />
                                                <stop offset="1" stop-color="#431DAB" />
                                              </linearGradient>
                                              <linearGradient id="paint1_linear_1742_58319" x1="242.002" y1="222.626" x2="129.794" y2="175.752" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#6780D2" />
                                                <stop offset="1" stop-color="#2F3B8D" />
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xb-btn text-center mt-60">
                        <a href="/contact" class="blc-btn">
                            <span>Liên hệ báo giá <i class="far fa-angle-right"></i></span>
                            <span class="btn-shape">
                                <svg width="362" height="78" viewBox="0 0 362 78" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.5 22.7183L25.5093 1.39453H337.972L361.5 22.7092V56.5515L337.98 76.6051H25.5093L0.5 55.2813V22.7183Z" fill="url(#paint0_linear_1600_996691467)" stroke="#23263C"></path>
                                    <defs>
                                      <linearGradient id="paint0_linear_1600_996691467" x1="1.29285" y1="38.9973" x2="362" y2="33.9973" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#431DAB"></stop>
                                        <stop offset="1" stop-color="#AE6DFE"></stop>
                                      </linearGradient>
                                    </defs>
                                  </svg>
                            </span>
                            <span class="btn-shape2">
                                <svg width="271" height="60" viewBox="0 0 271 60" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.5 17.2308L20.1225 0.5H252.042L270.5 17.2217V43.7692L252.05 59.5H20.1225L0.5 42.7692V17.2308Z" fill="#010315" stroke="url(#paint0_linear_1742_6611589)"></path>
                                    <defs>
                                      <linearGradient id="paint0_linear_1742_6611589" x1="271" y1="61.5556" x2="232.791" y2="-3.08978" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#6780D2"></stop>
                                        <stop offset="1" stop-color="#2F3B8D"></stop>
                                      </linearGradient>
                                    </defs>
                                  </svg>
                            </span>
                        </a>
                    </div>
                 </section>
                <!-- industries section end -->
                <style>
                  .testimonial  .xb-item--img {
                    overflow: hidden; /* Ẩn phần ảnh tràn ra ngoài */
                    height: 484px; /* Chiều cao cố định */
                    position: relative; /* Cần để sử dụng vị trí tuyệt đối cho img */
                }
                @media (max-width: 768px) { /* Thay đổi 768px tùy theo kích thước thiết bị của bạn */
    .testimonial .xb-item--img {
        height: 300px; /* Chiều cao cho mobile */
    }

    .cs-tes-content .cs-testimonial-slider {
        padding-right: 19px;
    }
}
              .testimonial  .project-img {
                    position: absolute; /* Đặt vị trí tuyệt đối để điều chỉnh ảnh */
                    top: 0; /* Đưa ảnh về vị trí trên cùng */
                    left: 0;
                    transition: transform 5.5s ease; /* Thêm hiệu ứng chuyển động */

                }

           .testimonial     .xb-left-item:hover .project-img {
            transform: translateY(calc(484px - 100%  )); /* Dịch chuyển theo chiều cao ảnh */
        }


                                                            </style>
                <!-- testimonial section start -->
                <section id="project" class="testimonial pt-160 pos-rel z-1">
                    <div class="container">
                        <div class="cs-tes_wrap">
                            <div class="sec-title--two sec-title--three text-center mb-175">
                                <span class="sub-title wow fadeInDown" data-wow-duration="600ms"><img loading="lazy" src="{{ asset('assets/img/icon/like-tag.svg') }}" alt=""><span>Các dự án đã thực hiện</span></span>
                                <h2 class="title wow fadeInDown" data-wow-duration="600ms">Dự án của chúng tôi.</h2>

                            </div>
                            <div class="cs-tes-content">
                                <div class="cs-testimonial-slider">
                                    <div class="cs-tes-item">
                                        <div class="xb-left-item">
                                            <div class="xb-item--img">
                                                <img class="project-img" loading="lazy" src="{{ asset('assets/img/project/thebabustore.vn_.png') }}" alt="">
                                            </div>
                                            <div class="xb-item--header">
                                                <span class="xb-item--sub-title">Dự án đã thực hiện</span>
                                                <div class="xb-item--logo"><img loading="lazy" src="{{ asset('assets/img/brand/brd-logo01.png') }}" alt=""></div>
                                                <h2 class="xb-item--title">The Babu Store - Website Bán Bàn Phím</h2>
                                            </div>
                                        </div>
                                        <div class="xb-right-item">
                                            <p class="xb-item--list">“Với hơn 4000 khách hàng tìm kiếm hàng tháng, The Babu Store cung cấp đầy đủ chức năng của một website thương mại, bao gồm giỏ hàng, mua hàng, thanh toán tự động, phí ship, khuyến mãi, và phần quản trị riêng cho doanh nghiệp.”</p>
                                            <div class="xb-item--author">
                                                <span class="xb-item--name">Trần Lê Hoàng Giang</span>
                                                <span class="xb-item--desig">CEO tại HG DIGITAL</span>
                                            </div>
                                            <div class="xb-item--holder ul_li">
                                                <div class="xb-item--time">
                                                    <span class="xb-item--number">4000+</span>
                                                    <span class="xb-item--text">khách hàng tìm kiếm hàng tháng.</span>
                                                </div>
                                                <div class="xb-item--time">
                                                    <span class="xb-item--number">100%</span>
                                                    <span class="xb-item--text">Đáp ứng đầy đủ các chức năng của website thương mại.</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="cs-tes-item">
                                        <div class="xb-left-item">
                                            <div class="xb-item--img">
                                                <img class="project-img" loading="lazy" src="{{ asset('assets/img/project/haoduncn.com_.png') }}" alt="">
                                            </div>
                                            <div class="xb-item--header">
                                                <span class="xb-item--sub-title">Dự án đã thực hiện</span>
                                                <div class="xb-item--logo"><img loading="lazy" src="{{ asset('assets/img/brand/brd-logo04.png') }}" alt=""></div>
                                                <h2 class="xb-item--title">Website bán đèn và thiết bị chiếu sáng.</h2>
                                            </div>
                                        </div>
                                        <div class="xb-right-item">
                                            <p class="xb-item--list">“Công ty TNHH Công Nghệ Trung Sơn HAODUN, thành lập năm 2015, chuyên sản xuất và cung cấp các sản phẩm chiếu sáng chất lượng cao như đèn LED, đèn trang trí, đèn công nghiệp, và giải pháp chiếu sáng thông minh cho nhà ở, văn phòng và công nghiệp.”</p>
                                            <div class="xb-item--author">
                                                <span class="xb-item--name">Mr Đàm Hạo</span>
                                                <span class="xb-item--desig">TNHH Công Nghệ Trung Sơn HAODUN</span>
                                            </div>
                                            <div class="xb-item--holder ul_li">
                                                <div class="xb-item--time">
                                                    <span class="xb-item--number">2015</span>
                                                    <span class="xb-item--text">Năm thành lập, khởi đầu hành trình sản xuất chiếu sáng.</span>
                                                </div>
                                                <div class="xb-item--time">
                                                    <span class="xb-item--number">9+</span>
                                                    <span class="xb-item--text">Năm kinh nghiệm trong ngành công nghiệp chiếu sáng.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cs-tes-item">
                                        <div class="xb-left-item">
                                            <div class="xb-item--img">
                                                <img  class="project-img" loading="lazy" src="{{ asset('assets/img/project/bookxehochiminh.com_.png') }}" alt="Dịch vụ cho thuê xe">
                                            </div>
                                            <div class="xb-item--header">
                                                <span class="xb-item--sub-title">Dự án đã thực hiện</span>
                                                <div class="xb-item--logo">
                                                    <img loading="lazy" src="{{ asset('assets/img/brand/brd-logo03.png') }}" alt="Logo dịch vụ thuê xe">
                                                </div>
                                                <h2 class="xb-item--title">Dịch vụ thuê xe Hồ Chí Minh.</h2>
                                            </div>
                                        </div>
                                        <div class="xb-right-item">
                                            <p class="xb-item--list">"Bookxehochiminh.com là giải pháp hoàn hảo cho khách hàng tại TP.HCM muốn thuê xe nhanh chóng, tiện lợi và giá tốt. Website cung cấp các loại xe từ 5, 7, 16 đến 30 chỗ, bao gồm cả các dòng xe cao cấp như Carnival. Đặt xe dễ dàng, giá cả minh bạch và dịch vụ tận tâm."</p>
                                            <div class="xb-item--author">
                                                <span class="xb-item--name">Trần Viết Hùng</span>
                                                <span class="xb-item--desig">CEO tại BookXeHCM</span>
                                            </div>
                                            <div class="xb-item--holder ul_li">
                                                <div class="xb-item--time">
                                                    <span class="xb-item--number">5 phút</span>
                                                    <span class="xb-item--text">Để đặt xe, nhanh hơn <br> so với quy trình truyền thống.</span>
                                                </div>
                                                <div class="xb-item--time">
                                                    <span class="xb-item--number">100%</span>
                                                    <span class="xb-item--text">Đa dạng các dòng xe từ phổ thông đến cao cấp.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cs-tes-item">
                                        <div class="xb-left-item">
                                            <div class="xb-item--img">
                                                <img class="project-img" loading="lazy" src="{{ asset('assets/img/project/asamalao.com_ (2).png') }}" alt="Ghế massage Asama Lao">
                                            </div>
                                            <div class="xb-item--header">
                                                <span class="xb-item--sub-title">Dự án đã thực hiện</span>
                                                <div class="xb-item--logo">
                                                    <img loading="lazy" src="{{ asset('assets/img/brand/brd-logo04.png') }}" alt="Logo Asama Lao">
                                                </div>
                                                <h2 class="xb-item--title">Website ghế massage cao cấp - Asama Lao</h2>
                                            </div>
                                        </div>
                                        <div class="xb-right-item">
                                            <p class="xb-item--list">"Asamalao.com mang đến sự đột phá trong việc cung cấp ghế massage cao cấp tại thị trường Lào. Website được thiết kế hiện đại, dễ sử dụng, hỗ trợ khách hàng lựa chọn các sản phẩm phù hợp với nhu cầu, cùng với hệ thống thanh toán và giao hàng tiện lợi."</p>
                                            <div class="xb-item--author">
                                                <span class="xb-item--name">Phouthong Sayavong</span>
                                                <span class="xb-item--desig">Founder tại Asama Lao</span>
                                            </div>
                                            <div class="xb-item--holder ul_li">
                                                <div class="xb-item--time">
                                                    <span class="xb-item--number">10 phút</span>
                                                    <span class="xb-item--text">Hoàn tất đặt hàng <br> chỉ với vài thao tác.</span>
                                                </div>
                                                <div class="xb-item--time">
                                                    <span class="xb-item--number">100%</span>
                                                    <span class="xb-item--text">Cam kết sản phẩm <br> chính hãng, bảo hành.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cs-tes-item">
                                        <div class="xb-left-item">
                                            <div class="xb-item--img">
                                                <img class="project-img" loading="lazy" src="{{ asset('assets/img/project/bvdienbienphu.com.vn__.png') }}" alt="Mắt kính Điện Biên Phủ">
                                            </div>
                                            <div class="xb-item--header">
                                                <span class="xb-item--sub-title">Dự án đã thực hiện</span>
                                                <div class="xb-item--logo">
                                                    <img loading="lazy" src="{{ asset('assets/img/brand/brd-logo05.png') }}" alt="Logo Mắt kính Điện Biên Phủ">
                                                </div>
                                                <h2 class="xb-item--title">Website thương mại điện tử - Mắt kính Điện Biên Phủ</h2>
                                            </div>
                                        </div>
                                        <div class="xb-right-item">
                                            <p class="xb-item--list">"Mắt kính Điện Biên Phủ tiên phong cung cấp mắt kính, gọng kính cao cấp và đào tạo nghề. Website hỗ trợ tra cứu đơn hàng, kết nối Zalo, nhận thông báo tự động qua ZNS, mang lại trải nghiệm mua sắm tiện lợi."</p>
                                            <div class="xb-item--author">
                                                <span class="xb-item--name">Nguyễn Văn Minh</span>
                                                <span class="xb-item--desig">Founder tại Mắt kính Điện Biên Phủ</span>
                                            </div>
                                            <div class="xb-item--holder ul_li">
                                                <div class="xb-item--time">
                                                    <span class="xb-item--number">30 giây</span>
                                                    <span class="xb-item--text">tra cứu đơn hàng dễ dàng <br> chỉ với vài bước.</span>
                                                </div>
                                                <div class="xb-item--time">
                                                    <span class="xb-item--number">99%</span>
                                                    <span class="xb-item--text">tỷ lệ khách hàng hài lòng <br> với dịch vụ tự động hóa.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cs-tes-item">
                                        <div class="xb-left-item">
                                            <div class="xb-item--img">
                                                <img loading="lazy" style="
    HEIGHT: 100%;
    OBJECT-FIT: cover;" src="{{ asset('assets/img/project/whalemath.io.vn_.png') }}" alt="">
                                            </div>
                                            <div class="xb-item--header">
                                                <span class="xb-item--sub-title">Dự án đã thực hiện</span>
                                                <div class="xb-item--logo">
                                                    <img loading="lazy" src="{{ asset('assets/img/brand/brd-logo05.png') }}" alt="Logo Asama Lao">
                                                </div>
                                                <h2 class="xb-item--title">WhaleMath - Nền tảng học toán hiện đại.</h2>
                                            </div>
                                        </div>
                                        <div class="xb-right-item">
                                            <p class="xb-item--list">"WhaleMath là nền tảng giáo dục toán học dành cho học sinh tiểu học, với các tính năng như quản lý bài tập, hệ thống điểm vỏ sò để nuôi vườn san hô, bài luyện tập, phòng thi và Whale Game, mang lại trải nghiệm học tập thú vị."</p>
                                            <div class="xb-item--author">
                                                <span class="xb-item--name">Trần Lê Hoàng Giang</span>
                                                <span class="xb-item--desig">CEO tại HG DIGITAL</span>
                                            </div>
                                            <div class="xb-item--holder ul_li">
                                                <div class="xb-item--time">
                                                    <span class="xb-item--number">95%</span>
                                                    <span class="xb-item--text">học sinh tham gia làm bài tập <br> và tăng điểm chuyên cần.</span>
                                                </div>
                                                <div class="xb-item--time">
                                                    <span class="xb-item--number">100%</span>
                                                    <span class="xb-item--text">học sinh yêu thích tính năng <br> Whale Game và vườn san hô.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="cs-bran-nav">
                                <div class="barnd-logo cs-brand-logo">
                                    <div class="cs-testimonial-slider-nav">
                                        <div class="brand-items">
                                            <div class="xb-img">
                                                <img style="
                                                max-height: 71px;
                                                object-fit: contain;
                                                margin-top: 1rem;
                                            "  loading="lazy" src="{{ asset('assets/img/project/logo_thebabu.png') }}" alt="">
                                            </div>
                                            <div class="xb-line"></div>
                                        </div>
                                        <div class="brand-items">
                                            <div class="xb-img">
                                                <img style="
                                                margin-bottom: -1.5rem;
                                            " loading="lazy" src="{{ asset('assets/img/project/01JCHVMN27C0TEMXKW5EVZD4A9.png') }}" alt="">
                                            </div>
                                            <div class="xb-line"></div>
                                        </div>
                                        <div class="brand-items">
                                            <div class="xb-img">
                                                <img style="
                                                margin-top: 1rem;
                                            " loading="lazy" src="{{ asset('assets/img/project/VietHung.png') }}" alt="book xe Hồ Chí Minh">
                                            </div>
                                            <div class="xb-line"></div>
                                        </div>
                                        <div class="brand-items">
                                            <div class="xb-img">
                                                <img style="
                                                width: 69px;
                                                margin-bottom: -1rem;
                                            " loading="lazy" src="{{ asset('assets/img/project/Picture1.webp') }}" alt="">
                                            </div>
                                            <div class="xb-line"></div>
                                        </div>
                                        <div class="brand-items">
                                            <div class="xb-img">
                                                <img style="
                                                margin-bottom: -3rem;
                                            " loading="lazy" src="{{ asset('assets/img/project/logo_drmkey.svg') }}" alt="drmkey">
                                            </div>
                                            <div class="xb-line"></div>
                                        </div>
                                        <div class="brand-items">
                                            <div class="xb-img">
                                                <img  loading="lazy" src="{{ asset('assets/img/project/whalemath.png') }}" alt="whalemath">
                                            </div>
                                            <div class="xb-line"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cs-tes-shape">
                        <div class="shape shape--one"><img  loading="lazy" src="{{ asset('assets/img/shape/linea-bg-shape.png') }}" alt=""></div>
                        <div class="shape shape--two"><img  loading="lazy" class="world" src="/assets/img/shape/world.png" alt=""></div>
                        <div class="shape shape--three"><img  loading="lazy" src="{{ asset('assets/img/shape/linear-shape.png') }}" alt=""></div>
                    </div>
                 </section>
                <!-- testimonial section end  -->
                <section id="service_packs" class="pricing pt-130 pb-130">
                    <div class="container">
                        <div class="sec-title--two text-center mb-60">

                            <span style="visibility: visible;
                            animation-duration: 600ms;
                            animation-name: fadeInDown;
                            border: 1px solid rgba(255, 255, 255, 0.22);
                            background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.1) 100%);
                            box-shadow: 0 2px 4px 0 rgba(44, 64, 94, 0.08), 0 1px 1px 0 rgba(44, 64, 94, 0.04), 0 0 0 1px rgba(44, 64, 94, 0.06);
                            color: #9596a8;" class="sub-title wow fadeInDown" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInDown;"><img loading="lazy" src="http://localhost:8000/assets/img/icon/dollar-icon.svg" alt=""><span >Bảng giá dịch vụ Website</span></span>


                            <h2 class="title wow fadeInDown" data-wow-delay="150ms" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-delay: 150ms; animation-name: fadeInDown;">Bảng giá thiết kế web trọn gói
                            </h2>
                        </div>
                        <div class="xb-pricing-nav-wrap text-center mb-110">
                            <ul class="xb-pricing-nav ul_li_center nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Cơ bản <span> - 20% </span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" tabindex="-1">Nâng cao</button>
                                </li>
                              </ul>
                        </div>
                        <div class="pg-pricing_content">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row mt-none-30">
                                        <div class="col-lg-4 mt-30">
                                            <div class="pg-pricing-item pos-rel">
                                                <div class="xb-item--inner o-hidden pos-rel">
                                                    <div class="xb-item--holder ul_li">
                                                        <div class="xb-item--icon"><img src="/assets/img/icon/pricing-icon01.svg" alt=""></div>
                                                        <div class="xb-item--right">
                                                            <h3 class="xb-item--title">Gói cơ bản 1</h3>
                                                            <span class="xb-item--text">Dành cho doanh nghiệp mới.</span>
                                                        </div>
                                                    </div>
                                                    <div class="xb-item--price">
                                                        <h2 class="xb-item--number">2,500,000</h2>
                                                        <span class="xb-item--time">VND</span>
                                                    </div>
                                                    <div class="xb-item--line"></div>
                                                    <h4 class="xb-item--feature">Tính năng</h4>
                                                    <ul class="xb-item--list list-unstyled">
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Website theo mẫu có sẵn</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">SEO cơ bản</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Mobie, Tablet Responsive</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Liên hệ để mua hàng </li>                                                        </li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Bài viết + Sản phẩm </li>                                                        </li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Lượt xem, theo dõi tương tác web</li>                                                        </li>                                                        </li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Domain + VPS miễn phí 1 năm</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Tích hợp đa ngôn ngữ tự động</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Có website trên google sau 3 - 5 ngày</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Code tay bằng ngôn ngữ lập trình 100%</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Trang quản trị riêng cho doanh nghiệp</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Bảo hành miễn phí 3 năm</li>
                                                        <li class="deactive"><img src="/assets/img/icon/cross-icon.svg" alt="">Đặt hàng online</li>
                                                        <li class="deactive"><img src="/assets/img/icon/cross-icon.svg" alt="">Thanh toán ngân hàng tự động</li>
                                                        <li class="deactive"><img src="/assets/img/icon/cross-icon.svg" alt="">Quản lý doanh thu tự động</li>
                                                        <li class="deactive"><img src="/assets/img/icon/cross-icon.svg" alt="">Kết nối Zalo OA, ZNS tự động gửi tin</li>
                                                        <li class="deactive"><img src="/assets/img/icon/cross-icon.svg" alt="">Bảo hành trọn đời</li>
                                                    </ul>
                                                    <div class="pg-det-btn">
                                                        <a href="/contact" class="cp-btn">Liên hệ ngay</a>
                                                    </div>
                                                    <div class="xb-shape"><img src="/assets/img/shape/pg-shape.png" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-30">
                                            <div class="pg-pricing-item active pos-rel">
                                                <span class="xb-item--top-text">Phổ biến nhất ✨</span>
                                                <div class="xb-item--inner o-hidden pos-rel">
                                                    <div class="xb-item--holder ul_li">
                                                        <div class="xb-item--icon"><img src="/assets/img/icon/pricing-icon02.svg" alt=""></div>
                                                        <div class="xb-item--right">
                                                            <h3 class="xb-item--title">Gói cơ bản 2</h3>
                                                            <span class="xb-item--text">Doanh nghiệp vừa và nhỏ.</span>
                                                        </div>
                                                    </div>
                                                    <div class="xb-item--price">
                                                        <h2 class="xb-item--number">5,000,000</h2>
                                                        <span class="xb-item--time">VND</span>
                                                    </div>

                                                    <div class="xb-item--line"></div>
                                                    <h4 class="xb-item--feature">Tính năng</h4>
                                                    <ul class="xb-item--list list-unstyled">
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Website theo yêu cầu</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">SEO cơ bản</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Mobie, Tablet Responsive</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Đặt hàng online</li>                  </li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Bài viết + Sản phẩm </li>                                                        </li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Lượt xem, theo dõi tương tác web</li>                                                        </li>                                                        </li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Domain + VPS miễn phí 1 năm</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Tích hợp đa ngôn ngữ tự động</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Có website trên google sau 1 - 2 tuần</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Code tay bằng ngôn ngữ lập trình 100%</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Trang quản trị riêng cho doanh nghiệp</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Bảo hành miễn phí 3 năm</li>

                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Thanh toán ngân hàng tự động</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Quản lý doanh thu tự động</li>
                                                        <li class="deactive"><img src="/assets/img/icon/cross-icon.svg" alt="">Kết nối Zalo OA, ZNS tự động gửi tin</li>
                                                        <li class="deactive"><img src="/assets/img/icon/cross-icon.svg" alt="">Bảo hành trọn đời</li>
                                                    </ul>
                                                    <div class="pg-det-btn">
                                                        <a href="/contact" class="cp-btn">Liên Hệ ngay</a>
                                                    </div>
                                                    <div class="xb-shape"><img src="/assets/img/shape/pg-shape.png" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-30">
                                            <div class="pg-pricing-item pos-rel">
                                                <div class="xb-item--inner o-hidden pos-rel">
                                                    <div class="xb-item--holder ul_li">
                                                        <div class="xb-item--icon"><img src="/assets/img/icon/pricing-icon03.svg" alt=""></div>
                                                        <div class="xb-item--right">
                                                            <h3 class="xb-item--title">Gói cơ bản 3</h3>
                                                            <span class="xb-item--text">Doanh nghiệp vừa và lớn.</span>
                                                        </div>
                                                    </div>
                                                    <div class="xb-item--price">
                                                        <h2 class="xb-item--number">8,000,000</h2>
                                                        <span class="xb-item--time">VND</span>
                                                    </div>

                                                    <div class="xb-item--line"></div>
                                                    <h4 class="xb-item--feature">Tính năng</h4>
                                                    <ul class="xb-item--list list-unstyled">
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Website theo yêu cầu riêng</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">SEO toàn diện</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Mobie, Tablet Responsive</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Đặt hàng online</li>                                   </li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Bài viết + Sản phẩm </li>                                                        </li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Lượt xem, theo dõi tương tác web</li>                                                        </li>                                                        </li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Domain + VPS miễn phí 1 năm</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Tích hợp đa ngôn ngữ tự động</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Có website trên google sau 2 - 3 tuần</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Code tay bằng ngôn ngữ lập trình 100%</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Trang quản trị riêng cho doanh nghiệp</li>

                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Thanh toán ngân hàng tự động</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Quản lý doanh thu tự động</li>
                                                        <li ><img src="/assets/img/icon/check-icon.svg" alt="">Kết nối Zalo OA, ZNS tự động gửi tin</li>
                                                        <li ><img src="/assets/img/icon/check-icon.svg" alt="">Bảo hành trọn đời</li>
                                                    </ul>
                                                    <div class="pg-det-btn">
                                                        <a href="/contact" class="cp-btn">Liên Hệ ngay</a>
                                                    </div>
                                                    <div class="xb-shape"><img src="/assets/img/shape/pg-shape.png" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row mt-none-30">
                                        <div class="col-lg-4 mt-30">
                                            <div class="pg-pricing-item pos-rel">
                                                <div class="xb-item--inner o-hidden pos-rel">
                                                    <div class="xb-item--holder ul_li">
                                                        <div class="xb-item--icon"><img src="/assets/img/icon/pricing-icon02.svg" alt=""></div>
                                                        <div class="xb-item--right">
                                                            <h3 class="xb-item--title">Sắp ra mắt</h3>
                                                        </div>
                                                    </div>
                                                    <div class="xb-item--price">
                                                        <h2 class="xb-item--number">???</h2>
                                                        <span class="xb-item--time">VND</span>
                                                    </div>
                                                    <div class="xb-item--line"></div>
                                                    <h4 class="xb-item--feature">Tính năng</h4>
                                                    <ul class="xb-item--list list-unstyled">
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Sắp ra mắt</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Sắp ra mắt</li>
                                                    </ul>
                                                    <div class="pg-det-btn">
                                                        <a href="/contact" class="cp-btn">Liên hệ ngay</a>
                                                    </div>
                                                    <div class="xb-shape"><img src="/assets/img/shape/pg-shape.png" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-30">
                                            <div class="pg-pricing-item active pos-rel">
                                                <span class="xb-item--top-text">Phổ biến nhất ✨</span>
                                                <div class="xb-item--inner o-hidden pos-rel">
                                                    <div class="xb-item--holder ul_li">
                                                        <div class="xb-item--icon"><img src="/assets/img/icon/pricing-icon02.svg" alt=""></div>
                                                        <div class="xb-item--right">
                                                            <h3 class="xb-item--title">Sắp ra mắt</h3>
                                                        </div>
                                                    </div>
                                                    <div class="xb-item--price">
                                                        <h2 class="xb-item--number">???</h2>
                                                        <span class="xb-item--time">VND</span>
                                                    </div>
                                                    <div class="xb-item--line"></div>
                                                    <h4 class="xb-item--feature">Tính năng</h4>
                                                    <ul class="xb-item--list list-unstyled">
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Sắp ra mắt</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Sắp ra mắt</li>
                                                    </ul>
                                                    <div class="pg-det-btn">
                                                        <a href="/contact" class="cp-btn">Liên hệ ngay</a>
                                                    </div>
                                                    <div class="xb-shape"><img src="/assets/img/shape/pg-shape.png" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-30">
                                            <div class="pg-pricing-item pos-rel">
                                                <div class="xb-item--inner o-hidden pos-rel">
                                                    <div class="xb-item--holder ul_li">
                                                        <div class="xb-item--icon"><img src="/assets/img/icon/pricing-icon02.svg" alt=""></div>
                                                        <div class="xb-item--right">
                                                            <h3 class="xb-item--title">Sắp ra mắt</h3>
                                                        </div>
                                                    </div>
                                                    <div class="xb-item--price">
                                                        <h2 class="xb-item--number">???</h2>
                                                        <span class="xb-item--time">VND</span>
                                                    </div>
                                                    <div class="xb-item--line"></div>
                                                    <h4 class="xb-item--feature">Tính năng</h4>
                                                    <ul class="xb-item--list list-unstyled">
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Sắp ra mắt</li>
                                                        <li><img src="/assets/img/icon/check-icon.svg" alt="">Sắp ra mắt</li>
                                                    </ul>
                                                    <div class="pg-det-btn">
                                                        <a href="/contact" class="cp-btn">Liên hệ ngay</a>
                                                    </div>
                                                    <div class="xb-shape"><img src="/assets/img/shape/pg-shape.png" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </section>


                 <style>
                    .sec-title--two .title {
                        color: white;
                    }
                    .pg-pricing-item.pos-rel .xb-item--inner {

    background: #010315;
    border: rgb(136 168 245);
    box-shadow: 0 8px 18px 0 rgb(79 16 163 / 43%);

                    }
                    .pg-det-btn a, .pg-pricing-item::before {
                        background: linear-gradient(86deg, #431dab 0%, #ae6dfe 100%);
                    }
                    .xb-pricing-nav {
                        border: 1px solid #a868f9;
    background: linear-gradient(86deg, #431dab 0%, #ae6dfe 100%);
    color: white ! IMPORTANT;
                    }
                    .xb-pricing-nav .nav-item .nav-link {
                        color: white;
                    }
                    .xb-pricing-nav .nav-item .nav-link.active {
                        color: black;
                    }
                    .xb-faq .accordion_box .block .acc-btn {
    padding: 28px 40px;
    font-size: 24px;
    line-height: 1.3;
    font-weight: 500;
    position: relative;
    cursor: pointer;
    background: #010315;
    color: #ffffff;
}
.sec-title--two .sub-title {
    border: 1px solid rgba(255, 255, 255, 0.22);
    background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.1) 100%);
    box-shadow: 0 2px 4px 0 rgba(44, 64, 94, 0.08), 0 1px 1px 0 rgba(44, 64, 94, 0.04), 0 0 0 1px rgba(44, 64, 94, 0.06);
}

.sec-title--two .sub-title {
    color: #ffffff99;

}
.xb-faq .accordion_box {
    background: linear-gradient(86deg, #431dab 0%, #ae6dfe 100%);;
}
.xb-faq .accordion_box .block .content {
    background: #010315;
    color: white;
}
.xb-faq .accordion_box .block .acc-btn .number {
    color: rgb(171 107 252);
}
.xb-faq .accordion_box .block .content ul li i {
    margin-right: 10px;
    font-size: 16px;
    color: #ad6cfd;
}
.xb-faq .accordion_box .block {
    position: relative;
    overflow: hidden;
    border-bottom: 1px solid #2f2f2f;
}
                 </style>
                <!-- awrad section start  -->
                 <section class="award pt-160">
                    <div class="container">
                        <div class="xb-award-wrap">
                            <div class="award-top ul_li_between align-items-end mb-10">
                                <div class="sec-title--two sec-title--three mb-30">
                                    <span class="sub-title wow fadeInDown" data-wow-delay="000ms" data-wow-duration="600ms">
                                        <img loading="lazy" src="{{ asset('assets/img/icon/star02.svg') }}" alt="">
                                        <span>Thành Tựu Của Chúng Tôi</span>
                                    </span>
                                    <h2 class="title wow skewIn" data-wow-delay="000ms" data-wow-duration="600ms">Giải Thưởng và Công Nhận</h2>
                                </div>
                                <p class="content mb-30">Chúng tôi tự hào về những giải thưởng đã đạt được, thể hiện sự tận tâm trong việc cung cấp các giải pháp an ninh mạng hàng đầu và niềm tin mà khách hàng dành cho chúng tôi.</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="award-item wow fadeInUp" data-wow-delay="000ms" data-wow-duration="600ms">
                                        <div class="xb-img"><img  loading="lazy" src="{{ asset('assets/img/award/img01.png') }}" alt=""></div>
                                        <span class="xb-title">Best Network Security 2023</span>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="award-item wow fadeInUp" data-wow-delay="150ms" data-wow-duration="600ms">
                                        <div class="xb-img"><img  loading="lazy" src="{{ asset('assets/img/award/img02.png') }}" alt=""></div>
                                        <span class="xb-title">Cyber Defense Leader 2022</span>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="award-item wow fadeInUp" data-wow-delay="300ms" data-wow-duration="600ms">
                                        <div class="xb-img"><img  loading="lazy" src="{{ asset('assets/img/award/img03.png') }}" alt=""></div>
                                        <span class="xb-title">Data Protection Awards 2020</span>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="award-item wow fadeInUp" data-wow-delay="450ms" data-wow-duration="600ms">
                                        <div class="xb-img"><img  loading="lazy" src="{{ asset('assets/img/award/img04.png') }}" alt=""></div>
                                        <span class="xb-title">Innovator in Security 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </section>
                <!-- awrad section end  -->

                <!-- blog section start  -->
                 <section class="blog pt-155">
                    <div class="container">
                        <div class="sec-title--two sec-title--three text-center mb-60">
                            <span class="sub-title wow fadeInDown" data-wow-duration="600ms">
                                <img loading="lazy" src="{{ asset('assets/img/icon/blg-cap.svg') }}" alt="">
                                <span>Bài viết trên blog</span>
                            </span>
                            <h2 class="title wow fadeInDown" data-wow-duration="600ms">Đọc các bài viết mới nhất</h2>
                        </div>

                        <div class="row justify-content-center mt-none-30">
                            @foreach($blogs as $blog)
                                <div class="col-lg-4 col-md-6 mt-30">
                                    <div class="xb-blog-item wow fadeInUp" data-wow-delay="0ms" data-wow-duration="600ms">
                                        <div class="xb-item--holder" style="
                                        width: 100%;
                                    ">
                                            <a  href="{{ route('blog.detail', $blog->slug) }}" style="
                                                width: 100%;
                                            " class="xb-item--img">
                                                <img style="
                                                width: 100%;
                                            " loading="lazy" src="{{ Storage::url($blog->thumbnail) }}" alt="">
                                                <div class="xb-item--circle-arrow">
                                                    <img loading="lazy" src="/assets/img/icon/arrow-white.png" alt="">
                                                </div>
                                                <div class="xb-item--line">
                                                    <img loading="lazy" src="{{ asset('assets/img/shape/blg-line.png') }}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <h2 class="xb-item--title border-effect-2">
                                            <a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->title }}</a>
                                        </h2>
                                        <ul class="xb-item--meta list-unstyled ul_li">
                                            <li>
                                                <span><img loading="lazy" src="{{ asset('assets/img/icon/profile-circle.png') }}" alt=""></span>
                                                Viết bới {{ $blog->user->name ?? 'Giang Trần' }} <!-- Giả sử bạn có quan hệ với User -->
                                            </li>
                                            <li>
                                                <span><img loading="lazy" src="{{ asset('assets/img/icon/menu-board.png') }}" alt=""></span>
                                                {{ $blog->created_at->format('d/m/Y') }} <!-- Định dạng ngày -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="xb-btn mt-60 text-center wow fadeInUp" data-wow-delay="300ms" data-wow-duration="600ms">
                            <a href="/blogs" class="blc-btn blc-btn--gardiant">
                                <span>Xem thêm bài viết <i class="far fa-angle-right"></i></span>
                                <span class="btn-shape">
                                    <svg width="271" height="60" viewBox="0 0 271 60" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 17.2308L20.1225 0.5H252.042L270.5 17.2217V43.7692L252.05 59.5H20.1225L0.5 42.7692V17.2308Z" fill="#010315" stroke="url(#paint0_linear_1742_66145)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_1742_66145" x1="271" y1="61.5556" x2="232.791" y2="-3.08978" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#6780D2"></stop>
                                                <stop offset="1" stop-color="#2F3B8D"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="btn-shape2">
                                    <svg width="362" height="78" viewBox="0 0 362 78" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 22.7183L25.5093 1.39453H337.972L361.5 22.7092V56.5515L337.98 76.6051H25.5093L0.5 55.2813V22.7183Z" fill="url(#paint0_linear_1600_9966933)" stroke="#23263C"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_1600_9966933" x1="1.29285" y1="38.9973" x2="362" y2="33.9973" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#431DAB"></stop>
                                                <stop offset="1" stop-color="#AE6DFE"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span>
                            </a>
                        </div>

                    </div>
                 </section>
                <!-- blog section end  -->





                <section class="faq pb-130 mt-5">
                    <div class="container">
                        <div class="sec-title--two text-center mb-60">
                            <div class="sub-title wow fadeInDown" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInDown;"><img src="/assets/img/icon/magic.svg" alt="">FAQ’s</div>
                            <h2 class="title wow fadeInDown" data-wow-delay="150ms" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-delay: 150ms; animation-name: fadeInDown;">Thắc mắc về dịch vụ website tại Công Ty <br> HG DIGITAL</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="xb-faq wow fadeInUp" data-wow-delay="200ms" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                    <ul class="accordion_box clearfix list-unstyled">
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <span class="number">01</span> Dịch vụ thiết kế website của HG DIGITAL là WordPress hay code tay?
                                                <span class="arrow"></span>
                                            </div>
                                            <div class="acc_body" style="display: none;">
                                                <div class="content">

                                                    <p>HG DIGITAL là dịch vụ thiết kế website theo yêu cầu với tùy từng nhu cầu dự án sẽ sử dụng và được viết bằng code tay.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <span class="number">02</span> Chi phí thiết kế web tại HG DIGITAL là bao nhiêu?
                                                <span class="arrow"></span>
                                            </div>
                                            <div class="acc_body" style="display: none;">
                                                <div class="content">

                                                    <p>HG DIGITAL hiện đang cung cấp 3 gói thiết kế web là website cơ bản và website customize.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <span class="number">03</span> HG DIGITAL có thiết kế website responsive không?
                                                <span class="arrow"></span>
                                            </div>
                                            <div class="acc_body" style="display: block;">
                                                <div class="content">

                                                    <p>Có. Tất cả các website được công ty thiết kế web HG DIGITAL xây dựng đều tương thích và hiển thị trên mọi thiết bị phổ biến hiện nay: tablet, smartphone, laptop, PC… với mọi khung hình, độ phân giải.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <span class="number">04</span> Khi website bị lỗi thì HG DIGITAL có hỗ trợ gì không?
                                                <span class="arrow"></span>
                                            </div>
                                            <div class="acc_body" style="display: none;">
                                                <div class="content">

                                                    <p>Công ty thiết kế website uy tín HG DIGITAL có đội ngũ chuyên viên tư vấn sẵn sàng hỗ trợ khách hàng 24/7.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <span class="number">05</span> Tôi có được chọn mẫu có sẵn không hay phải thiết kế website riêng?
                                                <span class="arrow"></span>
                                            </div>
                                            <div class="acc_body" style="display: none;">
                                                <div class="content">

                                                    <p>
                                                        Tùy thuộc vào nhu cầu, ngân sách mà khách hàng nên lựa chọn phương án thiết kế website cho phù hợp:
                                                        <br>* Làm website theo mẫu có sẵn: Chi phí rẻ, thời gian nhanh chóng tuy nhiên không thể thay đổi giao diện, bố cục theo ý mình.
                                                        <br>* Thiết kế website giao diện riêng: Chi phí cao, thời gian triển khai lâu hơn nhưng đổi lại website được thiết kế theo ý muốn, giao diện độc quyền, tính năng riêng.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <span class="number">06</span> Tôi không biết quản trị website thì phải làm sao?
                                                <span class="arrow"></span>
                                            </div>
                                            <div class="acc_body" style="display: none;">
                                                <div class="content">

                                                    <p>HG DIGITAL có đội ngũ hỗ trợ quản trị website trong giờ hành chính, ngoài ra cung cấp tài liệu văn bản và video hướng dẫn.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <span class="number">07</span> Website của tôi có được chuẩn SEO không?
                                                <span class="arrow"></span>
                                            </div>
                                            <div class="acc_body" style="display: none;">
                                                <div class="content">

                                                    <p>HG DIGITAL sẽ luôn đảm bảo đầy đủ các yếu tố, thuộc tính chuẩn SEO trên website.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                 </section>
                <!-- contact section start  -->
                <section class="contact contact-bg pt-140 pb-100 pos-rel bg_img" data-background="/assets/img/bg/cont_bg-shape.png">
                    <div class="container">
                        <div class="contact-two pos-rel bg_img" data-background="/assets/img/bg/cont-bg02.png">
                            <div class="row mt-none-30">
                                <div class="col-lg-5 mt-30">
                                    <div class="cs-contact-wrap">
                                        <div class="xb-item--inner">
                                            <div class="sec-title--two sec-title--three mb-25">
                                                <span class="sub-title"><img loading="lazy" src="{{ asset('assets/img/icon/edit.svg') }}" alt=""><span>Liên hệ báo giá ngay</span></span>
                                                <h2 class="title">Hãy bắt đầu</h2>
                                            </div>
                                            <p class="xb-item--list" >Khởi đầu hành trình đến thành công và phát triển của bạn.</p>
                                            <ul class="xb-item--cont_info list-unstyled">
                                                <li><span><img loading="lazy" src="{{ asset('assets/img/icon/call-balck.png') }}" alt=""></span>+(84) 0966 579 217</li>
                                                <li><span class="clr-sky"><img loading="lazy" src="{{ asset('assets/img/icon/sms-black.png') }}" alt=""></span>trangiangzxc@gmail.com</li>
                                                <li><span class="clr-orange"><img loading="lazy" src="{{ asset('assets/img/icon/loc-black.png') }}" alt=""></span>Quận 12, HCM</li>
                                            </ul>
                                            <div class="xb-item--img">
                                                <img loading="lazy" src="{{ asset('assets/img/contact/cont-shape.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 mt-30">
                                    <div class="cs-contact-wrap cs-contact-form">
                                        <div class="sec-title--two sec-title--three">
                                            <span class="sub-title"><img loading="lazy" src="{{ asset('assets/img/icon/bill.svg') }}" alt=""><span>Hãy kết nối!</span></span>
                                            <h2 class="title">Gửi tin nhắn tới HG DIGITAL, để được giải đáp mọi thắc mắc.  </h2>
                                        </div>
                                        <form   class="contact-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="input-field">
                                                        <label for="text1">Tên của bạn</label>
                                                        <div class="input-box">
                                                            <input type="text" wire:model="name" id="text1">
                                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-field">
                                                        <label for="text2">Email</label>
                                                        <div class="input-box">
                                                            <input type="email" wire:model="email" id="text2">
                                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-field">
                                                        <label for="text3">Điện thoại</label>
                                                        <div class="input-box">
                                                            <input type="tel" wire:model="phone" id="text3">
                                                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-field">
                                                        <label for="text4">Tên công ty</label>
                                                        <div class="input-box">
                                                            <input type="text" wire:model="company" id="text4">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-field text-field">
                                                        <label for="text5">Chúng tôi có thể giúp gì cho bạn hôm nay?</label>
                                                        <div class="input-box">
                                                            <textarea wire:model="message" id="text5"></textarea>
                                                            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                            <div class="contact-btn1">
                                                <button type="button" style="background: none;" wire:click="submit" class="blc-btn" onclick="handleSubmit(event)">
                                                    <span class="">Gửi ngay <i class="far fa-angle-right"></i></span>
                                                    <span class="btn-shape">
                                                        <svg width="362" height="78" viewBox="0 0 362 78" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.5 22.7183L25.5093 1.39453H337.972L361.5 22.7092V56.5515L337.98 76.6051H25.5093L0.5 55.2813V22.7183Z" fill="url(#paint0_linear_1600_9966932)" stroke="#23263C" />
                                                            <defs>
                                                                <linearGradient id="paint0_linear_1600_9966932" x1="1.29285" y1="38.9973" x2="362" y2="33.9973" gradientUnits="userSpaceOnUse">
                                                                    <stop offset="0" stop-color="#431DAB" />
                                                                    <stop offset="1" stop-color="#AE6DFE" />
                                                                </linearGradient>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                    <span class="btn-shape2">
                                                        <svg width="271" height="60" viewBox="0 0 271 60" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.5 17.2308L20.1225 0.5H252.042L270.5 17.2217V43.7692L252.05 59.5H20.1225L0.5 42.7692V17.2308Z" fill="#010315" stroke="url(#paint0_linear_1742_661333)" />
                                                            <defs>
                                                                <linearGradient id="paint0_linear_1742_661333" x1="271" y1="61.5556" x2="232.791" y2="-3.08978" gradientUnits="userSpaceOnUse">
                                                                    <stop offset="0" stop-color="#6780D2" />
                                                                    <stop offset="1" stop-color="#2F3B8D" />
                                                                </linearGradient>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </button>
                                                <script>
                                                    function handleSubmit(event) {
                                                        event.preventDefault(); // Ngăn chặn hành động mặc định của nút
                                                        // Gọi hàm Livewire submit
                                                        Livewire.emit('submit'); // Phát sự kiện để gọi hàm submit trong Livewire
                                                    }
                                                </script>

                                            </div>

                                        @if (session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xb-shape"><img loading="lazy" src="{{ asset('assets/img/shape/con-shape.png') }}" alt=""></div>
                </section>

                <!-- contact section end  -->

            </main>
            <!-- main area end  -->

           <!-- footer strt -->
           <footer class="footer bg_img footer-style-two footer-style-three pt-120 pos-rel" data-bg-color="#010315" data-background="/assets/img/bg/footer_overly.png">
            <div class="container">
                <div class="xb-footer">
                    <div class="sec-title--two sec-title--three text-center mb-40">
                        <span class="sub-title"><img loading="lazy" src="{{ asset('assets/img/icon/airdrop01.svg') }}" alt=""><span>Tham gia cộng đồng HG DIGITAL</span></span>
                    </div>
                    <div class="social-link ul_li_between">
                        <div class="social-item">
                            <a href="#!" class="xb-icon"><img loading="lazy" src="{{ asset('assets/img/footer/social-link01.png') }}" alt=""></a>
                        </div>
                        <div class="social-item">
                            <a href="#!" class="xb-icon"><img loading="lazy" src="{{ asset('assets/img/footer/social-link02.png') }}" alt=""></a>
                        </div>
                        <div class="social-item">
                            <a href="#!" class="xb-icon"><img loading="lazy" src="{{ asset('assets/img/footer/social-link03.png') }}" alt=""></a>
                        </div>
                        <div class="social-item">
                            <a href="#!" class="xb-icon"><img loading="lazy" src="{{ asset('assets/img/footer/social-link04.png') }}" alt=""></a>
                        </div>
                        <div class="social-item">
                            <a href="#!" class="xb-icon"><img loading="lazy" src="{{ asset('assets/img/footer/social-link05.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="footer-inner mt-80 mb-70 ul_li_between align-items-start">
                        <div class="footer-widget">
                            <span class="xb-item--sub-title">Thông tin liên hệ</span>
                            <ul class="xb-item--holder list-unstyled">
                            <li class="xb-item--list">Công ty TNHH HG Digital</li>
                            <li class="xb-item--list">Quận 12, TP.HCM</li>
                            <li class="xb-item--list">SĐT: <a href="tel:0966579217">0966579217</a></li>
                            <li class="xb-item--list">Email: <a href="mailto:trangiangzxc@gmail.com">trangiangzxc@gmail.com</a></li>
                         </ul>
                        </div>
                        <div class="footer-widget">
                            <span class="xb-item--sub-title">Dịch vụ của chúng tôi</span>
                            <ul class="xb-item--holder list-unstyled">
                                <li class="xb-item--list"><a href="#!">Xây dựng website trọn gói</a></li>
                                <li class="xb-item--list"><a href="#!">Xây dựng LandingPage website</a></li>
                                <li class="xb-item--list"><a href="#!">Clone giao diện website nhanh chóng</a></li>
                                <li class="xb-item--list"><a href="#!">Code, thêm chức năng, và xây dựng website</a></li>
                            </ul>
                        </div>


                        <div class="sa-newslatter footer-widget">
                            <span class="xb-item--sub-title">Bản tin</span>
                            <p class="xb-item--list clr-white">Đăng ký HG DIGITAL để nhận cập nhật hàng tuần.</p>
                            <div class="xb-item--input-box">
                                <label for="text6">Email</label>
                                <div class="xb-item--input_field pos-rel">
                                    <input type="email" name="gmail" id="text6">
                                    <button type="submit" class="xb-item--btn"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer-copyright mt-70 ul_li_between">
                        <p class="copyright mt-20">Bản quyền © 2025 <a href="https://www.facebook.com/profile.php?id=61569955093836">HG DIGITAL</a>. Tất cả quyền được bảo lưu.</p>
                        <ul class="footer-link ul_li mt-20 ">
                            <li><span>Follow us :</span></li>
                            <li><a href="https://www.facebook.com/profile.php?id=61569955093836"><i class="fab fa-facebook-f "></i></a></li>
                            <li><a href="tel:+0966579217"><i class="fas fa-phone "></i></a></li>
                            <li><a href="#! "><i class="fab fa-linkedin-in "></i></a></li>
                            <li><a href="#! "><i class="fab fa-youtube "></i></a></li>
                            <p class="mb-0 f-light f-w-500">
                                @php
                                    $todayVisitCount = \App\Models\AccessHistory::where('date', now()->toDateString())->value('visit_count') ?? 0;
                                @endphp
                                | {{ $todayVisitCount }}
                            </p>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

            <!-- footer end -->

        </div>


        </body>
</div>
