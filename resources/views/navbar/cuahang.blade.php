<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cửa hàng</title>
        <link rel="stylesheet" href="{{ asset('css/QuanLy/cuahang.css') }}">
    </head>
        <div id="wrapper">
            @include('header');
            <div class="title">
                <div class="flex-row container">
                    <div class="left-title">
                        <nav class="title-main" >
                            <a href="index.html" style="font-weight: 100">TRANG CHỦ</a>
                            <span style="font-weight: 100">/</span>
                            CỬA HÀNG
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
                            <div class="menu-dmsp">
                                <ul class="menu" style="margin-bottom: 0px;">
                                    <li>
                                        <a href="./cuahangraucu.html" class="raucu">Rau củ</a>
                                    </li>
                                    <li>
                                        <a href="./cuahanghaisan.html">Hải sản</a>
                                    </li>
                                    <li>
                                        <a href="./cuahangtraicay.html" class="traicay">Trái cây</a>
                                    </li>
                                    <li>
                                        <a href="./cuahangdouong.html">Đồ uống</a>
                                    </li>
                                    <li>
                                        <a href="./cuahangdokho.html">Đồ khô</a>
                                    </li>
                                    <li>
                                        <a href="./cuahangthittrung.html">Thịt trứng</a>
                                    </li>
                                </ul>
                            </div>
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
                                <img width="2048" height="2048" src="img\buoi.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Bưởi da xanh hướng hữu cơ 1kg</a>
                            </div>
                            <div class="price">
                                <p>75.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="./giohang.html" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\thanhlong.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Thanh long sạch Bình Thuận 1kg</a>
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
                                <img width="2048" height="2048" src="img\saurieng.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Sầu riêng Ri6 sạch 1kg</a>
                            </div>
                            <div class="price">
                                <p>235.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\xoai.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Xoài cát Hòa Lộc Global GAP loại đặc biệt</a>
                            </div>
                            <div class="price">
                                <p>140.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row1 row2">
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\catracvang.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Cá Trác vàng biển Ích Hữu 400g</a>
                            </div>
                            <div class="price">
                                <p>75.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\cabasa.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Cá Basa cắt lát hữu cơ Binca hộp 270g</a>
                            </div>
                            <div class="price">
                                <p>75.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\ga.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Gà ta thả vườn Bình Định 1kg</a>
                            </div>
                            <div class="price">
                                <p>155.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\thitheo.png" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Thịt nạc đùi heo hữu cơ 400g Thịt nạc đùi heo hữu cơ 400g</a>
                            </div>
                            <div class="price">
                                <p>84.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row1 row2">
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\cai.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Cải bó xôi hữu cơ (Rau chân vịt) 350g</a>
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
                                <img width="2048" height="2048" src="img\bo.jpeg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Bơ sáp 034 Lâm Đồng hướng hữu cơ 1kg</a>
                            </div>
                            <div class="price">
                                <p>135.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\tomsu.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="">Tôm sú hữu cơ Binca size đặc biệt XL hộp 250g</a>
                            </div>
                            <div class="price">
                                <p>180.000 đ</p>
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
                    </div>
                </div>
                </div>
            </main>
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