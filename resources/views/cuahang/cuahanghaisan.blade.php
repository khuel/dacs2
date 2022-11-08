<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cửa hàng hải sản</title>
        <link rel="stylesheet" href="{{ asset('css/QuanLy/cuahang.css') }}">
    </head>
        <div id="wrapper">
           {{-- --------------------header----------------- --}}
           @include('header2');
            <div class="title">
                <div class="flex-row container">
                    <div class="left-title">
                        <nav class="title-main" >
                            <a href="index.html" style="font-weight: 100">TRANG CHỦ</a>
                            <span style="font-weight: 100">/</span>
                            CỬA HÀNG / HẢI SẢN
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
                            @include('QuanLy.danhmuc');
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
                                <img width="2048" height="2048" src="img/cangu.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Cá ngừ đại dương 1kg</a>
                            </div>
                            <div class="price">
                                <p>190.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="./giohang.html" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\cathu.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Cá Thu 1kg</a>
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
                                <img width="2048" height="2048" src="img\catrau.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Cá trầu/ cá lóc 1kg</a>
                            </div>
                            <div class="price">
                                <p>140.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img/cabasa.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Cá basa 1kg</a>
                            </div>
                            <div class="price">
                                <p>50.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="row1 row2">
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img/ghe.JPG" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Ghẹ biển 1kg</a>
                                </div>
                                <div class="price">
                                    <p>300.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img/tomsu.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Tôm sú 1kg</a>
                                </div>
                                <div class="price">
                                    <p>350.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img/tomcangxanh.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Tôm càng xanh 1kg</a>
                                </div>
                                <div class="price">
                                    <p>190.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img/cuahoangde.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Cua hoàng đế 1kg </a>
                                </div>
                                <div class="price">
                                    <p>2.300.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row1 row2">
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img/mucong.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Mực Ống 1kg</a>
                                </div>
                                <div class="price">
                                    <p>200.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img\mucnang.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Mực nang 1kg</a>
                                </div>
                                <div class="price">
                                    <p>215.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="pr">
                                <div class="">
                                    <img width="2048" height="2048" src="img/dualuoi.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Dưa Lưới Việt Nam</a>
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
                                    <img width="2048" height="2048" src="img\cam.jpg" alt="" id="pr">
                                </div>
                                <div class="namepr">
                                    <a href="">Cam xoàn hướng hữu cơ 1kg</a>
                                </div>
                                <div class="price">
                                    <p>65.000 đ</p>
                                </div>
                                <div class="add">
                                    <a href="" id="add">Thêm vào giỏ</a>
                                </div>
                            </div>
                      <div class="row1">
                        <div class="namepr">
                            <a href="">1<a href="">2</a>
                        </div>
                               
                     </div>
                    </div>
                    
                </div>
                </div>
            </main>
            <!-- --------footer------------- -->
            <footer class="foot" style="padding-bottom: 20px">
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
                                    <li class="element-chuc-vu"><a href="./cuahangraucu.html" class="link-chucvu">Rau củ</a></li>
                                    <li class="element-chuc-vu"><a href="./cuahanghaisan.html" class="link-chucvu">Hải sản</a></li>
                                    <li class="element-chuc-vu"><a href="./cuahangtraicay.html" class="link-chucvu">Trái cây</a></li>
                                    <li class="element-chuc-vu"><a href="./cuahangdouong.html" class="link-chucvu">Đồ uống</a></li>
                                    <li class="element-chuc-vu"><a href="./cuahangthittrung.html" class="link-chucvu">Thịt trứng</a></li>  
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
            </footer>
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