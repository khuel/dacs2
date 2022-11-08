<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kiến Thức</title>
        <link rel="stylesheet" href="{{ asset('css/navbar/kienthuc.css') }}">
    </head>
    <body>
        <div id="wrapper">
            @include('header2');
                    
                    
                    <div class="content1" style="background-image: url(/img/thanh.png);width: 100%; color: #fff; height:160px; background-size: cover;">
                        <p id="p1" style="padding-top: 30px"><b>Kiến Thức</b></p>
                        <div class="left-title">
                            <nav class="title-main"  style="font-weight: bold;text-align: center;">
                                <a href="index.html" style="font-weight: 100; color: #fff;">TRANG CHỦ</a>
                                <span style="font-weight: 300">/</span>
                                GIỚI THIỆU
                            </nav>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="khoi_ao">
              
                      </div>
                       <ul class="content" style="margin-top: 50px;">
                          <li>
                              
                              <div class="row1">
                                <div class="pr" >
                                    <div class="">
                                        <img width="2048" height="2048" src="./img/tnam.png " alt="" id="pr">
                                    </div>
                                    <div class="namepr">
                                        <a href="https://hellobacsi.com/an-uong-lanh-manh/thong-tin-dinh-duong/cac-loai-nam/#:~:text=%20T%C3%A1c%20d%E1%BB%A5ng%20c%E1%BB%A7a%20n%E1%BA%A5m%20%201%20Ch%E1%BA%A5t,nh%C6%B0%20riboflavin%2C%20niacin%20v%C3%A0%20axit%20pantothenic.%20More%20">Nấm có tác dụng gì?</a>
                                        <p>Bảo về tim</p>
                                        <p>Chống ung thư</p>
                                    </div>
                                    
                                    
                                </div>
                                <div class="pr">
                                    <div class="">
                                        <img width="2048" height="2048" src="./img/chaca.png" alt="" id="pr">
                                    </div>
                                    <div class="namepr">
                                        <a href="https://camnangtop10.com/mon-ngon-tu-cha-ca/#:~:text=C%C3%B9ng%20camnangtop10.com%20%C4%91i%E1%BB%83m%20qua%2010%20m%C3%B3n%20ngon%20t%E1%BB%AB,ngon%20cho%20th%E1%BB%B1c%20%C4%91%C6%A1n%20...%20More%20items...%20">Chả Cá làm gì ngon?</a>
                                        <p>Bún chả cá</p>
                                        <p>Bánh canh chả cá</p>
                                    </div>
                                    
                                </div>
                                <div class="pr">
                                    <div class="">
                                        <img width="2048" height="2048" src="./img/ngucoc.png" alt="" id="pr">
                                    </div>
                                    <div class="namepr">
                                        <a href="">Ngũ Cốc là gì?</a>
                                        <p>Hạt mè</p>
                                        <p>Hạt vừng</p>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="row1">
                                <div class="pr">
                                    <div class="">
                                        <img width="2048" height="2048" src="./img/cam1.png" alt="" id="pr">
                                    </div>
                                    <div class="namepr">
                                        <a href="">Cam có tác dụng gì?</a>
                                        <p>  Cam rất giàu chất xơ, có tác dụng hỗ trợ quá trình tiêu hóa.</p>
                                        
                                    </div>
                                    
                                </div>
                                <div class="pr">
                                    <div class="">
                                        <img width="2048" height="2048" src="./img/bo.png" alt="" id="pr">
                                    </div>
                                    <div class="namepr">
                                        <a href="">Các món từ quả bơ</a>
                                        <p>Bánh mỳ nướng bơ</p>
                                        <p>Kem bơ</p>
                                    </div>
                                    
                                </div>
                                <div class="pr">
                                    <div class="">
                                        <img width="2048" height="2048" src="./img/dtht.jpg" alt="" id="pr">
                                    </div>
                                    <div class="namepr">
                                        <a href="">Công dụng của Đông Trùng Hạ Thảo</a>
                                        <p>Tăng cường hệ miễn dịch</p>
                                        <p>Chống ưng thư</p>
                                    </div>
                                    
                                </div>
                            </div>
                            
                          </li>
                            
                         </div>
                         
                        @include('footer')
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
    </body>
</html>