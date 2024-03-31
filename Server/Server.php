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
    $Name = $_POST["textName"];
    $Pass1 = $_POST["pass1"];
    $Pass2 = $_POST["pass2"];
    $Email = $_POST["email"];
    
    $connect = mysqli_connect("localhost","root","");
    mysqli_select_db($connect,"qltk");
    mysqli_set_charset($connect,"utf8");
    $sql="SELECT * FROM taikhoan WHERE tentk = '".$Name."' AND email = '".$Email."';";
    $kq = mysqli_query($connect,$sql);
    $row = mysqli_fetch_row($kq);

    if ($Name == null && $Pass1 == null && $Pass2 == null && $Email == null) {
        echo "<div class='UI'>
        <h1>Vui lòng điền đầy đủ thông tin</h1>
        <h3>Đăng ký lại. <a href='/MainMenu/Register/RegisterPage.php'>Đăng Ký</a></h3>
        </div>";
        exit();
    } elseif ($Name == null) {
        echo "<div class='UI'>
            <h1>Điền tên vào</h1>
            <h3>Đăng ký lại. <a href='/MainMenu/Register/RegisterPage.php'>Đăng Ký</a></h3>
        </div>";
        exit();
    } elseif ($Pass1 == null) {
        echo "<div class='UI'>
            <h1>Điền mật khẩu</h1>
            <h3>Đăng ký lại. <a href='/MainMenu/Register/RegisterPage.php'>Đăng Ký</a></h3>
        </div>";
        exit();
    } elseif ($Pass2 == null) {
        echo "<div class='UI'>
            <h1>Nhập lại mật khẩu</h1>
            <h3>Đăng ký lại. <a href='/MainMenu/Register/RegisterPage.php'>Đăng Ký</a></h3>
        </div>";
        exit();
    } elseif ($Email == null) {
        echo "<div class='UI'>
            <h1>Điền email vào</h1>
            <h3>Đăng ký lại. <a href='/MainMenu/Register/RegisterPage.php'>Đăng Ký</a></h3>
        </div>";
        exit();
    } elseif ($Pass1 != $Pass2) {
        echo "<div class='UI'>
            <h1>Mật khẩu không khớp</h1>
            <h3>Đăng ký lại. <a href='/MainMenu/Register/RegisterPage.php'>Đăng Ký</a></h3>
        </div>";
        exit();
    } else {
        echo "<div class='UI'>
            <h1>Đăng ký thành công!</h1>
            <h4>Lưu ý: Tài khoản bạn đã đăng ký phải nhớ 100% tên và mật khẩu, nếu gặp các vấn đề gì về tài khoản bạn đã tạo. Chúng tôi sẽ không chịu trách nhiệm cho lỗi sai nhỏ của bạn. Xin cám ơn :)) </h4>
            <h3>Bắt đầu đăng nhập. <a href='/MainMenu/Login/LoginPage.php'>Đăng Nhập</a></h3>
        </div>";
        $sql2 = "INSERT INTO taikhoan(tentk, pass, email) VALUES ('".$Name."','".$Pass1."','".$Email."');";
        mysqli_query($connect,$sql2);
    }
    mysqli_close($connect);
?>
</body>
</html>