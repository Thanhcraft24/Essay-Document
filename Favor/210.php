<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FptCartoon</title>
    <link rel="stylesheet" href="Favor.css">
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
                            <li><a href='/MainMenu/Favor/Hanhdong.php'>Hành Động</a></li>
                            <li><a href='/MainMenu/Favor/Phieuluu.php'>Phiêu Lưu</a></li>
                            <li><a href='/MainMenu/Favor/Huyenbi.php'>Huyền Bí</a></li>
                            <li><a href='/MainMenu/Favor/Trinhtham.php'>Trinh Thám</a></li>
                            <li><a href='/MainMenu/Favor/210.php'>210</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <?php
            if (isset($_SESSION['name'])) {
                echo "<ul>
                <li>
                    <div class='HidenAcc'>
                        <img src='/MainMenu/Images/UserIcon.png'>";
                        echo $_SESSION['name'];
                        echo "<ul class='dropDown2'>
                            <li>Thông tin</li>
                            <li><a href='/MainMenu/logout.php'>Đăng Xuất</a></li>
                        </ul>
                    </div>
                </li>
            </ul>";
            } else {
                echo "<a href='/MainMenu/Login/LoginPage.php'><input type='button' value='Đăng nhập' class='button'></a>";
            }
            ?>
        </div>
    </div>
    <div class='middle'>
        <div class='Midbody'>
            <div class='TitleFavor'>
                <div class='Title'>Thể loại 210</div>
            </div>
            <div class='MidFavor'>
                <h1>KHÔNG TÌM THẤY TRANG</h1>
                <h3>Trang bạn đang tìm không hề tồn tại.</h3>
            </div>
        </div>
    </div>
    <div class='footer'>
            <div class='subFooter'>
                <div class='col1'>
                    <div><img src="/MainMenu/Images\TitleIcon.png"></div>
                    <div><img src='/MainMenu/Images/logo1.png' class='icon2'></div>
                    <div><img src='/MainMenu/Images\logo2.png'></div>
                </div>

                <div class='col2'>
                    <div href="" class='row1'>Về FPT Play</div>
                    <div href="" class='row2'>Giới thiệu</div>
                    <div href="" class='row2'>Các gói dịch vụ</div>
                    <div href="" class='row2'>Liên hệ</div>
                    <div href="" class='row2'>Trung tâm hỗ trợ</div>
                    <div href="" class='row2'>Thông tin</div>
                </div>

                <div class='col2'>
                    <div href="" class='row1'>Dịch vụ</div>
                    <div href="" class='row2'>Gói DATA</div>
                    <div href="" class='row2'>Quảng cáo</div>
                    <div href="" class='row2'>Mua gói</div>
                    <div href="" class='row2'>Bảo hành</div>
                </div>

                <div class='col2'>
                    <div href="" class='row1'>Quy định</div>
                    <div href="" class='row2'>Điều khoản sử dụng</div>
                    <div href="" class='row2'>Chính sách thanh toán</div>
                    <div href="" class='row2'>Chính sách bảo mật thông tin dữ liệu</div>
                </div>
                <div class='col1'>
                    <div class='row3'>
                        <img src='/MainMenu/Images/PhoneIcon.png' class='icon'>
                        19006600
                    </div>
                    <div class='row3'>
                        <img src='/MainMenu/Images/MailIcon.png' class='mailIcon'>
                        hotrofptplay.com
                    </div>
                    <div class='row3'>Theo dõi chúng tôi trên:</div>
                    <div class='row3'>
                        <button class='buttonIcon'><img src='/MainMenu/Images/fbkIcon.png'></button>
                        <button class='buttonIcon'><img src='/MainMenu/Images/ytbIcon.png'></button>
                    </div>
                </div>
            </div>
        <div class='subFooter2'>
            <div class='col3'>
                <div class='row4'>Công ty Cổ phần Viễn Thông FPT - Người đại diện: Ông Hoàng Việt Anh. Trụ sở: Tầng 2, Tòa nhà FPT Cầu Giấy, Số 17 Phố Duy Tân, Phường Dịch Vọng Hậu, Quận Cầu Giấy, TP.Hà Nội.</div>
                <div class='row4'>Số giấy chứng nhận đăng ký kinh doanh: 0101778163 do Sở Kế Hoạch Đầu Tư Thành Phố Hà Nội cấp vào ngày 28/07/2005.</div>
                <div class='row4'>Giấy phép cung cấp Dịch vụ Phát thanh, Truyền hình trên mạng Internet cấp lần đầu ngày 18/11/2016, cấp lại theo Giấy phép số 99/GP-BTTTT ngày 27/03/2023.</div>
            </div>
            <div class='deviceIcon'>
                <img src='/MainMenu/Images/DevicePlatformIcon.png'>
            </div>
        </div>
    </div>

</body>
</html>