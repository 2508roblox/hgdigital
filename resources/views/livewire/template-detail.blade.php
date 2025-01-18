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
            @foreach($template->tags as $tag)
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
                <section class="page-title pt-200 pos-rel bg_img " data-background="{{ asset('assets/img/bg/page_bg01.jpg ') }}">
                 
                </section>
                <!-- page title end  -->
    
                <!-- item-details end  -->
                <div class="csd-img pt-70 pb-0">
                    <div class="container">
                        <div class="item-details_grid">
                            <div class="item-details_image">
                                <img style="object-fit: cover;
    width: 100%;" src="{{ asset('storage/' . $template->image) }}" alt="{{ $template->name }}" class="img-fluid mb-4">
                            </div>
                            <div class="template_info1" style="
                            display: flex;
                            flex-direction: column;
                            align-items: start;
                            gap: 0rem;
                        ">
                                <h2 class="sd-title "> 

                                    {{ $template->name }} 
                                    </h2>  
                                     <div class="price-info">
                                        <span class="current-price">{{ number_format($template->discounted_price, 0, ',', '.') }}₫</span>
                                        <span class="original-price">{{ number_format($template->original_price, 0, ',', '.') }}₫</span>
                                    </div>
                                    <div class="purchases-info" >
                                        <p>Đã mua: {{ $template->purchases }}</p>
                                    </div>
                                
                                    <div class="khuyen-mai"><h4>Ưu đãi khi mua Theme tại ThemeWP.vn</h4><li><span>Tặng ngay 50.000 khi đăng ký tài khoản</span></li><li><span>Hỗ trợ cài đặt giao diện demo lên Hosting</span></li><li><a href="https://themewp.vn/tai-lieu-huong-dan/" target="_blank" rel="noopener"><span>Cung cấp tài liệu hướng dẫn sử dụng</span></a></li><li><a href="https://themewp.vn/kho-plugin/" target="_blank" rel="noopener"><span>Được truy cập sử dụng kho plugin trả phí</span></a></li><li><a href="https://themewp.vn/tich-luy-diem-thuong-giam-gia/" target="_blank" rel="noopener"><span>Tích điểm giảm giá cho những lần mua tiếp theo</span></a></li></div>

                                    <div class="hosting-uudai">
                                        <a href="https://themewp.vn/hosting/" target="_blank" rel="noopener">Cloud Hosting SSD giá rẻ, chất lượng, toàn quyền quản lý - giảm giá, hỗ trợ tốt hơn khi mua cùng.</a></div>
                                        <div class="product_meta">
                                            <span class="sku_wrapper">Mã: <span class="sku">47534</span></span>
                                            <span class="posted_in">Danh mục: <a href="https://themewp.vn/cong-ty/" rel="tag">Công ty</a></span>
                                            <span class="tagged_as">Thẻ: <a href="https://themewp.vn/tu-khoa/may-in/" rel="tag">Máy in</a>, <a href="https://themewp.vn/tu-khoa/may-photocopy/" rel="tag">Máy photocopy</a>, <a href="https://themewp.vn/tu-khoa/sua-may-in/" rel="tag">Sửa máy in</a>, <a href="https://themewp.vn/tu-khoa/sua-may-photocopy/" rel="tag">Sửa máy Photocopy</a></span></div>


                                            <div class="xb-item--button mt-50">
                                                <a href="blog-details.html">Mua Ngay <i class="far fa-arrow-right"></i></a>
                                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <style>
                 .csd-img {
    display: flex;
    justify-content: center;
    align-items: center;
}

.item-details_grid {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Cột trái 1 phần, cột phải 2 phần */
    gap: 1rem; /* Khoảng cách giữa các cột */
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
        grid-template-columns: 1fr; /* Chuyển về 1 cột trên mobile */
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

.template_info h2, .sd-ser-content .sd-title {
    font-family: "Montserrat", serif !important ;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}
.similar-casestudy-title {

}
                </style>
                <!-- item-details end  -->
    
                <!-- service-details-content start  -->
                <div class="sd-ser-content_wrap pb-90 ">
                    <div class="container ">
                        <div class="csd-ser_warp">
                            <div class="container">
                                <div class="csd-ser_inner ul_li_between">
                                    <div class="csd-item ul_li">
                                        <div class="xb-icon"><img src="../assets/img/icon/csd-icon01.svg" alt=""></div>
                                        <h6 class="xb-text">client : <span> innomax</span></h6>
                                    </div>
                                    <div class="csd-item ul_li">
                                        <div class="xb-icon"><img src="../assets/img/icon/csd-icon02.svg" alt=""></div>
                                        <h6 class="xb-text">services : <span> Marketing</span></h6>
                                    </div>
                                    <div class="csd-item ul_li">
                                        <div class="xb-icon"><img src="../assets/img/icon/csd-icon03.svg" alt=""></div>
                                        <h6 class="xb-text">completed date : <span> 20-11-2024</span></h6>
                                    </div>
                                    <div class="csd-item ul_li">
                                        <div class="xb-icon"><img src="../assets/img/icon/csd-icon04.svg" alt=""></div>
                                        <h6 class="xb-text">location : <span> New York,NY,USA</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sd-ser-content mt-5">
                            <h2 class="sd-title">Mô Tả</h2>
                            <div class="template_info">
                             
                               
                                <p class="template-description mt-3">{!! $template->description !!}</p>
                                <div class="demo-link">
                                    <a href="{{ $template->demo_link }}" target="_blank" class="btn btn-primary">Xem Demo</a>
                                </div>
                            </div>

                            
                        </div>
                        <div class="similar-casestudy pt-80">
                            <h2 class="similar-casestudy-title">Mẫu Theme tương tự</h2>
                            <div class="row mt-none-30">
                                @foreach ($relatedTemplates as $related)
                                    <div class="col-lg-4 col-md-6 mt-30">
                                        <div class="casestudy-item">
                                            <div class="casestudy-img" style="
                                            width: 100%;
                                        ">
                                                <a href="{{ route('template.detail', $related->slug) }}">
                                                    <img style="
                                                    width: 100%;
                                                " src="{{ asset('storage/' . $related->thumbnail) }}" alt="{{ $related->name }}" class="img-fluid">
                                                </a>
                                                <div class="content_wrap">
                                                    <h3 class="item_title">{{ $related->name }}</h3>
                                                    <span class="item_tag">{{ $related->category->name ?? 'Danh mục khác' }}</span>
                                                </div>
                                            </div>
                                            <a class="xb-overlay" href="{{ route('template.detail', $related->slug) }}"></a>
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
                                <div class="xb-item--holder wow fadeInLeft " data-wow-delay="100ms " data-wow-duration="600ms ">
                                    <h2 class="xb-item--title ">Stop wasting money on bad SEO.</h2>
                                    <span class="xb-item--content ">Book a free consultation for the SEO results you need.</span>
                                    <div class="xb-btn mt-45 ">
                                        <a href="/contact " class="thm-btn thm-btn--aso thm-btn--aso_white ">Book a free consultation</a>
                                    </div>
                                </div>
                                <div class="cta-right_img wow fadeInRight " data-wow-delay="150ms " data-wow-duration="600ms ">
                                    <img class="updown " src="{{ asset('assets/img/cta/clip-bord.png ') }}" alt=" ">
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
                                    <span><img src="{{ asset('assets/img/icon/sms-white.svg ') }}" alt=" "></span>
                                </div>
                                <div class="xb-item--holder ">
                                    <p class="xb-item--content ">Write to us</p>
                                    <h4 class="xb-item--title ">innomax@gmail.com</h4>
                                </div>
                            </div>
                            <div class="info-item ul_li ">
                                <div class="xb-item--icon clr-blue ">
                                    <span><img src="{{ asset('assets/img/icon/call-white.svg ') }}" alt=" "></span>
                                </div>
                                <div class="xb-item--holder ">
                                    <p class="xb-item--content ">Call Us (USA)</p>
                                    <h4 class="xb-item--title ">+(1) 1230 452 8597</h4>
                                </div>
                            </div>
                            <div class="info-item ul_li ">
                                <div class="xb-item--icon clr-sky ">
                                    <span><img src="{{ asset('assets/img/icon/location.svg ') }}" alt=" "></span>
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
                                <p class="xb-item--content clr-white ">Sign up to techco weekly newsletter to get the latest updates.
                                </p>
                                <div class="xb-item--input_field pos-rel ">
                                    <input type="email " name="gmail " id="text6 " placeholder="enter your email ">
                                    <div class="img "><img src="{{ asset('assets/img/icon/sms02.svg ') }}" alt=" "></div>
                                    <button type="submit " class="xb-item--btn "><i class="fas fa-paper-plane "></i></button>
                                </div>
                                <span class="xb-item--text ">By continuing, you agree to innomax <a href="#! ">Terms</a> of
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
                            <p class="copyright mt-20 ">Copyright © 2024 <a href="/ ">innomax</a>. All rights reserved.
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
