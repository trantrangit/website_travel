<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta property="og:locale" content="vi_VN">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - QUẢN BÁ DU LỊCH</title>
    <base href=''>
    <!-- Bootstrap Core CSS -->
    <link href="components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <script src="dist/js/Chart.min.js"></script>
     <script src="dist/js/canvasjs.min.js"></script>
    <style type="text/css">
        .sidebar-menu a
        {
          /*  color: #000;
            font-size: 1.3em;*/
        }
        .sidebar-menu ul li a.active
        {
            /*color:#003c71;*/
        }
         .sidebar-menu ul li a:hover
        {
           /* background: rgba(0,0,0,0.1);*/

        }
        .tieude:hover
        {
          /*  color:#003c71; */
        }
    </style>

   
</head>
<body>
<div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background:#003c71 ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="../../images/logoletgo.png" width="100" height="50"><strong style="color: #fff; font-size: 1.3em">Quản trị hệ thống - Quản bá du lịch</strong><!--  <a class="navbar-brand" href="home" style="color: #fff"> Quản trị hệ thống - Quản bá du lịch</a> -->
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right"  style="color: #fff" >
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"  style="color: #fff">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Thông tin tài khoản</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Thay đổi mật khẩu</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Thoát khỏi chương trình</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar sidebar-menu" role="navigation"  >
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i>TRANG CHỦ</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i>Hệ thống<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?action=DanhSachTK">Tài khoản</a>
                                </li>
                                <li>
                                    <a href="#">Chức năng</a>
                                </li>
                                <li>
                                    <a href="#">Phân quyền</a>
                                </li>
                                 <li>
                                    <a href="#">Nhóm người dùng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa fa-deviantart fa-fw "></i> Quản lý nhân sự<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Bộ phận</a>
                                </li>
                                 <li>
                                    <a href="#">Nhân viên</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-wallet fa-fw"></i> Quản lý quốc gia- thành phố<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Chi nhánh</a>
                                </li>
                                <li>
                                    <a href="#">Quốc gia</a>
                                </li>
                                <li>
                                    <a href="#">Tỉnh - thành phố</a>
                                </li>
                                <li>
                                    <a href="#">Quốc gia</a>
                                </li>
                                 <li>
                                    <a href="#">Địa chỉ</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-certificate fa-fw"></i> Quản lý danh mục<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?action=DanhSachKH">Khách hàng</a>
                                </li>
                                <li>
                                    <a href="#">Tours</a>
                                </li>
                                <li>
                                    <a href="#">Nhà hàng</a>
                                </li>
                                <li>
                                    <a href="#">Phương tiện</a>
                                </li>
                                 <li>
                                    <a href="#">Địa chỉ</a>
                                </li>
                                 <li>
                                    <a href="#">Khuyến mãi</a>
                                </li>
                                 <li>
                                    <a href="#">Đối tượng ưu đãi</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Quản lý các thông tin đặt<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?action=DSDatTours">Đặt tours</a>
                                </li>
                                <li>
                                    <a href="#">Đặt nhà hàng</a>
                                </li>
                                <li>
                                    <a href="#">Đặt khách sạn</a>
                                </li>
                                <li>
                                    <a href="#">Đặt phương tiện</a>
                                </li>
                                 <li>
                                    <a href="#">Lịch trình</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
                         <li>
                            <a href="#"><i class="fa fa-area-chart fa-fw"></i>Thống kê - báo cáo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?action=TKTours">Thống kê đặt tour</a>
                                </li>
                                <li>
                                    <a href="#">Thống kê đặt dịch vụ</a>
                                </li>
                                <li>
                                    <a href="#">Thống kê danh mục</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>             
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->