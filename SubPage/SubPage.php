<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SubPage.css">
    <title>Document</title>
</head>
<body>
<div class='heading'>
        <div class='searchMenu'>
            <a href="/MainMenu/MainMenu.php"><img src='/MainMenu/Images/TitleIcon.png' class='titleIcon'></a>
            <div class='search'>
                <img src='/MainMenu/Images/SearchIcon.png' class='searchIcon'>
                <input type='search' placeholder='Tên phim ...' class='search-input'>
            </div>
            <ul>
                <li>
                    <div class='menu'>
                        Thể Loại
                        <img src='/MainMenu/Images/ArrowIcon.png' class='arrowIcon'>
                        <ul class='dropDown'>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>210</li>
                        </ul>
                    </div>
                </li>
            </ul>
            <a href='/MainMenu/Login/LoginPage.php'><input type='button' value='Đăng nhập' class='button'></a>
        </div>
    </div>
    <div class='Middle'>
        <div class='Midbody'>
            <div class='MidHeader'>
                <div class='col1'><img src='./TitleImg/download.png' class='MidTitleImg'></div>
                <div class='col2'>
                    <h1 class='MidTitleName'>Example</h1>
                    <h3 class='MidSubTitleName'>Example</h3>
                    <h3 class='MidTitleDate'>Date</h3>
                    <div class='ratingBar1'>
                        <div class='ratingStar'>
                            <input type='radio' name='rating' class=''>
                            <input type='radio' name='rating' class=''>
                            <input type='radio' name='rating' class=''>
                            <input type='radio' name='rating' class=''>
                            <input type='radio' name='rating' class=''>
                        </div>
                    </div>
                    <div class='ratingBar2'></div>
                    <div class='type'>Thể loại:
                        <a href="">Hành động</a>
                        <a href="">Vui nhộn</a>
                    </div>
                </div>
            </div>
            <div class='body'>
                <a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ'><input type='button' value='Xem phim' class='button2'></a>
                <input type='button' value='Thông tin' class='button2'>
            </div>
        </div>
    </div>
</body>
</html>