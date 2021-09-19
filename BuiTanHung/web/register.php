
<?php session_start()?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>form đăng kí</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
    integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<style>
    body{
        background-color: #ccc;
    }

    .form {
        background: cadetblue;
        width: 300px;
        border: 1px solid green;
        padding: 20px;
        margin: 0 auto;
        font-weight: 700px;
    }

    .form input {
        width: 100%;
        padding: 10px 0;
    }
</style>

<body>





<a href="logout.php" >Thoat ra </a>

    <form method="post" action="register_submit.php" class="form">

        <h2>Đăng ký thành viên</h2>

        Username: <input type="text" name="username" value="" required>

        Password: <input type="password" name="password" placeholder="************************************" value="" required />
        <!-- repassword: <input type="password" name="password" value="****************************************" required /> -->



        Email: <input type="email" name="email" value="" required />

        Phone: <input type="text" name="phone" value="" required />

        <!-- <input type="submit" value="Đăng Ký" /> -->
        <button style="margin-top: 15px; margin-left : 170px;" type="submit"  name="dangky"class="btn btn-primary floatval">Đăng Kí</button>
        <?php require 'register_submit.php'; ?>
    </form>

</body>

</html>