<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cửa hàng</title>
        <link rel="stylesheet" href="{{ asset('css/QuanLy/cuahang.css') }}">
    </head>
        <div id="wrapper">
            {{-- <header class="header">
                <div class="top-bar" >
                    <div class="flex-row container">
                        <div class="flex-left">
                            <ul class="ul-left" >
                                <li class="header-contact-wrapper">
                                    <ul id="header-contact" class="ul-contact"> 
                                        <li class><img src="img\email.jpg" alt="" id="img-email"></li>
                                        <li class>
                                            <i class="icon-email" style="font-size: 16px;"></i>
                                            <a href="mailto:khaihacang123@gmail.com" class="email">
                                            <span id="email">khaipn.21it@vku.udn.vn</span>
                                            </a>
                                            <span id="gach">|</span>
                                        </li>
                                        <li class><img src="img\download.jpg" alt="" id="img-phone"></li>
                                        <li class>
                                            <a href="tel:0919016614" class="phone">
                                                <i class="icon-phone"></i>
                                                <span id="phone">&nbsp;091 901 6614</span>
                                                
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-center">
                            <ul class="ul-center"></ul>
                        </div>
                        <div class="flex-right">
                            <ul class="ul-right">
                                <li class="account">
                                    <a href="login.html">
                                        <span id="account">Đăng nhập / Đăng ký </span>
                                    </a>
                                    <span id="gach">|</span>
                                </li>
                                <li class="giohang">
                                    <a href="/giohang.html" title="Giỏ hàng">
                                        <span class="header-cart-title" id="giohang">Giỏ hàng
                                        </span>
                                        <i class="icon-shopping-cart">
                                            
                                        </i>
                                        
                                    </a>
                                    <ul class="nav-dropdown nav-dropdown-simple" style>
                                        <li class="html widget_shopping_cart">
                                            <div class="widget_shopping_cart_content"></div>
                                        </li>
                                        
                                    </ul>
                                    
                                </li>
                                <li class="img-giohang"><img src="img\giohang1.jpg" alt="" id="img-giohang"></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <div  class="header-main">
                    <header class="header-menu">
                        <div class="flex-headermain container"> 
                            
                            <div class="flex-col logo" id="logo">
                                <a href="index.html"><img width="400px" height="50px" src="img\logo1.jpg" alt="" id="img-logo"></a>
                            </div>
                            <div class="menu">
                                <ul class="menu-header">
                                    <li class="menubar1">
                                        <a href="index.html" class="menu-link">Trang chủ</a>
                                    </li>
                                    <li class="menubar1">
                                        <a href="gioithieu.html" class="menu-link">Giới thiệu</a>
                                    </li>
                                    <li class="menubar1">
                                        <a href="cuahang.html" class="menu-link">Cửa hàng</a>
                                        <ul class="sub-menu" style="font-weight: 500;font-size: 16px;">
                                            <li><a href="./cuahangraucu.html">Rau củ</a></li>
                                            <li><a href="./cuahanghaisan.html">Hải sản</a></li>
                                            <li><a href="./cuahangthittrung.html">Thịt trứng</a></li>
                                            <li><a href="./cuahangtraicay.html">Trái cây</a></li>
                                            <li><a href="./cuahangdokho.html">Đồ khô</a></li>
                                            <li><a href="./cuahangdouong.html">Đồ uống</a></li>
                                        </ul>
                                    </li>
                                    <li class="menubar1">
                                        <a href="./DanhBa/danhBa.html" class="menu-link">Danh bạ nhà nông</a>
                                    </li>
                                    <li class="menubar1">
                                        <a href="./KienThuc/KienThuc.html" class="menu-link">Kiến thức</a>
                                    </li>
                                    <li class="menubar1">
                                        <a href="lienhe.html" class="menu-link">Liên hệ</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="header-search">
                                <div class="searchform">
                                    <form action="" role="search" method="get" class="searchform">
                                        <input type="search" class="search" value placeholder="Tìm kiếm...">
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        <label for="nav_mobile-input" class="nav_bars-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"></path></svg>
                        </label>

                        <input type="checkbox" class="nav_input" name="" id="nav_mobile-input">

                        <label for="nav_mobile-input" class="nav_overlay">

                        </label>

                        <div class="menu_mobile">
                            <label for="nav_mobile-input" class="nav_moblie-close">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg>
                            </label>
                            <ul class="menu_header-mobile">
                                <li class="menubar1-mobile">
                                    <a href="index.html" class="menu_link-mobile">Trang chủ</a>
                                </li>
                                <li class="menubar1-mobile">
                                    <a href="gioithieu.html" class="menu_link-mobile">Giới thiệu</a>
                                </li>
                                <li class="menubar1-mobile">
                                    <a href="cuahang.html" class="menu_link-mobile">Cửa hàng</a>
                                    
                                </li>
                                <li class="menubar1-mobile">
                                    <a href="./DanhBa/danhBa.html" class="menu_link-mobile">Danh bạ nhà nông</a>
                                </li>
                                <li class="menubar1-mobile">
                                    <a href="./KienThuc/KienThuc.html" class="menu_link-mobile">Kiến thức</a>
                                </li>
                                <li class="menubar1-mobile">
                                    <a href="lienhe.html" class="menu_link-mobile">Liên hệ</a>
                                </li>
                                
                            </ul>
                        </div>

                    </header>  
                    
                </div>
            </header> --}}
            @include('header');
            <div class="title">
                <div class="flex-row container">
                    <div class="left-title">
                        <nav class="title-main" >
                            <a href="index.html" style="font-weight: 100">TRANG CHỦ</a>
                            <span style="font-weight: 100">/</span>
                            CỬA HÀNG/ RAU CỦ
                        </nav>
                    </div>
                    <div class="right-title">
                        <p class="p-title">Hiển thị một kết quả duy nhất</p>
                        <form action="" method="get" class="order">
                            <select name="orderby" class="orderby">
                                <option value="menu-order">Thứ tự mặc định</option>
                                <option value="popularity">Thứ tự theo mức độ phổ biến</option>
                                <option value="rating" selected="selected">Thứ tự theo điểm đánh giá</option>
                                <option value="date">Mới nhất</option>
                                <option value="price">Thứ tự theo giá: Thấp đến cao</option>
                                <option value="price-desc">Thứ tự theo giá: Cao xuống thấp</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <main id="main">
                <div class="row main">
                    <div class="col large-3 left-main">
                        <aside class="main1">
                            <span >Danh mục sản phẩm</span>
                            @include('QuanLy.danhmuc')
                        </aside>
                        <!-- width="100" height="100" sizes="(max-width: 100px) 100vw, 100px"  -->
                        <aside class="main3" style="border-bottom-width: 0px;">
                            <span>Sản phẩm</span>
                            <ul class="pr_list">
                                <li>
                                    <a href="./cuahang.html">
                                        <img width="100" height="100" sizes="(max-width: 100px) 100vw, 100px" src="./img/thanhlong.jpg" alt="">
                                        <span class="pr-title">Thanh long sạch Bình Thuận 1kg </span>
                                    </a>
                                    <!-- <span id="price">45000&nbsp;<span>đ</span></span> -->
                                </li>
                                <li>
                                    <a href="./cuahang.html">
                                        <img width="100" height="100" sizes="(max-width: 100px) 100vw, 100px" src="./img/buoi.jpg" alt="">
                                        <span class="pr-title">Bưởi da xanh hướng hữu cơ 1kg</span>
                                    </a>
                                    <!-- <span id="price">75000&snbsp;<span>đ</span></span> -->
                                </li>
                                <li>
                                    <a href="./cuahang.html">
                                        <img width="100" height="100" sizes="(max-width: 100px) 100vw, 100px" src="./img/thitheo.png" alt="">
                                        <span class="pr-title">Thịt nạc đùi heo hữu cơ 400g Thịt nạc đùi heo hữu cơ 400g</span>
                                    </a>
                                    <!-- <span id="price">84000&nbsp;<span>đ</span></span> -->
                                </li>
                                <li>
                                    <a href="./cuahang.html">
                                        <img width="100" height="100" sizes="(max-width: 100px) 100vw, 100px" src="./img/tomsu.jpg" alt="">
                                        <span class="pr-title">Tôm sú hữu cơ Binca size đặc biệt XL hộp 250g</span>
                                    </a>
                                    <!-- <span id="price">181000&nbsp;<span>đ</span></span> -->
                                </li>
                                <li>
                                    <a href="./cuahang.html">
                                        <img width="100" height="100" sizes="(max-width: 100px) 100vw, 100px" src="./img/thanhlong.jpg" alt="">
                                        <span class="pr-title">Cải bó xôi hữu cơ (Rau chân vịt) 350g</span>
                                    </a>
                                    <!-- <span id="price">29000&nbsp;<span>đ</span></span> -->
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col large-9">
                    <div class="row1" style="margin-top: 40px">
                        <div class="pr" >
                            <div class="">
                                <img width="2048" height="2048" src="img/raudiepca.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Rau Diếp Cá Hữu Cơ 1kg</a>
                            </div>
                            <div class="price">
                                <p>30.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="./giohang.html" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\xalach.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Rau xà lách 1kg</a>
                            </div>
                            <div class="price">
                                <p>30.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\caithao.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Cải Thảo hữu cơ 1kg</a>
                            </div>
                            <div class="price">
                                <p>25.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\rauma.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Rau má hưu cơ 1kg</a>
                            </div>
                            <div class="price">
                                <p>20.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="row1 row2">
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img/raulang.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Rau Lang hưu cơ 1kg </a>
                                </div>
                                <div class="price">
                                    <p>15.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img/rauhung.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Rau Húng 1kg </a>
                                </div>
                                <div class="price">
                                    <p>150.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img/rauque.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Rau Quế 1kg</a>
                                </div>
                                <div class="price">
                                    <p>50.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img/rauram.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Rau răm hưu cơ 1kg </a>
                                </div>
                                <div class="price">
                                    <p>10.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row1 row2">
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img/xacay.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Xã Cây 1kg</a>
                                </div>
                                <div class="price">
                                    <p>20.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img\khoaitay.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Khoai tây Đà Lạt 1kg</a>
                                </div>
                                <div class="price">
                                    <p>45.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img/carot.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Cà rốt Đà Lạt</a>
                                </div>
                                <div class="price">
                                    <p>100.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img\khoaitim.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Khoai tím hữu cơ 1kg</a>
                                </div>
                                <div class="price">
                                    <p>20.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                        
                    </div>
                    
                </div>
                </div>
            </main>
            {{-- --------------------footer----------------- --}}
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