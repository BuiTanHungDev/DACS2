<?php
session_start();
require_once('../db/dbhelper.php');
?>




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


          <ul align= center;>
            <div class="dropdown">
              <button type="button" class="btn   btn-light" data-toggle="dropdown">
                <a  href="http://localhost:81/demo/BuiTanHung/web/giohang.php"><i class="fas fa-shopping-cart"></i></a>
              </button>
               <!-- <div class="dropdown-menu"> 
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
              </div>  -->
            </div>
            


          </ul>
          <ul>


            <div class="dropdown">
              <button type="button" class="btn   btn-light" data-toggle="dropdown">
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

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-lg-3">
        <br>
        <div class="list-group">
          <?php
          // lấy dữ liệu hãng ra
          $sql = 'select * from hang';
          $categoryList = executeResult($sql);
          $index = 1;
          foreach ($categoryList as $item) {
            echo '<a class="list-group-item" href="sanpham.php?tenhang=' . $item['tenhang'] . '"> <img class="d-block img-fluid" src=' . $item['logo'] . ' alt="Khong tai duoc"> </a>  <p> </p>';
          }
          ?>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">

          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="../Hinh/LOGO/HONDA.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="../Hinh/LOGO/YAMAHA.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="../Hinh/LOGO/SUZUKI.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"> <img class="card-img-top" src="../Hinh/new1.jpg" alt=""> </a>

              <div class="card-footer">
                <h4 class="card-title">
                  <a href="#"> HONDA </a>
                </h4>
              </div>

              <div class="card-body">
                <h5> GIÁ XE THÁNG 12 </h5>
                <p class="card-text">
                  Giá xe HONDA mới nhất tại các đại lý Việt Nam
                </p>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"> <img class="card-img-top" src="../Hinh/new2.jpg" alt=""> </a>

              <div class="card-footer">
                <h4 class="card-title">
                  <a href="#"> SUZUKI </a>
                </h4>
              </div>

              <div class="card-body">
                <h5> GIÁ XE THÁNG 12 </h5>
                <p class="card-text">
                  Giá xe SUZUKI mới nhất tại các đại lý Việt Nam
                </p>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"> <img class="card-img-top" src="../Hinh/new3.jpg" alt=""> </a>

              <div class="card-footer">
                <h4 class="card-title">
                  <a href="#"> YAMAHA </a>
                </h4>
              </div>

              <div class="card-body">
                <h5> GIÁ XE THÁNG 12 </h5>
                <p class="card-text">
                  Giá xe YAMAHA mới nhất tại các đại lý Việt Nam
                </p>
              </div>

            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- content -->
  <p> Trang chủ Văn Mẫu Lớp 6
    ĐOẠN VĂN GIỚI THIỆU VỀ BẢN THÂN EM BẰNG TIẾNG VIỆT
    Viết 1 đoạn văn giới thiệu về bản thân em bằng tiếng việt là một trong các bài văn hay do giáo viên yêu cầu thực hiện để giới thiệu bản thân em trước lớp.
    MỤC LỤC NỘI DUNG
    1. Một số đoạn văn hay tự giới thiệu bản thân lớp 6
    2. Bài văn ngắn tự giới thiệu về bản thân hay nhất
    Để viết đoạn văn tự giới thiệu bản thân bằng tiếng việt các em cần lưu ý những điều sau:

    + Thông tin của mình: Tên, tuổi, nhà ở, hiện đang học lớp, trường nào?

    + Thông tin về gia đình: Nhà em có mấy người, gồm những ai? Có thể nêu thêm về địa chỉ nhà, thông tin nghề nghiệp của bố mẹ, ông bà ....



    + Nói về tính cách, sở thích, ước mơ của em.

    Cùng tham khảo một số đoạn văn dưới đây để hoàn thiện tốt hơn bài của mình em nhé!

    MỘT SỐ ĐOẠN VĂN HAY TỰ GIỚI THIỆU BẢN THÂN LỚP 6
    Video Player is loading.

    Pause
    Unmute
    Remaining Time 7:59
    Đoạn văn 1

    Đinh Hương Giang là tên mà ba mẹ đặt cho lúc em mới ra đời. Nhưng mọi người trong nhà vẫn quen gọi em là Bé Còi. Cái tên đó xem ra rất hợp với thân hình nhỏ nhắn của em. Em rất khoẻ nhưng cũng nghịch ngợm nhiều nên mẹ bảo em không thể lớn được. Mỗi buổi chiều đi học về em thường cùng bạn Sơn, bạn Tuấn xách chai đi đổ dế. Hôm nào chán chúng em lại rủ nhau đi đánh đáo, đánh khăng. Trong nhà em toàn bi, quay, khăng, không thể kiếm đâu ra một con búp bê hay một bộ đồ hàng cả. Ba thường vừa cười vừa trêu em “đáng lẽ Bé Còi nhà ta phải là con trai mới đúng”. Nghịch ngợm là vậy nhưng em cũng chăm học lắm nhé! Ở lớp Bé Còi toàn đứng đầu thôi. Năm ngoái em còn được nhà trường cử đi thi học sinh giỏi môn Văn nữa đấy. Mơ ước lớn nhất của em là được trở thành phi công, lái những chiếc máy bay thật lớn, thật to bay lên bầu trời cao và trong xanh trên kia. Em tin chắc rằng mình sẽ thực hiện được ước mơ đó.



    Xem thêm tại: https://doctailieu.com/doan-van-gioi-thieu-ve-ban-than-em-bang-tieng-viet</p>
  <div>
    <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
      <img src="../Hinh/HONDA/airblade.jpg" alt="">

    </div>
  </div>

  </div>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; MOWO - MOTO WORLD 2020</p>
    </div>
    <!-- /.container -->
  </footer>
</body>

</html>