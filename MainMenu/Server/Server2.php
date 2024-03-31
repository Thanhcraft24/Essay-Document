<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Servefile.css">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    $Name = $_POST["textName"];
    $Pass = $_POST["pass"];

    $connect = mysqli_connect("localhost","root","");
    mysqli_select_db($connect,"qltk");
    $sql = "SELECT * FROM taikhoan WHERE tentk = '".$Name."' AND pass = '".$Pass."';";
    $kq = mysqli_query($connect,$sql);
    $row = mysqli_fetch_row($kq);
    
    
    if ($Name == null && $Pass == null) {
        echo "<div class='UI'>
            <h1>Vui lòng điền thông tin đăng nhập</h1>
            <h3>Đăng nhập lại. <a href='/MainMenu/Login/LoginPage.php'>Đăng Nhập</a></h3>
            <h3>Chưa có tài khoản. <a href='/MainMenu/Register/RegisterPage.php'>Đăng Ký</a></h3>
        </div>";
    } elseif ($Name != $row[0]) {
        echo "<div class='UI'>
            <h1>Tên đăng nhập hoặc mật khẩu không chính xác</h1>
            <h3>Đăng nhập lại. <a href='/MainMenu/Login/LoginPage.php'>Đăng Nhập</a></h3>
            <h3>Chưa có tài khoản. <a href='/MainMenu/Register/RegisterPage.php'>Đăng Ký</a></h3>
        </div>";
        exit();
    } elseif ($Pass != $row[1]) {
        echo "<div class='UI'>
            <h1>Tên đăng nhập hoặc mật khẩu không chính xác</h1>
            <h3>Đăng nhập lại. <a href='/MainMenu/Login/LoginPage.php'>Đăng Nhập</a></h3>
            <h3>Chưa có tài khoản. <a href='/MainMenu/Register/RegisterPage.php'>Đăng Ký</a></h3>
        </div>";
        exit();
    } else {
        echo "<div class='UI'>
            <h1>Đăng nhập thành công!</h1>
            <h3><a href='/MainMenu/MainMenu.php'>Vào trang chủ</a><h3>
        </div>";
        $_SESSION['name'] = $row[0];
    }
?>
</body>
</html>
