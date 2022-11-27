<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Fresh Organic Food</title>
        <link rel="stylesheet" href="{{ asset('css/navbar/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <header class="header">
                <div  class="header-main" >
                    <!-- nav bar-->
                    <header class="header-menu">
                        <div class="" class="header-menu">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <div class="container-fluid">
                                    <a href="#" class="navbar-brand"><img src="logo5.png" alt="" style="height: 70px;"></a>
                                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                        <div class="navbar-nav">
                                            <a href="#" class="nav-item nav-link active">Trang Chủ</a>
                                            <a href="#" class="nav-item nav-link">Cửa Hàng</a>
                                            <div class="nav-item dropdown">
                                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Giới Thiệu</a>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">Inbox</a>
                                                    <a href="#" class="dropdown-item">Sent</a>
                                                    <a href="#" class="dropdown-item">Drafts</a>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="d-flex">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <button type="button" class="btn btn-secondary"><i class="bi-search"></i></button>
                                            </div>
                                        </form>
                                        <div class="navbar-nav">
                                            <a href="login.php" class="nav-item nav-link">Đăng Nhập</a>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </header>
                    <!-- banner-->
                    <div class="banner">
                        <img src="https://food.unl.edu/newsletters/images/fresh-vegetables-basket.png" alt="" id="banner">
                        <nav>
                            <p id="p">TÌM MUA <b id="b">THỰC PHẨM SẠCH</b> TỪ <b id="b"><br>
                                NHÀ CUNG CẤP UY TÍN</b> TẠI ĐÂY</p>
                        </nav>
                    </div>

                    <div class="content">
                        <p id="p1"><b>Mua sản phẩm lựa chọn từ vườn</b></p>
                    </div>
                    <!-- list product -->
                    <div class="row">
                        @foreach ($categories as $category)
                        <div class="menubot large">
                            <div class="menubot1 text-center">
                                <div class="container">
                                    <img src="img\{{$category->image}}.png" alt="" class="image">
                                </div>
                                <div class="space" style="display:block; height: auto; padding-top: 20px;"></div>
                                <h3>
                                    <a href="cuahang.html" id="text-menu">{{$category->name}}</a>
                                </h3>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="content">
                        <p id="p1"><b>Chương trình khuyến mãi</b></p>
                    </div>
                    <!-- promotion-->
                    <div class="row">
                        <div class="km large1">
                            <div class="km1">
                                <img src="img\km1.png" alt="" class="img">
                            </div>
                        </div>
                        <div class="km large1">
                            <div class="km1">
                                <img src="img\km2.jpg" alt="" class="img">
                            </div>
                        </div>
                        <div class="km large1">
                            <div class="km1">
                                <img src="img\km3.jpg" alt="" class="img">
                            </div>
                        </div>
                        <div class="km large1">
                            <div class="km1">
                                <img src="img\km4.png" alt="" class="img">
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        <p id="p1"><b>Sản phẩm nổi bật</b></p>
                    </div>
                    <!-- all product-->
                    <div class="row1">
                        <div class="pr" >
                            <div class="">
                                <img width="2048" height="2048" src="img\buoi.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="giohang.html">Bưởi da xanh hướng hữu cơ 1kg</a>
                            </div>
                            <div class="price">
                                <p>75.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="giohang.html" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\thanhlong.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="giohang.html">Thanh long sạch Bình Thuận 1kg</a>
                            </div>
                            <div class="price">
                                <p>45.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="giohang.html" id="add">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="pr">
                            <div class="">
                                <img width="2048" height="2048" src="img\saurieng.jpg" alt="" id="pr">
                            </div>
                            <div class="namepr">
                                <a href="giohang.html">Sầu riêng Ri6 sạch 1kg</a>
                            </div>
                            <div class="price">
                                <p>235.000 đ</p>
                            </div>
                            <div class="add">
                                <a href="giohang.html" id="add">Thêm vào giỏ</a>
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
                    <div class="more">
                        <a href="cuahang.html" id="more">Xem thêm</a>
                    </div>
                    <div class="content">
                        <p id="p1"><b>Cam kết của chúng tôi</b></p>
                    </div>
                    <!-- slide show-->
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                            <img src="./img/slide1.jpg" style="width:100%">
                        </div>
                        
                        <div class="mySlides fade">
                            <img src="./img/slide2.jpg" style="width:100%">
                        </div>
                        
                        <div class="mySlides fade">
                            <img src="./img/slide3.jpg" style="width:100%">
                        </div>
                        
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>
                        
                    </div>
                        <br>
                        
                        <div style="text-align:center">
                          <span class="dot" onclick="currentSlide(1)"></span> 
                          <span class="dot" onclick="currentSlide(2)"></span> 
                          <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    <section class="subcribe " style="padding-top: 60px;">
                        <div class="subcribe-background">
                            <div class="subcribe-container">
                                <div class="row-sub">
                                    <div class="col-sub">
                                        <h2>Đăng ký</h2>
                                        <p>Đăng ký để nhận được được thông tin mới nhất từ chúng tôi.</p>
                                        <div class="input-mail-sub">
                                            <form action="" class="input">
                                                <div class="form-group">
                                                    <input type="text" class="text-mail" placeholder="Enter email">
                                                    <input class="button" type="submit" value="Đăng ký"></input>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Footer -->
                    <!-- <footer class="foot" style="padding-bottom: 20px">
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
                    </footer> -->
                    <!-- Footer -->
                    <footer class="text-center text-lg-start bg-light text-muted">
                    <!-- Section: Social media -->
                    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                        <!-- Left -->
                        <div class="me-5 d-none d-lg-block">
                        <span>Liên hệ với chúng tôi:</span>
                        </div>
                        <!-- Left -->

                        <!-- Right -->
                        <div>
                        <a href="facebook.com/khailm10" class="me-4 text-reset ">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="bi bi-google"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="bi bi-github"></i>
                        </a>
                        </div>
                        <!-- Right -->
                    </section>
                    <!-- Section: Social media -->

                    <!-- Section: Links  -->
                    <section class="">
                        <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Fresh Organic Food
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Sản phẩm
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Angular</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">React</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Vue</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Laravel</a>
                            </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Danh mục
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Pricing</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Settings</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Help</a>
                            </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Liên hệ</h6>
                            <p><i class="bi bi-house me-3"></i> New York, NY 10012, US</p>
                            <p>
                                <i class="bi bi-envelope me-3"></i>
                                khaipn.21it@vku.udn.vn
                            </p>
                            <p><i class="bi bi-phone me-3"></i> + 01 234 567 88</p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                        </div>
                    </section>
                    <!-- Section: Links  -->

                    <!-- Copyright -->
                    <!-- <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                        © 2021 Copyright:
                        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                    </div> -->
                    <!-- Copyright -->
                    </footer>
                    <!-- Footer -->
                </div>
            </header>
        </div>
        <!-- js nav -->
        <script type="text/javascript">
            window.addEventListener("scroll", function(){
                var header = document.querySelector(".header-menu");
                header.classList.toggle("sticky", window.scrollY > 0);
            })
        </script>
        <!--js slide show-->
        <script>
            let slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
            </script>
            <!--auto slide show-->
            <script>
                let slideIndex1 = 0;
                showSlides();
                
                function showSlides() {
                  let i;
                  let slides = document.getElementsByClassName("mySlides");
                  let dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                  }
                  slideIndex1++;
                  if (slideIndex1 > slides.length) {slideIndex1 = 1}    
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex1-1].style.display = "block";  
                  dots[slideIndex1-1].className += " active";
                  setTimeout(showSlides, 3000); // doi anh moi 2s
                }
                </script>
    </body>
</html>