<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="RegisterPage.css">
    <title>Document</title>
</head>
<body>
    <form action="/MainMenu/Server/Server.php" method="POST">
    <div class='UI'>
        <h1>Đăng Ký</h1>
        <div class='row1'>
            <div class='col1'>Họ và Tên:</div>
            <div class='col2'><input type='text' placeholder='Họ Tên' class='txtBox' name='textName'></div>
        </div>
        <div class='row1'>
            <div class='col1'>Tạo mật khẩu:</div>
            <div class='col2'><input type='password' placeholder='pass' class='txtBox' name='pass1'></div>
        </div>
        <div class='row1'>
            <div class='col1'>Nhập lại mật khẩu:</div>
            <div class='col2'><input type='password' placeholder='pass' class='txtBox' name='pass2'></div>
        </div>
        <div class='row1'>
            <div class='col1'>Địa chỉ Email:</div>
            <div class='col2'><input type='text' placeholder='Địa chỉ Email' class='txtBox' name='email'></div>
        </div>
            <div class='row2'><input type='submit' value='Đang Ký' name='dangky' class='button'></div>
        <div class='row3'><h3>Đã có tài khoản. <a href='/MainMenu/Login/LoginPage.php'>Đăng nhập</a>.</h3></div>
    </div>
    </form>
</body>
</html>