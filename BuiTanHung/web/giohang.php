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
        <a class="navbar-brand" href="http://localhost:81/demo/BuiTanHung/web/home.php"> T???n H??ng MOTO <i class="fa fa-motorcycle logo-icon"></i> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost:81/demo/BuiTanHung/web/home.php">TRANG CH???
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> GI??I THI???U </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> PH??? KI???N </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> D???CH V??? </a>
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

                    //     echo "pass word c???a b???n :".$_SESSION['password'];
                    //	echo "<br><a href='logout.php'>Logout</a>";
                  }
                  //  else
                  //   echo "<script>alert('B???n ch??a ????ng nh???p'); location.href='login.php';</script>";
                }


                ?>

                <div class="dropdown-menu">
                  <a class="dropdown-item" href="http://localhost:81/demo/BuiTanHung/web/login.php">????ng nh???p</a>
                  <a class="dropdown-item" href="http://localhost:81/demo/BuiTanHung/web/register.php">????ng k??</a>
                  <hr class="dropdown-divider">

                  <a class="dropdown-item" href="http://localhost:81/demo/BuiTanHung/admin/login.php">????ng nh???p Admin</a>
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
            <th style="width:50%">T??n s???n ph???m</th>
            <th style="width:10%">Gi??</th>
            <th style="width:8%">S??? l?????ng</th>
            <th style="width:22%" class="text-center">Th??nh ti???n</th>
            <th style="width:10%"> </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-th="Product">
              <div class="row">
                <div class="col-sm-2 hidden-xs"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg" alt="S???n ph???m 1" class="img-responsive" width="100">
                </div>
                <div class="col-sm-10">
                  <h4 class="nomargin">S???n ph???m 1</h4>
                  <p>M?? t??? c???a s???n ph???m 1</p>
                </div>
              </div>
            </td>
            <td data-th="Price">200.000 ??</td>
            <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
            </td>
            <td data-th="Subtotal" class="text-center">200.000 ??</td>
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
                <div class="col-sm-2 hidden-xs"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/174.jpg" alt="S???n ph???m 1" class="img-responsive" width="100">
                </div>
                <div class="col-sm-10">
                  <h4 class="nomargin">S???n ph???m 2</h4>
                  <p>M?? t??? c???a s???n ph???m 2</p>
                </div>
              </div>
            </td>
            <td data-th="Price">300.000 ??</td>
            <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
            </td>
            <td data-th="Subtotal" class="text-center">300.000 ??</td>
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
            <td class="text-center"><strong>T???ng 200.000 ??</strong>
            </td>
          </tr>
          <tr>
            <td><a href="home.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Ti???p t???c mua h??ng</a>
            </td>
            <td colspan="2" class="hidden-xs"> </td>
            <td class="hidden-xs text-center"><strong>T???ng ti???n 500.000 ??</strong>
            </td>
            <td><a href="http://hocwebgiare.com/" class="btn btn-success btn-block">Thanh to??n <i class="fa fa-angle-right"></i></a>
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
  </body>

  </html>