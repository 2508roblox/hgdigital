{{-- <div>
    <div class="template-detail">
        <h1>{{ $template->name }}</h1>
        <img src="{{ asset('storage/' . $template->thumbnail) }}" alt="{{ $template->name }}" class="img-fluid mb-4">

        <div class="price">
            <span class="text-muted"><del>{{ number_format($template->price_original) }} VND</del></span>
            <strong>{{ number_format($template->price_discount) }} VND</strong>
        </div>

        <p>{{ $template->description }}</p>

        <div class="tags mb-3">
            <strong>Tags:</strong>
            @foreach ($template->tags as $tag)
                <span class="badge bg-secondary">{{ $tag->name }}</span>
            @endforeach
        </div>

        <a href="{{ $template->demo_url }}" target="_blank" class="btn btn-info">Xem Demo</a>
    </div>
</div> --}}

<div>

    <body class="sco_agency">

        <!-- backtotop - start -->
        <div class="xb-backtotop">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->

        <!-- Preloader - Start -->
        {{-- <div id="xb-loadding" class="xb-loader">
            <div class="xb-dual-ring"></div>
        </div> --}}
        <!-- Preloader - End -->

        <div class="body_wrap">

            <!-- header start -->
            <livewire:header-secondary />

            <!-- header end -->

            <!-- main area start  -->
            <main>
                <!-- page title start  -->
                <section class="page-title pt-200 pos-rel bg_img "
                    data-background="{{ asset('assets/img/bg/page_bg01.jpg ') }}">

                </section>
                <!-- page title end  -->

                <!-- item-details end  -->
                <div class="csd-img pt-70 pb-0">
                    <div class="container">
                        <div class="item-details_grid">
                            <div class="item-details_image">
                                <img style="object-fit: cover;
    width: 100%;"
                                    src="{{ asset('storage/' . $template->image) }}" alt="{{ $template->name }}"
                                    class="img-fluid mb-4">
                            </div>
                            <div class="template_info1"
                                style="
                            display: flex;
                            flex-direction: column;
                            align-items: start;
                            gap: 0rem;
                        ">
                                <h2 class="sd-title ">

                                    {{ $template->name }}
                                </h2>
                                <div class="price-info">
                                    <span
                                        class="current-price">{{ number_format($template->discounted_price, 0, ',', '.') }}₫</span>
                                    <span
                                        class="original-price">{{ number_format($template->original_price, 0, ',', '.') }}₫</span>
                                </div>
                                <div class="purchases-info">
                                    <p>Đã mua: {{ $template->purchases }}</p>
                                </div>

                                <div class="khuyen-mai">
                                    <h4>Ưu đãi khi mua Theme tại ThemeWP.vn</h4>
                                    <li><span><img src="../assets/img/check-icon.svg" alt="">Tặng ngay 50.000 khi đăng ký tài khoản</span></li>
                                    <li><span><img src="../assets/img/check-icon.svg" alt="">Hỗ trợ cài đặt giao diện demo lên Hosting</span></li>
                                    <li><a href="https://themewp.vn/tai-lieu-huong-dan/" target="_blank"
                                            rel="noopener"><span><img src="../assets/img/check-icon.svg" alt="">Cung cấp tài liệu hướng dẫn sử dụng</span></a></li>
                                    <li><a href="https://themewp.vn/kho-plugin/" target="_blank"
                                            rel="noopener"><span><img src="../assets/img/check-icon.svg" alt="">Được truy cập sử dụng kho plugin trả phí</span></a>
                                    </li>
                                    <li><a href="https://themewp.vn/tich-luy-diem-thuong-giam-gia/" target="_blank"
                                            rel="noopener"><span><img src="../assets/img/check-icon.svg" alt="">Tích điểm giảm giá cho những lần mua tiếp
                                                theo</span></a></li>
                                </div>

                                <div class="hosting-uudai">
                                    <a href="https://themewp.vn/hosting/" target="_blank" rel="noopener">Cloud Hosting
                                        SSD giá rẻ, chất lượng, toàn quyền quản lý - giảm giá, hỗ trợ tốt hơn khi mua
                                        cùng.</a>
                                </div>
                               
                                


                              <div class="d-flex gap-1">
                                <div class="xb-item--button mt-2"  style="width: 14rem;">
                                    <a href="{{ $template->demo_link }}" style="border-radius: 10px; width: 100%;display: block; display: flex; gap: .4rem; align-items: center; justify-content: center; ">
                                        <small class="iconbox_icon">
                                         
<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill="#ffffff" fill-rule="evenodd" clip-rule="evenodd" d="M17.0873 8.0606C15.1947 4.7393 12.3606 3.00002 9.45136 3C6.54199 2.99997 3.70792 4.73921 1.81531 8.06052C1.48344 8.64292 1.48344 9.35697 1.81531 9.93936C3.70791 13.2606 6.54199 14.9999 9.45127 15C12.3606 15 15.1947 13.2607 17.0873 9.93945C17.4192 9.35706 17.4192 8.643 17.0873 8.0606ZM9.11476 6.67082L8.50609 7.8882C8.46981 7.96076 8.41096 8.01961 8.33839 8.0559L7.12101 8.66458C6.84462 8.80279 6.84462 9.19722 7.12101 9.33537L8.33839 9.94413C8.41096 9.9804 8.46981 10.0393 8.50609 10.1118L9.11476 11.3291C9.253 11.6055 9.64738 11.6055 9.78562 11.3291L10.3943 10.1118C10.4306 10.0393 10.4894 9.9804 10.562 9.94413L11.7794 9.33537C12.0558 9.19722 12.0558 8.80279 11.7794 8.66459L10.562 8.0559C10.4894 8.01961 10.4306 7.96076 10.3943 7.8882L9.78562 6.67082C9.64738 6.39442 9.253 6.39442 9.11476 6.67082Z"  />
    </svg>
    
                                        </small>
                                        Demo  </a>
                                </div>
                                <div class="xb-item--button mt-2"  style="width: 14rem;">
                                    <a href="blog-details.html" style="border-radius: 10px; width: 100%;display: block; display: flex; gap: .4rem; align-items: center; justify-content: center; ">
                                        
                                        
<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M9.5625 11.9402H10.05C10.5375 11.9402 10.9425 11.5052 10.9425 10.9802C10.9425 10.3277 10.71 10.2002 10.3275 10.0652L9.57 9.80273V11.9402H9.5625Z" fill="#ffffff"/>
    <path d="M8.97755 1.42482C4.83755 1.43982 1.48505 4.80732 1.50005 8.94732C1.51505 13.0873 4.88255 16.4398 9.02255 16.4248C13.1626 16.4098 16.5151 13.0423 16.5001 8.90232C16.4851 4.76232 13.1176 1.41732 8.97755 1.42482ZM10.6951 8.99982C11.2801 9.20232 12.0676 9.63732 12.0676 10.9798C12.0676 12.1348 11.1601 13.0648 10.0501 13.0648H9.56255V13.4998C9.56255 13.8073 9.30755 14.0623 9.00005 14.0623C8.69255 14.0623 8.43755 13.8073 8.43755 13.4998V13.0648H8.16755C6.93755 13.0648 5.94005 12.0298 5.94005 10.7548C5.94005 10.4473 6.19505 10.1923 6.50255 10.1923C6.81005 10.1923 7.06505 10.4473 7.06505 10.7548C7.06505 11.4073 7.56005 11.9398 8.16755 11.9398H8.43755V9.40482L7.30505 8.99982C6.72005 8.79732 5.93255 8.36232 5.93255 7.01982C5.93255 5.86482 6.84005 4.93482 7.95005 4.93482H8.43755V4.49982C8.43755 4.19232 8.69255 3.93732 9.00005 3.93732C9.30755 3.93732 9.56255 4.19232 9.56255 4.49982V4.93482H9.83255C11.0626 4.93482 12.0601 5.96982 12.0601 7.24482C12.0601 7.55232 11.8051 7.80732 11.4976 7.80732C11.1901 7.80732 10.9351 7.55232 10.9351 7.24482C10.9351 6.59232 10.4401 6.05982 9.83255 6.05982H9.56255V8.59482L10.6951 8.99982Z" fill="#ffffff"/>
    <path d="M7.06641 7.02756C7.06641 7.68006 7.29891 7.80756 7.68141 7.94256L8.43891 8.20506V6.06006H7.95141C7.46391 6.06006 7.06641 6.49506 7.06641 7.02756Z" fill="#ffffff"/>
    </svg>
    
    Mua Ngay  </a>
                                </div>
                              </div>

                                <div class="product_meta">
                                    <span class="sku_wrapper">
                                        Mã: <span class="sku">#000{{ $template->id }}</span>
                                    </span>
                                    <span class="posted_in">
                                        Danh mục: 
                                        <a href=" " rel="tag">
                                            {{ $template->category->name }}
                                        </a>
                                    </span>
                                    <span class="tagged_as">
                                        Thẻ:
                                        @foreach($template->tags as $tag)
                                            <a href=" " rel="tag">
                                                {{ $tag->name }}
                                            </a>@if(!$loop->last), @endif
                                        @endforeach
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <style>
                    .csd-item {
    margin-top: 25px;
    align-items: end;
    
}
.csd-ser_inner .csd-item .xb-text {
    font-size: 12px;
}
                    .xb-item--button a:hover {
                  
    --bs-link-color-rgb: var(--bs-link-hover-color-rgb);
}
                    .xb-item--button a:hover {
    color: var(--color-heading-two) !important;
    transform: translateY(-2px) !important;
}
                    .product_meta > span {
                        border-bottom: 1px dashed rgba(128, 128, 128, 0.215);
                        padding-bottom: .3rem;
                    }
                    .product_meta {
                        display: flex
;
    flex-direction: column;
    gap: .3rem;
    width: 100%;
                    }
                    .khuyen-mai li span {
                        color: rgba(0, 0, 0, 0.653);
                        font-size: small;
                    }
                    .hosting-uudai a {
                        color: rgba(0, 0, 0, 0.653);
                        font-size: small;
                    }
                    .khuyen-mai li a {
                        color: rgba(0, 0, 0, 0.653);
                        font-size: small;
                    }
                    .khuyen-mai li img {
                        margin-right: .5rem;
                    }
                    .khuyen-mai h4 {
                        color: var(--color-primary-two);
                    }
                    .khuyen-mai {
                        width: 100%;
                        display: flex;
                        flex-direction: column;
                        gap: .4rem;
                        padding: 1rem;
    border-radius: 10px;
    border: 2px dashed var(--color-primary-two);
                    }
                    .hosting-uudai {
                        width: 100%;
                        display: flex;
                        flex-direction: column;
                        gap: .4rem;
                        padding: 1rem;
    border-radius: 10px;
    border: 2px dashed var(--color-primary-two);
                    }
                    li {
                        list-style: none;
                    }
                    .template_info1 {
                        gap: 1rem !important;
                    }

                    .price-info {
                        display: flex;
                        gap: 10px;
                        align-items: center;
                    }

                    .price-info .current-price {
                        font-size: 1.2em;
                        /* Giá hiện tại lớn hơn */
                        font-weight: bold;
                        color: var(--color-primary-two);
                        /* Màu nổi bật */
                    }

                    .price-info .original-price {
                        font-size: 0.9em;
                        /* Giá gốc nhỏ hơn */
                        color: #999;
                        /* Màu nhạt hơn */
                        text-decoration: line-through;
                        /* Gạch ngang giá gốc */
                    }

                    .csd-img {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .item-details_grid {
                        display: grid;
                        grid-template-columns: 1fr 1fr;
                        /* Cột trái 1 phần, cột phải 2 phần */
                        gap: 2rem;
                        /* Khoảng cách giữa các cột */
                    }

                    .item-details_image {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .template_info1 {
                        display: flex;
                        justify-content: flex-start;
                        align-items: center;
                        text-align: left;
                    }

                    /* Mobile */
                    @media (max-width: 768px) {
                        .item-details_grid {
                            grid-template-columns: 1fr;
                            /* Chuyển về 1 cột trên mobile */
                        }
                    }

                    .xb-item--button a {
                        padding: 9.5px 24px;
                        font-weight: 700;
                        font-size: 18px;
                        letter-spacing: 0em;
                        color: var(--color-white);
                        border-radius: 50px;
                        -webkit-border-radius: 50px;
                        -moz-border-radius: 50px;
                        -ms-border-radius: 50px;
                        -o-border-radius: 50px;
                        -webkit-transition: 0.3s;
                        -o-transition: 0.3s;
                        transition: 0.3s;
                        background: var(--color-primary-two);
                    }

                    .xb-item--button a:hover {
                        background-color: var(--color-yellow);
                        color: var(--color-heading-two);
                    }

                    .sd-heading .sd-title,.sd-process-item .xb-item--title,.similar-casestudy-title,  .csd-ser_inner .csd-item .xb-text , .khuyen-mai h4 ,  .template_info h2,
                    .sd-ser-content .sd-title {
                        font-family: "Montserrat", serif !important;
                        font-optical-sizing: auto;
                        font-weight: <weight>;
                        font-style: normal;
                    }

                    .similar-casestudy-title {}
                </style>
                <!-- item-details end  -->

                <!-- service-details-content start  -->
                <div class="sd-ser-content_wrap pb-90 mt-5 ">
                    <div class="container ">
                        <div class="csd-ser_warp ">
                            <div class="container mt-5">
                                <div class="csd-ser_inner ul_li_between">
                                    <div class="csd-item ul_li">
                                        <div class="xb-icon"><img src="../assets/img/icon/csd-icon01.svg"
                                                alt=""></div>
                                        <h6 class="xb-text">Tương thích tất cả thiết bị<span> </span></h6>
                                    </div>
                                    <div class="csd-item ul_li">
                                        <div class="xb-icon"><img src="../assets/img/icon/csd-icon02.svg"
                                                alt=""></div>
                                        <h6 class="xb-text">Tối ưu chuẩn SEO, bảo mật </h6>
                                    </div>
                                    <div class="csd-item ul_li">
                                        <div class="xb-icon"><img src="../assets/img/icon/csd-icon03.svg"
                                                alt=""></div>
                                        <h6 class="xb-text">Không giới hạn domain cài đặt
                                        </h6>
                                    </div>
                                    <div class="csd-item ul_li">
                                        <div class="xb-icon"><img src="../assets/img/icon/csd-icon04.svg"
                                                alt=""></div>
                                        <h6 class="xb-text">Dễ dàng chỉnh sửa, tùy biến</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sd-process_warp mt-5">
                            <div class="container">
                                <div class="sd-heading">
                                    <h2 class="sd-title">Quy trình dịch vụ</h2>
                                    <p class="sd-content">
                                        Quy trình dịch vụ của chúng tôi được thiết kế để đảm bảo sự thuận tiện và hài lòng tối đa. Từ việc chọn theme phù hợp, triển khai nhanh chóng, thanh toán dễ dàng đến bàn giao hoàn thiện, chúng tôi luôn đồng hành cùng bạn.
                                    </p>
                                </div>
                                <div class="sd-process_inner ul_li">
                                    <div class="sd-process-item">
                                        <div class="xb-item--icon">
                                            <img src="{{asset('assets/img/icon/sd-icon01.svg')}}" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Chọn theme</h3>
                                        <p class="xb-item--contact">
                                            Lựa chọn giao diện website phù hợp với nhu cầu và lĩnh vực của bạn.
                                        </p>
                                        <span class="xb-item--number">01</span>
                                    </div>
                                    <div class="sd-process-item">
                                        <div class="xb-item--icon">
                                            <img src="{{asset('assets/img/icon/sd-icon02.svg')}}" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Triển khai</h3>
                                        <p class="xb-item--contact">
                                            Chúng tôi cài đặt và tùy chỉnh theme theo yêu cầu của bạn.
                                        </p>
                                        <span class="xb-item--number">02</span>
                                    </div>
                                    <div class="sd-process-item">
                                        <div class="xb-item--icon">
                                            <img src="{{asset('assets/img/icon/sd-icon03.svg')}}" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Thanh toán</h3>
                                        <p class="xb-item--contact">
                                            Hoàn tất thanh toán thông qua các phương thức đơn giản và an toàn.
                                        </p>
                                        <span class="xb-item--number">03</span>
                                    </div>
                                    <div class="sd-process-item">
                                        <div class="xb-item--icon">
                                            <img src="{{asset('assets/img/icon/sd-icon04.svg')}}" alt="">
                                        </div>
                                        <h3 class="xb-item--title">Bàn giao</h3>
                                        <p class="xb-item--contact">
                                            Gửi bạn sản phẩm hoàn chỉnh, sẵn sàng để sử dụng.
                                        </p>
                                        <span class="xb-item--number">04</span>
                                    </div>
                                    <div class="sd-shape">
                                        <img src="{{asset('assets/img/shape/sd-shape.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- <div class="sd-ser-content mt-5">
                            <h2 class="sd-title">Mô Tả</h2>
                            <div class="template_info">


                                <p class="template-description mt-3">{!! $template->description !!}</p>
                               
                            </div>


                        </div> --}}
                        <div class="similar-casestudy pt-80">
                            <h2 class="similar-casestudy-title">Mẫu Theme tương tự</h2>
                            <div class="row mt-none-30">
                                @foreach ($relatedTemplates as $related)
                                    <div class="col-lg-4 col-md-6 mt-30">
                                        <div class="casestudy-item">
                                            <div class="casestudy-img"
                                                style="
                                            width: 100%;
                                        ">
                                                <a href="{{ route('template.detail', $related->slug) }}">
                                                    <img style="
                                                    width: 100%;
                                                "
                                                        src="{{ asset('storage/' . $related->thumbnail) }}"
                                                        alt="{{ $related->name }}" class="img-fluid">
                                                </a>
                                                <div class="content_wrap">
                                                    <h3 class="item_title">{{ $related->name }}</h3>
                                                    <span
                                                        class="item_tag">{{ $related->category->name ?? 'Danh mục khác' }}</span>
                                                </div>
                                            </div>
                                            <a class="xb-overlay"
                                                href="{{ route('template.detail', $related->slug) }}"></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>


                <!-- service-details-content end  -->

                <!-- cta section start  -->
                <section class="cta ">
                    <div class="container ">
                        <div class="cta-wrap ">
                            <div class="cta-inner ul_li_between ">
                                <div class="xb-item--holder wow fadeInLeft " data-wow-delay="100ms "
                                    data-wow-duration="600ms ">
                                    <h2 class="xb-item--title ">Stop wasting money on bad SEO.</h2>
                                    <span class="xb-item--content ">Book a free consultation for the SEO results you
                                        need.</span>
                                    <div class="xb-btn mt-45 ">
                                        <a href="/contact " class="thm-btn thm-btn--aso thm-btn--aso_white ">Book a
                                            free consultation</a>
                                    </div>
                                </div>
                                <div class="cta-right_img wow fadeInRight " data-wow-delay="150ms "
                                    data-wow-duration="600ms ">
                                    <img class="updown " src="{{ asset('assets/img/cta/clip-bord.png ') }}"
                                        alt=" ">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- cta section end  -->

            </main>
            <!-- main area end  -->

            <!-- footer strt -->
            <footer class="footer footer-style-two pt-200 bg_img pos-rel " data-bg-color="#0c111d ">
                <div class="container ">
                    <div class="xb-footer pt-120 ">
                        <div class="footer-info ul_li_between ">
                            <div class="info-item ul_li ">
                                <div class="xb-item--icon ">
                                    <span><img src="{{ asset('assets/img/icon/sms-white.svg ') }}"
                                            alt=" "></span>
                                </div>
                                <div class="xb-item--holder ">
                                    <p class="xb-item--content ">Write to us</p>
                                    <h4 class="xb-item--title ">innomax@gmail.com</h4>
                                </div>
                            </div>
                            <div class="info-item ul_li ">
                                <div class="xb-item--icon clr-blue ">
                                    <span><img src="{{ asset('assets/img/icon/call-white.svg ') }}"
                                            alt=" "></span>
                                </div>
                                <div class="xb-item--holder ">
                                    <p class="xb-item--content ">Call Us (USA)</p>
                                    <h4 class="xb-item--title ">+(1) 1230 452 8597</h4>
                                </div>
                            </div>
                            <div class="info-item ul_li ">
                                <div class="xb-item--icon clr-sky ">
                                    <span><img src="{{ asset('assets/img/icon/location.svg ') }}"
                                            alt=" "></span>
                                </div>
                                <div class="xb-item--holder ">
                                    <p class="xb-item--content ">Our Office</p>
                                    <h4 class="xb-item--title ">Waterloo,Park,Australia</h4>
                                </div>
                            </div>
                        </div>
                        <div class="footer-inner mt-70 mb-100 ul_li_between align-items-start ">
                            <div class="sa-newslatter footer-widget ">
                                <span class="xb-item--sub-title ">Newsletter</span>
                                <p class="xb-item--content clr-white ">Sign up to techco weekly newsletter to get the
                                    latest updates.
                                </p>
                                <div class="xb-item--input_field pos-rel ">
                                    <input type="email " name="gmail " id="text6 "
                                        placeholder="enter your email ">
                                    <div class="img "><img src="{{ asset('assets/img/icon/sms02.svg ') }}"
                                            alt=" "></div>
                                    <button type="submit " class="xb-item--btn "><i
                                            class="fas fa-paper-plane "></i></button>
                                </div>
                                <span class="xb-item--text ">By continuing, you agree to innomax <a
                                        href="#! ">Terms</a> of
                                    Use and <a href="#! ">Privacy Policy</a></span>
                            </div>
                            <div class="footer-widget ">
                                <span class="xb-item--sub-title ">Company</span>
                                <ul class="xb-item--holder list-unstyled ">
                                    <li class="xb-item--list "><a href="#! ">About us</a></li>
                                    <li class="xb-item--list "><a href="#! ">Contact us</a></li>
                                    <li class="xb-item--list "><a href="#! ">Price table</a></li>
                                    <li class="xb-item--list "><a href="#! ">Our blog</a></li>
                                    <li class="xb-item--list "><a href="#! ">Team member</a></li>
                                    <li class="xb-item--list "><a href="#! ">Our Cases</a></li>
                                </ul>
                            </div>
                            <div class="footer-widget ">
                                <span class="xb-item--sub-title ">Our Services</span>
                                <ul class="xb-item--holder list-unstyled ">
                                    <li class="xb-item--list "><a href="#! ">SEO copywriting</a></li>
                                    <li class="xb-item--list "><a href="#! ">Managed SEO</a></li>
                                    <li class="xb-item--list "><a href="#! ">Small business SEO</a></li>
                                    <li class="xb-item--list "><a href="#! ">Monthly SEO</a></li>
                                    <li class="xb-item--list "><a href="#! "> National SEO</a></li>
                                    <li class="xb-item--list "><a href="#! ">Technical SEO</a></li>
                                </ul>
                            </div>
                            <div class="footer-widget ">
                                <span class="xb-item--sub-title ">Our Industries</span>
                                <ul class="xb-item--holder list-unstyled ">
                                    <li class="xb-item--list "><a href="#! ">Healthcare</a></li>
                                    <li class="xb-item--list "><a href="#! ">Lawyers</a></li>
                                    <li class="xb-item--list "><a href="#! ">Real estate</a></li>
                                    <li class="xb-item--list "><a href="#! ">Insurance</a></li>
                                    <li class="xb-item--list "><a href="#! ">Crypto</a></li>
                                    <li class="xb-item--list "><a href="#! ">Automotive</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-copyright mt-70 ul_li_between ">
                            <p class="copyright mt-20 ">Copyright © 2024 <a href="/ ">innomax</a>. All rights
                                reserved.
                            </p>
                            <ul class="footer-link ul_li mt-20 ">
                                <li><span>Follow us :</span></li>
                                <li><a href="#! "><i class="fab fa-twitter "></i></a></li>
                                <li><a href="#! "><i class="fab fa-facebook-f "></i></a></li>
                                <li><a href="#! "><i class="fab fa-linkedin-in "></i></a></li>
                                <li><a href="#! "><i class="fab fa-youtube "></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end -->

        </div>



    </body>
</div>
