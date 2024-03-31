<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LoginPage.css">
    <title>Document</title>
</head>
<body>
    <form action="/MainMenu/Server/Server2.php" method="POST">
    <div class='UI'>
        <h1>Đăng Nhập</h1>
        <div class='row1'>
            <div class='col1'>Tên đăng nhập:</div>
            <div class='col2'><input type='text' placeholder='Tên đăng nhập' class='txtBox' name='textName'></div>
        </div>
        <div class='row4'>
            <div class='col1'>Mật khẩu:</div>
            <div class='col2'><input type='password' placeholder='pass' class='txtBox' name='pass'></div>
        </div>
        <div class='row3'><a href="" class='col1'>Quên mật khẩu.</a></div>
        <div class='row2'>
            <input type='submit' value='Đăng Nhập' class='button' name='dangnhap'>
            <a href='/MainMenu/Register/RegisterPage.php'><input class='button' type='button' value='Đăng Ký'>
        </div>
    </div>
    </form>
</body>
</html>