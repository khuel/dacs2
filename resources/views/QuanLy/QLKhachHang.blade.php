<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Quản Lý Khách hàng</title>
        <link rel="stylesheet" href="{{ asset('css/QuanLy/cuahang.css') }}">
        <link rel="stylesheet" href="{{ asset('css/QuanLy/QLKhachHang.css') }}">
    </head>
        <div id="wrapper">
            @include('header2')
            <div class="title">
                <div class="flex-row container">
                    <div class="left-title">
                        <nav class="title-main" >
                            <a href="index.html" style="font-weight: 100">TRANG CHỦ</a>
                            <span style="font-weight: 100">/</span>
                            QUẢN LÝ KHÁCH HÀNG
                        </nav>
                    </div>
                    <div class="right-title">
                        <p class="p-title"> </p>

                    </div>
                </div>
            </div>
            <main id="main">
                <div class="row main">
                    <div class="col large-3 left-main">
                        <aside class="main1">
                            <span >Danh mục</span>
                            <div class="menu-dmsp">
                                <ul class="menu" style="margin-bottom: 0px;">
                                    <li>
                                        <a href="">Thêm Danh Mục</a>
                                    </li>
                                    <li>
                                        <a href="">Danh sách danh mục</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="main3" style="border-bottom-width: 0px;">
                            <span>Sản phẩm</span>
                            <div class="menu-dmsp">
                                <ul class="menu" style="margin-bottom: 0px;">
                                    <li>
                                        <a href="">Thêm Sản Phẩm</a>
                                    </li>
                                    <li>
                                        <a href="">Danh sách Sản Phẩm</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="main3" style="border-bottom-width: 0px;">
                            <span>Khách hàng</span>
                            <div class="menu-dmsp">
                                <ul class="menu" style="margin-bottom: 0px;">
                                    <li>
                                        <a href="">Danh sách khách hàng</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col large-9">
                    <div class="row1" style="margin-top: 40px">
                        <h1>DANH SÁCH KHÁCH HÀNG CỦA CỬA HÀNG </h1>
                     </div>
                     <?php
                     include('cone');
                    //  $user_per_page= 6;
                    //  $current_page=1;
                    //               
                    $sql = "select * from user_registered";
                    $totalRecords= mysqli_query($connect,$sql);
                    // $totalRecords=$totalRecords->num_colum;
                    // $totalPages=ceil($totalRecords/$user_per_page);
                    $result = mysqli_query($connect, $sql);
                    $count = 1;
                    
                    ?>
                     <div class="row1 row2">
                        <table class="tableKH table-dark tablehover"  style="width: 100%;">
                            <thead>
                                <tr >
                                    <th>STT</th>
                                    <th>Họ Và Tên</th>
                                    <th>Giới Tính</th>
                                    <th>Email</th>
                                    <th></th>
                                    <th>Chỉnh sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($result as $infor_customer){ ?>
                            
                                <tr>
                                    <th><?php echo $count++ ?> </th>
                                    <th><?php echo $infor_customer['fullname'] ?> </th>
                                    <th><?php echo $infor_customer['sex'] ?> </th>
                                    <th><?php echo $infor_customer['email'] ?> </th>
                                    <th><a href="them.php">Thêm</a><span>|</span><a href="xoa.php">Xóa</a><span>|</span><a href="sua.php">Sửa</a></th>
                               </tr>
                               <?php } ?>
                            </tbody>

                        </table>
                     </div>
                    </div>
                    
                </div>
                </div>
            </main>
            <!----------footer--------------->
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