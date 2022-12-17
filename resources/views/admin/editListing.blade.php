<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sửa</title>
    <!-- Bootstrap -->
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/QuanLy/listing.css') }}">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                @include('admin.left_side_bar_menu')
            </div>

            <!-- top navigation -->
            @include('admin.top_nav')
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="row" style="display: block;">

                    <div class="x_panel">
                        <div class="x_title">
                           
                            <h2>Form Basic Elements <small>different form elements</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            
                            <?php if(!empty($success)) { ?> 
                                <h3>Sửa thành công</h3><a href="{{ route('listing.edit', ['model'=>$modelName,'id'=>$id]) }}">Danh sách {{$modelName}}</a>
                            <?php } else {
                                ?>
                             <br />
                             </form>
                                <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data"
                                action="{{ route('listing.update', ['model'=>$modelName,'id'=>$id ]) }}">
                                @csrf
                               @method('PUT')
                                <?php 
                                if (!empty($configs)) {
                                        foreach ($configs as $config) { 
                                                switch ($config['type']) {
                                              case 'text':
                                              $field=$config['field'];
                                                ?>
                                                <div class="form-group row ">
                                                    <label class="control-label col-md-3 col-sm-3 "><?=$config['name'] ?></label>
                                                    <div class="col-md-9 col-sm-9 ">
                                                        <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($rcs->name) ?>"class="@error($id) is-invalid @enderror" />
                                                        @error('name')
                                                          <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <?php
                                                break;
                                            case 'number':
                                            $field=$config['field']; 
                                                ?>
                                                <div class="form-group row ">
                                                    <label class="control-label col-md-3 col-sm-3 "><?= $config['name'] ?></label>
                                                    <div class="col-md-9 col-sm-9 ">
                                                        <input type="text" class="form-control" name="price" value="<?= htmlspecialchars($rcs->price) ?>"class="@error( $field) is-invalid @enderror" />
                                                        @error( 'price')
                                                          <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <?php
                                                break;
                                            case 'sl':
                                            $field=$config['field']; 
                                                ?>
                                                <div class="form-group row ">
                                                    <label class="control-label col-md-3 col-sm-3 "><?= $config['name'] ?></label>
                                                    <div class="col-md-9 col-sm-9 ">
                                                        <input type="text" class="form-control" name="amout" value="<?= htmlspecialchars($rcs->amount) ?>"class="@error( $field) is-invalid @enderror" />
                                                        @error( 'amount')
                                                          <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <?php
                                                break;
                                             case 'image':
                                            $field=$config['field'];
                                                ?>
                                                <div class="form-group row ">
                                                    <label class="control-label col-md-3 col-sm-3 "><?= $config['name'] ?></label>
                                                    <div class="col-md-9 col-sm-9 ">
                                                        <input type="file" id="image"  value="{{ $rcs->image }}" name="image"  class="@error($field) is-invalid @enderror" />
                                                        <input type="text" name="" id="" value="{{ $rcs->image }}">
                                                        <img src="{{ url($rcs->image) }}" alt="" width="100" height="90">
                                                        @error($field)
                                                          <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <?php
                                                break;
                                            case 'ckeditor':
                                                ?>
                                                <div class="form-group row ">
                                                    <label class="control-label col-md-3 col-sm-3 "><?= $config['name'] ?></label>
                                                    <div class="col-md-9 col-sm-9 ">
                                                        <textarea id="product-content"  name="content" class="form-control ckeditor-box" rows="3" placeholder=""><?=$rcs->content ?></textarea>
                                                    </div>
                                                </div>
                                                <?php
                                                break;
                                            case 'select':
                                            $field=$config['field'];
                                                ?>
                                               
                                                    <div class="form-group row ">
                                                        <label class="control-label col-md-3 col-sm-3 "><?= $config['name'] ?></label>
                                                        <div class="col-md-9 col-sm-9 ">
                                                            <select class="form-control" name="category_id" id="" placeholder="<?= htmlspecialchars($config['field']) ?>">
                                                                       @foreach ($categories as $category )
                                                                         <option value="{{$category->name}}">{{$category->name}}</option>
                                                                       @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                
                                                <?php
                                                break;
                                             case 'bit':
                                            $field=$config['field'];
                                                ?>
                                                <div class="form-group row ">
                                                    <label class="control-label col-md-3 col-sm-3 "><?= $config['name'] ?></label>
                                                    <div class="col-md-9 col-sm-9 ">
                                                        <select class="form-control" name="featured_product" id="featured_product" placeholder="<?= htmlspecialchars($config['field']) ?>">
                                                            @if ($rcs->featured_product=='yes')
                                                            <option selected value="yes">Sản phẩm nổi bật</option>
                                                            <option  value="no">Không phải sản phẩm nổi bật</option>
                                                        @else
                                                          <option selected value="no">Không phải sản phẩm nổi bật</option>
                                                          <option selected value="yes">Sản phẩm nổi bật</option>
                                                        @endif
                                                 </select>
                                                    </div>
                                                </div>
                                                <?php
                                                break;
                                        
                                            }
                                    }
                                    }
                                    ?>
                                    <div class = "form-group">
                                        <div class = "col-md-9 col-sm-9  offset-md-3">
                                            <button type = "submit" class = "btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                

                              </form>
                           
                            <?php } ?>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="/vendors/Flot/jquery.flot.js"></script>
    <script src="/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/vendors/moment/min/moment.min.js"></script>
    <script src="/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    {{-- <script src="{{ asset('libs/ckeditor/ckeditor.js') }}"></script> --}}
    <script src="{{ asset('libs/ckeditor/ckeditor.js') }}"></script>

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'product-content' );
    </script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
