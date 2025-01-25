<div>
    @section('metatags')
        <title>Mẫu Giao Diện - HG Digital</title>
        <meta name="description"
            content="Chuyên cung cấp dịch vụ thiết kế website chuyên nghiệp, tối ưu SEO, giá rẻ tại HG Digital.">
        <meta name="keywords" content="thiết kế website, dịch vụ thiết kế web, website chuyên nghiệp">
        <meta property="og:title" content="HG Digital - Thiết Kế Website Chuyên Nghiệp">
        <meta property="og:description" content="Thiết kế website chuyên nghiệp, tối ưu hóa SEO và giá cả hợp lý.">
    @endsection

    <style>
        @media (max-width: 768px) {
    /* Khi màn hình nhỏ hơn hoặc bằng 768px */
    .themes-list .xb-item--img {
        width: 100%;
    }
    .themes-list .xb-item--img img {
        width: 100%;
    }
    .hero .xb-item--list {
        font-size: 16px;
    max-width: 42rem;
    text-align: center;
    text-transform: capitalize;
    line-height: 3rem;
    font-weight: 600;
    }
}
    </style>
    <body class="sco_agency">
        <!-- backtotop - start -->
        <div class="xb-backtotop">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->

        <!-- Preloader - Start -->
        <div id="xb-loadding" class="xb-loader" style="display: none;">
            <div class="xb-dual-ring"></div>
        </div>
        <!-- Preloader - End -->

        <div class="body_wrap">

            <!-- header start -->
            @livewire('inc.header-blog')

            <!-- header end -->

            <!-- main area start  -->
            <main>
                <style>
                    .blog-details_item .xb-item--img {
                        border-radius: 4px;
                        height: 307px;
                    }

                    .blog-details_item .xb-item--img img {
                        height: 307px;
                        object-fit: cover;
                    }
                </style>
                <!-- page title start  -->

                <!-- page title end  -->
                <!-- team title start  -->
                {{-- <section class="team pt-50 pb-130"> --}}
                {{-- </section> --}}
                <section class="page-title  pt-200 pos-rel bg_img" data-background="assets/img/bg/page_bg01.jpg"
                    style="background-image: url(&quot;assets/img/bg/page_bg01.jpg&quot;);">
                    <div class="container">
                        <div class="page-title-wrap">
                            <div class="page-title-box">
                                <span class="sub-title"><img src="assets/img/icon/m_08.svg" alt="">Mẫu
                                    Website</span>
                                <h2 class="title"> Mẫu giao diện mới nhất</h2>



                            </div>
                        </div>
                    </div>



                </section>

                <section class="team   pb-130">
                    <div class="container">
                        <div class="sec-title--two text-center mb-50 ">

                        </div>
                        <div class="row justify-content-center">
                            <div class="row">
                                <div class="col-lg-3-fix col-lg-3 col-12 sidebar-themes dqdt-sidebar">
                                    <div class="aside-content-sidebar aside-item">

                                        <aside class="aside-item filter-menu">
                                            <div class="aside-title">
                                                <h2 class="title-head">
                                                    <img loading="lazy" src="/storage/template_categories/images/01JHT1V2G6CVNE6GYW9BF944S1.svg"
                                                        alt="Danh mục">
                                                    <span class="filter_heading" style="font-size: 24px;">Danh mục</span>
                                                </h2>
                                            </div>
                                            <div>
                                                <style>
                                                   .nav-item.active>a:before{
                                                        background: #0d6efd;
                                                    }
                                                   .nav-item.active  a span {
                                                        color: #0d6efd;
                                                    }

                                                </style>
                                                <!-- Danh sách danh mục -->
                                                <nav class="nav-category aside-content nav-menu">
                                                    <ul>
                                                        <li class="nav-item relative {{ is_null($category) ? 'active' : '' }}">
                                                            <a href="#" wire:click.prevent="selectCategory(null)" class="nav-link">
                                                                <span>Tất cả</span>
                                                            </a>
                                                        </li>
                                                        @foreach ($categories as $cat)
                                                            <li class="nav-item relative {{ $category == $cat->id ? 'active' : '' }}">
                                                                <a href="#" wire:click.prevent="selectCategory({{ $cat->id }})" class="nav-link">
                                                                    <span>{{ $cat->name }}</span>
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </nav>
                                            </div>

                                            <!-- Danh sách template -->

                                        </aside>

                                        <script>
                                            $(function() {

                                                const $collection = $("#Collection");
                                                if ($collection.length) {
                                                    const idCls = $collection.val();
                                                    $(".nav-menu li").removeClass("active").filter(`[data-cls='${idCls}']`).addClass("active");
                                                    if (window.location.pathname.includes('theme-mien-phi') || window.location.pathname.includes(
                                                            'khuyen-mai')) {
                                                        $(".nav-menu li").removeClass("active");
                                                    }
                                                }

                                            })
                                        </script>
                                        <hr>
                                        <aside class="aside-item filter-price">
                                            <div class="aside-title">
                                                <h2 class="title-head">
                                                    <img loading="lazy" src="/storage/template_categories/images/01JHT1SPZZQ04SCMEBTEV20G35.svg"
                                                        alt="Bán hàng">
                                                    <span class="filter_heading" style="font-size: 24px;">Khoảng giá</span>
                                                </h2>
                                            </div>
                                            <div class="aside-content filter-group">
                                                <ul>
                                                    <li class="nav-item relative price-free {{ $priceRange && $priceRange['start'] == 0 && $priceRange['end'] == 0 ? 'active' : '' }}">
                                                        <a href="#" wire:click.prevent="selectPriceRange(0, 0)" class="a-nav">
                                                            <i></i>Miễn phí
                                                        </a>
                                                    </li>
                                                    <li class="nav-item relative price-500 {{ $priceRange && $priceRange['start'] == 500000 && $priceRange['end'] == 1000000 ? 'active' : '' }}">
                                                        <a href="#" wire:click.prevent="selectPriceRange(500000, 1000000)" class="a-nav">
                                                            <i></i>500,000 - 1,000,000 đ
                                                        </a>
                                                    </li>
                                                    <li class="nav-item relative price-1000 {{ $priceRange && $priceRange['start'] == 1000000 && $priceRange['end'] == 2000000 ? 'active' : '' }}">
                                                        <a href="#" wire:click.prevent="selectPriceRange(1000000, 2000000)" class="a-nav">
                                                            <i></i>1,000,000 - 2,000,000 đ
                                                        </a>
                                                    </li>
                                                    <li class="nav-item relative price-2000 {{ $priceRange && $priceRange['start'] == 2000000 && $priceRange['end'] == 3000000 ? 'active' : '' }}">
                                                        <a href="#" wire:click.prevent="selectPriceRange(2000000, 3000000)" class="a-nav">
                                                            <i></i>2,000,000 - 3,000,000 đ
                                                        </a>
                                                    </li>
                                                    <li class="nav-item relative price-2000 {{ $priceRange && $priceRange['start'] == 4000000 && $priceRange['end'] == 10000000 ? 'active' : '' }}">
                                                        <a href="#" wire:click.prevent="selectPriceRange(4000000, 10000000)" class="a-nav">
                                                            <i></i>4,000,000 - 10,000,000 đ
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </aside>

                                            <style>
                                                .filter-group .nav-item {
    padding: 5px 0;
}

.filter-group .nav-item .a-nav {
    color: #333;
    text-decoration: none;
}

.filter-group .nav-item.active .a-nav {
    color: #007bff;
}

.filter-group .nav-item .a-nav:hover {
    color: #0056b3;
}

                                            </style>
                                        <hr>

                                        <script>
                                            $(function() {
                                                $(document).on('click', '.filter-color .filter-item', function() {
                                                    var keycolor = $(this).data('key');
                                                    var querystring = window.location.search;
                                                    var url = window.location.pathname + querystring;

                                                    if (!window.location.href.includes('Startprice') || !window.location.href.includes(
                                                            '/&sort')) {
                                                        url = setParameter(url, "&key", keycolor);
                                                    } else {
                                                        url = setParameter(url, "?key", keycolor);
                                                    }

                                                    window.location.href = url;
                                                });

                                                var upramcolor = getParameterByName("key");
                                                setTimeout(() => {
                                                    var colorMap = {
                                                        "trắng": ".white",
                                                        "xanh lá": ".green",
                                                        "đỏ": ".red",
                                                        "xanh da trời": ".blue",
                                                        "vàng": ".yellow",
                                                        "tím": ".violet",
                                                        "hồng": ".pink"
                                                    };
                                                    if (colorMap.hasOwnProperty(upramcolor)) {
                                                        $('.filter-form ' + colorMap[upramcolor]).addClass('active');
                                                    }
                                                }, 500);
                                            });
                                        </script>

                                    </div>
                                    <script type="text/javascript">
                                        $(function() {
                                            $(".filter-content li").click(function() {
                                                $(".filter-content li").removeClass("active");
                                                $(this).addClass("active");
                                                var key = $(this).attr("data-key");
                                                var queryString = window.location.search;
                                                var url = window.location.pathname;
                                                url = url + queryString;
                                                url = setParameter(url, "key", key);
                                                window.location.href = url;
                                            });
                                            var key = getParameterByName("key");
                                            $(".filter-content li").removeClass("active");
                                            $(".filter-content li[data-key='" + key + "']").addClass("active");

                                            if (window.location.href.includes('theme-mien-phi')) {
                                                $(".sidebar-themes .filter-price, .sort-by .li-price, .sort-by .filter-price-sort").addClass(
                                                    "d-none");
                                            }


                                        });
                                    </script>
                                </div>
                                <div class="col-lg-9-fix col-lg-9 col-12 block-themes">
                                    <div class="sortby-themes sort-by"
                                        style="
                            align-items: center;
                            gap: 1rem;
                        ">
                                        <span class="title-sort">Sắp xếp theo: </span>
                                        <ul class="aside-content">
                                            <li class="filter-item li-price" data-sort="price-asc">
                                                <span class="name-sort price-sort"></span>
                                                <div class="sub-title_ active">Giá

                                                    <?xml version="1.0" encoding="iso-8859-1"?>
                                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                    <svg style="margin-left: .3rem" fill="#ffffff" height="20px"
                                                        width="20px" version="1.1" id="Capa_1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        viewBox="0 0 489.3 489.3" xml:space="preserve">
                                                        <g>
                                                            <g>
                                                                <path d="M119,468.85V50.05l73.6,73.6c2.4,2.4,5.5,3.6,8.7,3.6s6.3-1.2,8.7-3.6c4.8-4.8,4.8-12.5,0-17.3l-94.5-94.5
                                                                c-4.6-4.6-12.7-4.6-17.3,0l-94.6,94.5c-4.8,4.8-4.8,12.5,0,17.3c4.8,4.8,12.5,4.8,17.3,0l73.6-73.6v418.8
                                                                c0,6.8,5.5,12.3,12.3,12.3C113.5,481.05,119,475.55,119,468.85z" />
                                                                                                                                <path
                                                                                                                                    d="M373.8,477.45c2.4,2.4,5.5,3.6,8.7,3.6s6.3-1.2,8.7-3.6l94.5-94.5c4.8-4.8,4.8-12.5,0-17.3s-12.5-4.8-17.3,0l-73.6,73.6
                                                                V20.45c0-6.8-5.5-12.3-12.3-12.3s-12.3,5.5-12.3,12.3v418.8l-73.5-73.6c-4.8-4.8-12.5-4.8-17.3,0s-4.8,12.5,0,17.3L373.8,477.45z" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </li>
                                            <li class="filter-price-sort">
                                                <div class="sub-title_">Dưới 1 triệu </div>

                                            </li>
                                            <li class="filter-item li-dis" data-sort="discount-asc">
                                                <div class="sub-title_">Được mua nhiều </div>
                                            </li>
                                            <li class="filter-item li-new" data-sort="id">
                                                <div class="sub-title_">Mới nhất </div>
                                            </li>
                                        </ul>

                                    </div>
                                    <hr>
                                    <script type="text/javascript">
                                        $(function() {
                                            var qs = decodeURIComponent(location.search);
                                            $(".sort-by li.filter-item").click(function() {
                                                $(".sort-by li.filter-item").removeClass("active");
                                                $('a[href="' + qs + '"]').parents('li').addClass('active');

                                                var sort = $(this).attr("data-sort");
                                                var queryString = window.location.search;
                                                var url = window.location.pathname;
                                                url = url + queryString;
                                                if (queryString.includes('price-asc')) {
                                                    url = setParameter(url, "sort", "price-desc");
                                                } else {
                                                    url = setParameter(url, "sort", sort);
                                                }

                                                window.location.href = url;
                                            });

                                            if (window.location.href.includes('StartPrice=0&EndPrice=1000000') && !window.location.href.includes(
                                                    'sort')) {
                                                $(".sort-by li.filter-item").removeClass("active");
                                            } else if (window.location.href.includes('price-asc')) {
                                                $(".sort-by li.filter-item").removeClass("active");
                                                $(".sort-by .li-price").addClass("active");
                                                $(".sort-by .filter-price-sort").removeClass("active");
                                                window.history.pushState('', '', window.location.href.replace("q?StartPrice=0&EndPrice=1000000&",
                                                    "?"));
                                            } else if (window.location.href.includes('discount-asc')) {
                                                $(".sort-by li.filter-item").removeClass("active");
                                                $(".sort-by .li-dis").addClass("active");
                                                $(".sort-by .filter-price-sort").removeClass("active");
                                                window.history.pushState('', '', window.location.href.replace("q?StartPrice=0&EndPrice=1000000&",
                                                    "?"));
                                            } else if (window.location.href.includes('id')) {
                                                $(".sort-by li.filter-item").removeClass("active");
                                                $(".sort-by .li-new").addClass("active");
                                                $(".sort-by .filter-price-sort").removeClass("active");
                                                window.history.pushState('', '', window.location.href.replace("q?StartPrice=0&EndPrice=1000000&",
                                                    "?"));
                                            }
                                            if (window.location.href.includes('StartPrice=0&EndPrice=0') || window.location.href.includes(
                                                    'StartPrice=2000000&EndPrice=3000000') || window.location.href.includes(
                                                    'StartPrice=1000000&EndPrice=2000000')) {
                                                $(".sort-by .filter-price-sort").addClass("d-none");
                                            }
                                        });
                                    </script>
                                    <style>
                                        .pagination .small {
                                            display: none;
                                        }

                                        .pagination {
                                            justify-content: center;
                                        }
                                    </style>
                                    <div class="body-block themes-list">
                                        <div class="row list-items">
                                            @foreach ($templates as $template)
                                                <div class="col-lg-4 col-md-6 mt-30">
                                                    <div class="blog-details_wrap">
                                                        <div class="blog-details_item">
                                                            <div class="xb-item--img">
                                                                <a
                                                                    href="{{ route('template.detail', $template->slug) }}">
                                                                    <img src="{{ asset('storage/' . $template->thumbnail) }}"
                                                                        alt="{{ $template->name }}">
                                                                </a>
                                                            </div>
                                                            <div class="xb-item--holder">
                                                                <h3 class="item_details_info_heading border-effect">
                                                                    <a href="{{ route('template.detail', $template->slug) }}"
                                                                        style="font-size: 1rem; line-height: 1px !important;">
                                                                        {{ $template->name }}
                                                                    </a>
                                                                </h3>
                                                                <!-- Phần giá -->
                                                                <div class="price-wrap">
                                                                    <span
                                                                        class="current-price">{{ number_format($template->discounted_price, 0, ',', '.') }}₫</span>
                                                                    <!-- Giá khuyến mãi -->
                                                                    @if ($template->original_price > $template->discount_price)
                                                                        <span
                                                                            class="original-price">{{ number_format($template->original_price, 0, ',', '.') }}₫</span>
                                                                        <!-- Giá gốc có gạch ngang -->
                                                                    @endif
                                                                </div>
                                                                <div class="d-flex justify-content-between">
                                                                    <a href="{{ $template->demo_link }}"
                                                                        target="_blank" class="xb-item--det-btn mt-4"
                                                                        style="padding-bottom: 1rem;">Demo</a>
                                                                    <!-- Nút Demo -->
                                                                    <a href="{{ route('template.detail', $template->slug) }}"
                                                                        class="xb-item--det-btn">Xem chi tiết <i
                                                                            class="far fa-long-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach



                                        </div>
                                        <div class="text-center mt-5 more-button view-more-theme">

                                            <a style="
                                            font-size: 21px;
                                            font-style: italic;
                                            font-weight: 600;
                                        "
                                                href="#!" class="xb-item--det-btn  ">

                                                <div class="pagination">
                                                    {{ $templates->links() }}
                                                </div>
                                            </a>
                                        </div>

                                        <input type="hidden" id="Page" value="1">
                                        <input type="hidden" id="Price">
                                        <input type="hidden" id="Discount">
                                        <input type="hidden" id="Key">
                                        <input type="hidden" id="Sort" value="id">
                                        <input type="hidden" id="Type">
                                        <input type="hidden" id="Collection" value="32">
                                        <input type="hidden" id="TotalPage" value="5">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="page-title cp-page-title pt-200 pos-rel bg_img"
                    data-background="assets/img/bg/page_bg01.jpg"
                    style="background-image: url(&quot;assets/img/bg/page_bg01.jpg&quot;);">
                    <div class="container">
                        <div class="page-title-wrap">
                            <div class="row mt-none-30 align-items-center">
                                <div class="col-lg-8 mt-30">
                                    <div class="page-title-box">
                                        <span class="sub-title"><img src="assets/img/icon/m_08.svg"
                                                alt="">Mẫu Website</span>
                                                <h2 class="title">Tham gia định hình <br> tương lai và cơ hội <br> tại HG DIGITAL hôm nay.</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-30">
                                    <div class="cp-img-slide">
                                        <div class="cp-img-inner ul_li">
                                            <div class="cp-item marquee-first">
                                                <div class="xb-img"><img src="assets/img/gallery/cp-img01.jpg"
                                                        alt=""></div>
                                                <div class="xb-img"><img src="assets/img/gallery/cp-img02.jpg"
                                                        alt=""></div>
                                                <div class="xb-img"><img src="assets/img/gallery/cp-img03.jpg"
                                                        alt=""></div>
                                                <div class="xb-img"><img src="assets/img/gallery/cp-img01.jpg"
                                                        alt=""></div>
                                                <div class="xb-img"><img src="assets/img/gallery/cp-img02.jpg"
                                                        alt=""></div>
                                                <div class="xb-img"><img src="assets/img/gallery/cp-img03.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="cp-item marquee-2">
                                                <div class="xb-img"><img src="assets/img/gallery/cp-img04.jpg"
                                                        alt=""></div>
                                                <div class="xb-img"><img src="assets/img/gallery/cp-img05.jpg"
                                                        alt=""></div>
                                                <div class="xb-img"><img src="assets/img/gallery/cp-img06.jpg"
                                                        alt=""></div>
                                                <div class="xb-img"><img src="assets/img/gallery/cp-img04.jpg"
                                                        alt=""></div>
                                                <div class="xb-img"><img src="assets/img/gallery/cp-img05.jpg"
                                                        alt=""></div>
                                                <div class="xb-img"><img src="assets/img/gallery/cp-img06.jpg"
                                                        alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- team title end -->
                <!-- process title start  -->

                <!-- process title end  -->



                <!-- work section start -->

                <!-- work section end  -->



                <!-- cta section start  -->
                @livewire('inc.footer-cta')
                <!-- cta section end  -->

            </main>
            <!-- main area end  -->

            <!-- footer strt -->
            @livewire('inc.footer-blog')
            <!-- footer end -->

        </div>



    </body>
    <style>
        .block-themes .sort-by {
            display: flex;
            justify-content: right;
        }

        .block-themes .sort-by ul {
            list-style: none;
            padding: 0 0;
            margin: 0 0;
            display: flex;
            justify-content: flex-end;
            flex-wrap: wrap;
            gap: 10px;
        }

        .sub-title_ {
            font-family: var(--font-family);
            font-weight: 500;
            font-size: 14px;
            background: #fff;
            padding: 10px 10px;
            display: inline-flex;
            align-items: center;
            border-radius: 5px;
            color: var(--color-heading-two);
            box-shadow: 0 2px 4px 0 rgba(44, 64, 94, 0.08), 0 1px 1px 0 rgba(44, 64, 94, 0.04), 0 0 0 1px rgba(44, 64, 94, 0.06);
        }

        .sub-title_.active {
            font-size: 14px;
            color: white;
            background: var(--color-primary-two);

        }

        .nav-item>a:before {
            content: "";
            position: absolute;
            top: 2px;
            left: -30px;
            height: 18px;
            width: 18px;
            background: #fff;
            border: 1px solid #c3c3c3;
        }

        .nav-item>a {
            position: relative;
        }

        .nav-item a {
            display: block;
            margin-left: 2rem;
            padding: 0;
            font-size: 15px;
            color: #000000;
            line-height: normal;
            text-decoration: none;
        }

        ul li {
            list-style: none;
        }

        .aside-title {
            margin-bottom: 1rem;
        }

        .nav-menu ul {
            display: flex;
            flex-direction: column;
            gap: .5rem;
        }

        .filter-group ul {
            display: flex;
            flex-direction: column;
            gap: .5rem;
        }

        .price-wrap {
            margin: 10px 0;
        }

        .current-price {
            font-size: 1.2rem;
            /* Kích thước lớn cho giá hiện tại */
            color: #28a745;
            /* Màu xanh cho giá hiện tại */
        }

        .original-price {
            font-size: 1rem;
            /* Kích thước nhỏ cho giá gốc */
            color: #a1a1a1;
            /* Màu đỏ cho giá gốc */
            text-decoration: line-through;
            /* Gạch ngang cho giá gốc */
            margin-left: 10px;
            /* Khoảng cách giữa giá hiện tại và giá gốc */
        }

        .cp-btn {
            font-weight: 700;
            font-size: 1rem;
            padding: 13px 20px;
            letter-spacing: 0em;
            color: var(--color-white);
            border-radius: 7px;
            -webkit-border-radius: 7px;
            -moz-border-radius: 7px;
            -ms-border-radius: 7px;
            -o-border-radius: 7px;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
            background: var(--color-primary-two);
            display: inline-block;
        }

        .list-items .col-lg-4 {
            padding-bottom: calc(var(--bs-gutter-x)* .5);
            border-radius: 1rem;
        }

        .blog-details_item .xb-item--det-btn {
            position: relative;
            font-weight: 700;
            font-size: 15px;
        }

        .current-price {
            font-size: 1.2rem;
            color: #0066ff;
            font-weight: 600;
        }
    </style>
</div>



{{-- <div>
    <div class="filter-bar mb-4">
        <input type="text" wire:model="search" placeholder="Tìm kiếm templates..." class="form-control">

        <select wire:model="category" class="form-select">
            <option value="">Tất cả danh mục</option>
            @foreach (\App\Models\TemplateCategory::all() as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="row">
        @foreach ($templates as $template)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $template->thumbnail) }}" class="card-img-top" alt="{{ $template->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $template->name }}</h5>
                        <p class="card-text">{{ $template->description }}</p>
                        <a href="{{ route('template.detail', $template->slug) }}" class="btn btn-primary">Chi tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $templates->links() }}
    </div>
</div> --}}
