<!DOCTYPE html>
<html lang="vi">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> MOWO - MOTO WORLD </title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="../CSS/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../CSS/shop-homepage.css" rel="stylesheet">
  <!-- Bootstrap core JavaScript -->
  <script src="../JS/jquery.min.js"></script>
  <script src="../JS/bootstrap.bundle.min.js"></script>


</head>

<body>
  <!DOCTYPE html>
  <html lang="vi">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> MOWO - MOTO WORLD </title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="../CSS/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../CSS/shop-homepage.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript -->
    <script src="../JS/jquery.min.js"></script>
    <script src="../JS/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>



  </head>
  <style type="text/css">
    .table&amp;
    amp;
    gt;
    tbody&amp;
    amp;
    gt;
    tr&amp;
    amp;
    gt;
    td,
    .table&amp;
    amp;
    gt;
    tfoot&amp;
    amp;
    gt;
    tr&amp;
    amp;
    gt;

    td {
      vertical-align: middle;
    }

    @media screen and (max-width: 600px) {
      table#cart tbody td .form-control {
        width: 20%;
        display: inline !important;
      }

      .actions .btn {
        width: 36%;
        margin: 1.5em 0;
      }

      .actions .btn-info {
        float: left;
      }

      .actions .btn-danger {
        float: right;
      }

      table#cart thead {
        display: none;
      }

      table#cart tbody td {
        display: block;
        padding: .6rem;
        min-width: 320px;
      }

      table#cart tbody tr td:first-child {
        background: #333;
        color: #fff;
      }

      table#cart tbody td:before {
        content: attr(data-th);
        font-weight: bold;
        display: inline-block;
        width: 8rem;
      }

      table#cart tfoot td {
        display: block;
      }

      table#cart tfoot td .btn {
        display: block;
      }
    }
  </style>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="http://localhost:81/demo/BuiTanHung/web/home.php"> Tấn Hưng MOTO <i class="fa fa-motorcycle logo-icon"></i> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost:81/demo/BuiTanHung/web/home.php">TRANG CHỦ
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> GIÓI THIỆU </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> PHỤ KIỆN </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> DỊCH VỤ </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> BLOG </a>
            </li>


            <ul>
              <div class="dropdown">
                <button type="button" class="btn   btn-light" data-toggle="dropdown">
                  <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </button>
                <!-- <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
              </div> -->
              </div>



            </ul>
            <ul>


              <div class="dropdown">
                <button type="button" class="btn     btn-light" data-toggle="dropdown">
                  <a href="#"><i class="fas fa-user-circle"></i>
                  </a>
                </button>
                <?php
                if (isset($_COOKIE['username']) and isset($_COOKIE['password'])) {
                  echo "<br>";
                  echo "" . $_COOKIE['username'];
                  echo "	";

                  echo "<a href='logout.php'><i class='fas fa-sign-out-alt'></i></a>";
                } else {
                  if (isset($_SESSION['username']) and isset($_SESSION['password'])) {
                    echo "<br>";
                    echo "" . $_SESSION['username'];
                    echo "&nbsp ";
                    echo "<a href='logout.php'><i class='fas fa-sign-out-alt'></i></a>";

                    //     echo "pass word của bạn :".$_SESSION['password'];
                    //	echo "<br><a href='logout.php'>Logout</a>";
                  }
                  //  else
                  //   echo "<script>alert('Bạn chưa đăng nhập'); location.href='login.php';</script>";
                }


                ?>

                <div class="dropdown-menu">
                  <a class="dropdown-item" href="http://localhost:81/demo/BuiTanHung/web/login.php">Đăng nhập</a>
                  <a class="dropdown-item" href="http://localhost:81/demo/BuiTanHung/web/register.php">Đăng kí</a>
                  <hr class="dropdown-divider">

                  <a class="dropdown-item" href="http://localhost:81/demo/BuiTanHung/admin/login.php">Đăng nhập Admin</a>
                </div>
              </div>
            </ul>
          </ul>




        </div>
      </div>
    </nav>

    <!-- .............. -->
    
    <div class="container">
      <table id="cart" class="table table-hover table-condensed">
        <thead>
          <tr>
            <th style="width:50%">Tên sản phẩm</th>
            <th style="width:10%">Giá</th>
            <th style="width:8%">Số lượng</th>
            <th style="width:22%" class="text-center">Thành tiền</th>
            <th style="width:10%"> </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-th="Product">
              <div class="row">
                <div class="col-sm-2 hidden-xs"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                </div>
                <div class="col-sm-10">
                  <h4 class="nomargin">Sản phẩm 1</h4>
                  <p>Mô tả của sản phẩm 1</p>
                </div>
              </div>
            </td>
            <td data-th="Price">200.000 đ</td>
            <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
            </td>
            <td data-th="Subtotal" class="text-center">200.000 đ</td>
            <td class="actions" data-th="">
              <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
              </button>
              <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
              </button>
            </td>
          </tr>
          <tr>
            <td data-th="Product">
              <div class="row">
                <div class="col-sm-2 hidden-xs"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/174.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                </div>
                <div class="col-sm-10">
                  <h4 class="nomargin">Sản phẩm 2</h4>
                  <p>Mô tả của sản phẩm 2</p>
                </div>
              </div>
            </td>
            <td data-th="Price">300.000 đ</td>
            <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
            </td>
            <td data-th="Subtotal" class="text-center">300.000 đ</td>
            <td class="actions" data-th="">
              <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
              </button>
              <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
              </button>
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="visible-xs">
            <td class="text-center"><strong>Tổng 200.000 đ</strong>
            </td>
          </tr>
          <tr>
            <td><a href="home.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
            </td>
            <td colspan="2" class="hidden-xs"> </td>
            <td class="hidden-xs text-center"><strong>Tổng tiền 500.000 đ</strong>
            </td>
            <td><a href="http://hocwebgiare.com/" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
  </body>

  </html>