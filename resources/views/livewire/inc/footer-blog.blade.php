<footer class="footer footer-style-two pt-200 bg_img pos-rel " data-bg-color="#0c111d ">
    <div class="container ">
        <div class="xb-footer pt-120 ">
            <div class="footer-info ul_li_between ">
                <div class="info-item ul_li ">
                    <div class="xb-item--icon ">
                        <span><img src="/assets/img/icon/sms-white.svg " alt=" "></span>
                    </div>
                    <div class="xb-item--holder ">
                        <p class="xb-item--content ">Email</p>
                        <h4 class="xb-item--title ">trangiangzxc@gmail.com</h4>
                    </div>
                </div>
                <div class="info-item ul_li ">
                    <div class="xb-item--icon clr-blue ">
                        <span><img src="/assets/img/icon/call-white.svg " alt=" "></span>
                    </div>
                    <div class="xb-item--holder ">
                        <p class="xb-item--content ">SĐT</p>
                        <h4 class="xb-item--title ">0966.579.217</h4>
                    </div>
                </div>
                <div class="info-item ul_li ">
                    <div class="xb-item--icon clr-sky ">
                        <span><img src="/assets/img/icon/location.svg " alt=" "></span>
                    </div>
                    <div class="xb-item--holder ">
                        <p class="xb-item--content ">Văn phòng</p>
                        <h4 class="xb-item--title ">Quận 12, TP.HCM</h4>
                    </div>
                </div>
            </div>
            <div class="footer-inner mt-70 mb-100 ul_li_between align-items-start ">
                <div class="sa-newslatter footer-widget ">
                    <span class="xb-item--sub-title ">Đăng ký nhận tin</span>
                    <p class="xb-item--content clr-white ">Đăng ký nhận tin để cập nhật các thông tin mới nhất.
                    </p>
                    <div class="xb-item--input_field pos-rel ">
                        <input type="email " name="gmail " id="text6 " placeholder="enter your email ">
                        <div class="img "><img src="/assets/img/icon/sms02.svg " alt=" "></div>
                        <button type="submit " class="xb-item--btn "><i class="fas fa-paper-plane "></i></button>
                    </div>
                </div>
                <div class="footer-widget ">
                    <span class="xb-item--sub-title ">Liên kết</span>
                    <ul class="xb-item--holder list-unstyled ">
                        <li class="xb-item--list "><a href="/">Về chúng tôi</a></li>
                        <li class="xb-item--list "><a href="/contact">Liên hệ</a></li>
                        <li class="xb-item--list "><a href="/projects">Dự án</a></li>
                        <li class="xb-item--list "><a href="/blogs">Tin tức</a></li>
                        <li class="xb-item--list "><a href="/contact">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="footer-widget ">
                    <span class="xb-item--sub-title ">Dịch vụ</span>
                    <ul class="xb-item--holder list-unstyled ">
                        <li class="xb-item--list "><a href="#! ">Thiết Kế Website</a></li>
                        <li class="xb-item--list "><a href="#! ">Tương Tác Số</a></li>
                        <li class="xb-item--list "><a href="#! ">Chăm Sóc Fanpage</a></li>
                        <li class="xb-item--list "><a href="#! ">Thiết Kế UX/UI</a></li>
                        <li class="xb-item--list "><a href="#! ">Phát Triển Ứng Dụng</a></li>
                        <li class="xb-item--list "><a href="#! ">Digital Marketing</a></li>
                        <li class="xb-item--list "><a href="#! ">Hệ Thống CRM, ERP, HRM</a></li>
                    </ul>
                </div>
                <div class="footer-widget ">
                    <span class="xb-item--sub-title ">Ngành hàng</span>
                    <ul class="xb-item--holder list-unstyled ">
                        <li class="xb-item--list "><a href="#! ">Bán hàng</a></li>
                        <li class="xb-item--list "><a href="#! ">Bất động sản</a></li>
                        <li class="xb-item--list "><a href="#! ">Dịch vụ</a></li>
                        <li class="xb-item--list "><a href="#! ">Nhà hàng</a></li>
                        <li class="xb-item--list "><a href="#! ">Du lịch</a></li>
                        <li class="xb-item--list "><a href="#! ">Giáo dục</a></li>
                        <li class="xb-item--list "><a href="#! ">Tin tức</a></li>
                        <li class="xb-item--list "><a href="#! ">Landing Page</a></li>

                    </ul>
                </div>
            </div>
            <div class="footer-copyright mt-70 ul_li_between ">
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
