<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Liên hệ</title>
        <link rel="stylesheet" href="{{ asset('css/navbar/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar/login.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar/gioithieu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar/lienhe.css') }}">
    </head>
    <body>
        <div id="wrapper">
            @include('header2')
            <div class="content" style="background-image: url(./img/thanh.png); color: #fff; height:160px; background-size: cover; background-color: #6abd45;">
                <p id="p1" style="margin-bottom: 0px; padding-top: 35px; padding-bottom: 10px"><b>Liên hệ</b></p>
                <div class="left-title">
                    <nav class="title-main"  style="font-weight: bold">
                        <a href="index.html" style="font-weight: 100; color: #fff;">TRANG CHỦ</a>
                        <span style="font-weight: 300">/</span>
                        LIÊN HỆ
                    </nav>
                </div>
            </div>

            <div class="row1">
                <iframe style="border:0;margin-left: 140px;margin-top: 55px;" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4973.354442217021!2d108.25213838328347!3d15.9793957853384!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1653667529964!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="row1" style="margin-top: 50px; max-width: 50%;">
                    <div class="lh" >
                        <h1 style="text-align: center">Liên hệ với chúng tôi</h1>
                        <hr width="30%" color="black">
                        <div class="form" style="margin-top: 20px;">
                            <div class="row g-3" style="margin-bottom: 20px">
                                <div class="col" style="margin-right: 20px; ">
                                  <input size="25" type="text" class="form-control" placeholder="Họ và tên" aria-label="First name">
                                </div>
                                <div class="col">
                                  <input size="25" type="text" class="form-control" placeholder="Email" aria-label="Last name">
                                </div>
                              </div>
                              <div class="row g-3" style="margin-bottom: 20px">
                                <div class="col" style="margin-right: 20px;">
                                  <input size="25" type="text" class="form-control" placeholder="Số điện thoại" aria-label="First name">
                                </div>
                                <div class="col">
                                  <input size="25" type="text" class="form-control" placeholder="Địa chỉ" aria-label="Last name">
                                </div>
                              </div>
                              <div class="row g-3" >
                                <div class="col">
                                  <textarea name="" id="" cols="40" rows="10" aria-required="true" aria-invalid="false" placeholder="Lời nhắn" style="width: 536px; height: 100px"></textarea>
                                </div>
                              </div>
                              <div class="row g-3" >
                                <div class="col" style="margin-top: 20px;">
                                  <a class="gui" href="" style="background-color: #6abd45;padding: 10px 125px;margin-top: 20px; color: #fff; font-weight: bold;">Gửi</a>
                                </div>
                              </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            @include('footer')
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