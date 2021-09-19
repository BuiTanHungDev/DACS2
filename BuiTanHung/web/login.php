<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'shop') or die('Lỗi kết nối');
mysqli_set_charset($conn, "utf8");
if (isset($_POST['dangnhap'])) {

    $username = $_POST['username'];
    $password =  md5($_POST['password']);
   
    $sl = "select * from member where username='" . $username . "' and password='" . $password . "'";
    $result = mysqli_query($conn, $sl);
    $row = mysqli_fetch_assoc($result);
    $kt = mysqli_num_rows($result);
    if ($kt > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        if (isset($_POST['remember']) and ($_POST['remember'] == "on")) {
            setcookie("username", $username, time() + 120);
            setcookie("password", $password, time() + 120); 
        }
        echo "<script>alert('Đăng nhập thành công.'); location.href='home.php';</script>";
      //  echo "Chào bạn: " . $row['username'] . "<br>Pass của bạn là: " . $row['password'];
    } else {
        echo "<script>alert('tài khoản hoặc mật khẩu không đúng'); location.href='login.php';</script>";
    }
}
// if (isset($_POST['cancel'])) {d
//     echo "<script>location.href='index.php';</script>";

// }
?>

<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> MOWO - MOTO WORLD </title> 
        <link href="../CSS/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../JS/scripts.js"></script>
    </head>
    
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4"> <strong> <h1>ĐĂNG NHẬP</h1> </strong> </h3>
                                    </div>
                                    <div class="card-body">
                                        
                                        <form method="post" >
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress"> TÀI KHOẢN </label>
                                                <input class="form-control py-4" id="username" name="username" type="text"/>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword"> MẬT KHẨU </label>
                                                <input class="form-control py-4" id="password" name="password" type="password"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" name="remember"><label >remember</label>
                                            </div>
                                            <?php
                                                //nếu có session tên dangnhap thì ta thực hiện lệnh dưới
                                                // if(isset($_SESSION['dangnhap']) && $_SESSION['dangnhap'] != NULL)
                                                // {
                                                //     echo '<h4 style="color: red"> '.$_SESSION['dangnhap'];' </h4>';
                                                    
                                                // }
                                            ?>                                              
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">   
                                                <input class="btn btn-primary" type="submit" name="dangnhap" value="Đăng Nhập">
                                                <a class="small" href="#"> Quên mật khẩu ?</a>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"> Copyright &copy; MOWO - MOTO WORLD 2020 </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>