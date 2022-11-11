<div class="left_col scroll-view">
  <div class="navbar nav_title" style="border: 0;">
    <a href="{{ route('qladmin.') }}" class="site_title"><i class="fa fa-paw"></i> <span>Admin</span></a>
  </div>

  <div class="clearfix"></div>

  <!-- menu profile quick info -->
  <div class="profile clearfix">
    <div class="profile_pic">
      <img src="{{ asset('img/avt2.jpg') }}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>Welcome,</span>
      <h2>Khuê</h2>
    </div>
  </div>
  <br />
  {{-- slinebar menu------- --}}
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-home"></i> Quản lý danh mục <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ route('add_category.') }}">Thêm danh mục</a></li>
            <li><a href="{{ route('edit_category.') }}">Chỉnh sửa danh mục</a></li>
            <li><a href="index3.html">Danh sách danh mục</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-edit"></i> Quản lý sản phẩm  <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="form.html">Thêm sản phẩm</a></li>
            <li><a href="form_advanced.html">Chỉnh sửa sản phẩm</a></li>
            <li><a href="form_validation.html">Danh sách sản phẩm</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-desktop"></i> Quản lý khách hàng <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="general_elements.html">Chỉnh sửa khách hàng </a></li>
            <li><a href="media_gallery.html">Danh sách khách hàng</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-table"></i> Chăm sóc khách hàng <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="tables.html">Email khách hàng </a></li>
            <li><a href="tables_dynamic.html">SDT khách hàng </a></li>
          </ul>
        </li>
      </ul>
    </div>

  </div>
  <!-- /menu footer buttons -->
  <div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
      <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
      <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
      <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
  </div>
  <!-- /menu footer buttons -->
</div>