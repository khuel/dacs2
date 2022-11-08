<header class="header-menu">
    <div class="flex-headermain container"> 
        
        <div class="flex-col logo" id="logo">
            <a href="/"><img width="400px" height="50px" src="img\logo1.jpg" alt="" id="img-logo"></a>
        </div>
        <div class="menu">
            <ul class="menu-header">
                <li class="menubar1">
                    <a href="/" class="menu-link">Trang chủ</a>
                </li>
                <li class="menubar1">
                    <a href="{{ route('gioithieu.') }}" class="menu-link">Giới thiệu</a>
                </li>
                <li class="menubar1">
                    <a href="{{ route('cuahang.') }}" class="menu-link">Cửa hàng</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('cuahangraucu.') }}">Rau củ</a></li>
                        <li><a href="{{ route('cuahanghaisan.') }}">Hải sản</a></li>
                        <li><a href="{{ route('gioithieu.') }}">Thịt trứng</a></li>
                        <li><a href="{{ route('gioithieu.') }}">Trái cây</a></li>
                        <li><a href="cuahang.html">Đồ khô</a></li>
                        <li><a href="cuahang.html">Đồ uống</a></li>
                    </ul>
                </li>
                <li class="menubar1">
                    <a href="{{ route('danhba.') }}" class="menu-link">Danh bạ nhà nông</a>
                </li>
                <li class="menubar1">
                    <a href="{{ route('kienthuc.') }}" class="menu-link">Kiến thức</a>
                </li>
                <li class="menubar1">
                    <a href="{{ route('lienhe.') }}" class="menu-link">Liên hệ</a>
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
                <a href="/" class="menu_link-mobile">Trang chủ</a>
            </li>
            <li class="menubar1-mobile">
                <a href="{{ route('gioithieu.') }}" class="menu_link-mobile">Giới thiệu</a>
            </li>
            <li class="menubar1-mobile">
                <a href="{{ route('cuahang.') }}" class="menu_link-mobile">Cửa hàng</a>
                
            </li>
            <li class="menubar1-mobile">
                <a href="{{ route('danhba.') }}" class="menu_link-mobile">Danh bạ nhà nông</a>
            </li>
            <li class="menubar1-mobile">
                <a href="{{ route('kienthuc.') }}" class="menu_link-mobile">Kiến thức</a>
            </li>
            <li class="menubar1-mobile">
                <a href="{{ route('lienhe.') }}" class="menu_link-mobile">Liên hệ</a>
            </li>
            
        </ul>
    </div>
</header>