<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Giới thiệu</title>
        <link rel="stylesheet" href="{{ asset('css/navbar/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar/login.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar/gioithieu.css') }}">
    </head>
    <body>
        <div id="wrapper">
            @include('header');
            <div class="content" style="background-image: url(./img/thanh.png); color: #fff; height:160px; background-size: cover; background-color: #6abd45;">
                <p id="p1" style="margin-bottom: 0px; padding-top: 35px; padding-bottom: 10px"><b>Giới thiệu</b></p>
                <div class="left-title">
                    <nav class="title-main"  style="font-weight: bold">
                        <a href="index.html" style="font-weight: 100; color: #fff;">TRANG CHỦ</a>
                        <span style="font-weight: 300">/</span>
                        GIỚI THIỆU
                    </nav>
                </div>
            </div>

            <div class="content">
                <p id="p1" style="letter-spacing: 0.05em;
                line-height: 1.3em;"><b>FRESH ORGANIC FOOD</b></p>
                <hr color="black" width="20%">
            </div>

            <section class="job-post bg-color reveal">
                <div class="job-container">
                    <div class="job-container-header">
                        <div class="job-header">
                            <span class="header-current">
                                Chào mừng bạn đến với <b class="b-job">FRESH ORGANIC FOOD</b>
                            </span>
                        </div>
                        <div class="content-about">
                            <p style="font-size: 22px;"> <b>FRESH ORGANIC FOOD</b> được tạo ra giúp khách hàng tiếp cận với thực phẩm an toàn, có nguồn gốc rõ ràng. 
                                <br> <br> Với <b>FRESH ORGANIC FOOD</b> , việc lựa chọn và đặt mua thực phẩm sạch sẽ dễ dàng hơn rất nhiều. <br>
                            <br>
                            Hơn nữa, hệ thống cung cấp thực phẩm sạch từ vườn, được chính những người nông dân làm nên với công nghệ Organic đạt chuẩn nên quý khách hàng có thể hoàn toàn yên tâm về chất lượng của sản phẩm. <br> <br>
                            Với đội ngũ nhân viên nhiệt tình, website đẹp mắt, dễ dàng sử dụng với lượng hàng hóa phong phú, an toàn, giá cả phải chăng sẽ giúp cho quý khách hàng trở thành một người tiêu dùng thông minh trong thời kì thực phẩm bẩn tràn lan ngoài thị trường. <br> <br>
                            <b>Cảm ơn quý khách hàng đã ghé thăm và tin tưởng sử dụng dịch vụ của chúng tôi.</b>
                            </p>
                            
                        </div>
                        <div class="job-header">
                            <span class="header-current">
                                <b class="b-job">Đội ngũ sáng lập</b>
                            </span>
                        </div>
                        <div class="member">
                            <div class="member-info">
                                <img src="./img/avt.jpg" alt="" style="border-radius:50%;
                                -moz-border-radius:50%;
                                -webkit-border-radius:50%;">
                                <p>Phan Ngọc Khải</p>
                            </div>
                            <div class="member-info">
                                <img src="./img/khue.jpg" alt="" style="border-radius:50%;
                                -moz-border-radius:50%;
                                -webkit-border-radius:50%;">
                                <p>Trương Tuấn Khuê</p>
                            </div>
                            <!-- <div class="member-info">
                                <img src="./img/xuan.jpg" alt="" style="border-radius:50%;
                                -moz-border-radius:50%;
                                -webkit-border-radius:50%;">
                                <p>Phan Quý Xuân</p>
                            </div> -->
                           
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- <footer class="foot" style="padding-bottom: 20px">
                <div class="foot-container">
                    <div class="row-foot">
                        <div class="col-foot">
                            <div class="content-col">
                                <h2>Fresh Organic Food</h2>
                                <p>Hệ thống cung cấp thực phẩm  sạch từ vườn,
                                   được chính những người nông dân làm nên với công
                                   nghệ Organic đạt chuẩn.</p>
                            </div>
                        </div>
                        <div class="col-foot">
                            <div class="content-col">
                                <h2>Sản phẩm</h2>
                                <ul class="chuc-vu">
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Rau củ</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Hải sản</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Trái cây</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Đồ uống</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Thịt trứng</a></li>  
                                </ul>
                            </div>
                        </div>
                        <div class="col-foot">
                            <div class="content-col">
                                <h2>Danh mục</h2>
                                <ul class="chuc-vu">
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Trang chủ</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Giới thiệu</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Cửa hàng</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Kiến thức</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-foot">
                            <div class="content-col">
                                <h2 style="padding-left: 20px;">Liên hệ</h2>
                                <ul class="chuc-vu">
                                    <li class="element-chuc-vu">
                                        <i class="ti-location-pin"></i>
                                        <span>Hòa Hải, Ngũ Hành sơn</span>
                                    </li>
                                    <li class="element-chuc-vu">
                                        <i class="ti-email"></i>
                                        <span>0919016614</span>
                                    </li>
                                    <li class="element-chuc-vu">
                                        <i class="ti-email"></i>
                                        <span>khaipn.21it@vku.udn.vn</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer> --}}
            @include('footer');
        </div>  
        <!--js nav-->
        <script type="text/javascript">
            window.addEventListener("scroll", function(){
                var header = document.querySelector(".header-menu");
                header.classList.toggle("sticky", window.scrollY > 0);
            })
        </script>    
    </body>
</html>