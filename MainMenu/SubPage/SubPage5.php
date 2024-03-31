<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SubPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <li><a href="/MainMenu/Favor/Hanhdong.php">Hành Động</a></li>
                            <li><a href="/MainMenu/Favor/Phieuluu.php">Phiêu Lưu</a></li>
                            <li><a href="/MainMenu/Favor/Huyenbi.php">Huyền Bí</a></li>
                            <li><a href="/MainMenu/Favor/Trinhtham.php">Trinh Thám</a></li>
                            <li><a href="/MainMenu/Favor/210.php">210</a></li>
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
    <div class='Middle'>
        <div class='Midbody'>
            <div class='MidHeader'>
                <div class='col1'><img src='/MainMenu/Images/anime5.jpg' class='MidTitleImg'></div>
                <div class='col2'>
                    <h1 class='MidTitleName'>Blue Exorcist</h1>
                    <h3 class='MidSubTitleName'>Blue Exorcist</h3>
                    <h3 class='MidTitleDate'>December 2012</h3>
                    <div class='ratingBar1'>
                        <div class='ratingScore'>0</div>
                        <div class='ratingStar'>
                            <input type='radio' name='rating'>
                            <input type='radio' name='rating'>
                            <input type='radio' name='rating'>
                            <input type='radio' name='rating'>
                            <input type='radio' name='rating'>
                        </div>
                    </div>
                    <div class='ratingBar2'></div>
                    <div class='type'>Thể loại:
                        <a href="">Hành động</a>
                        <a href="">Phiêu lưu</a>
                        <a href="">Huyền Bí</a>
                    </div>
                </div>
            </div>
            <div class='body'>
                <ul class='Tab'>
                    <li class='li'>
                        <input type='radio' class='radio' name='Tabselect' checked><p>Xem phim</p>
                        <div class='TabBox'>
                            <div class='subTabBox1'>
                                <div class='subTabBoxTitle'>Các tập phim</div>
                                <div class='subTabBoxBody'>
                                    <a href='https://www.iq.com/play/lam-hoa-diet-quy-tap-1-1hfjibetxek?lang=vi_vn'><input type='button' value='1' class='EpButton'></a>
                                    <a href='https://www.iq.com/play/lam-hoa-diet-quy-tap-2-2bpvmc5ahd8?lang=vi_vn'><input type='button' value='2' class='EpButton'></a>
                                    <a href='https://www.iq.com/play/lam-hoa-diet-quy-tap-3-2elf49pfsos?lang=vi_vn'><input type='button' value='3' class='EpButton'></a>
                                    <a href='https://www.iq.com/play/lam-hoa-diet-quy-tap-4-bflogo3l5w?lang=vi_vn'><input type='button' value='4' class='EpButton'></a>
                                    <a href='https://www.iq.com/play/lam-hoa-diet-quy-tap-5-1z0xgnfynpk?lang=vi_vn'><input type='button' value='5' class='EpButton'></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class='li'>
                        <input type='radio' class='radio' name='Tabselect'><p>Thông tin</p>
                        <div class='TabBox'>
                            <div class='subTabBox2'>
                                <div class='subTabBoxTitle'>Mô tả</div>
                                <div class='subTabBoxBody'> Bộ phim kể về câu chuyện của Okumura Rin, chàng trai lai được ma quỷ Satan và người đàn bà nhân loại cùng sinh ra. Một hôm Okumura Rin chợt được biết mình là con trai của Santa và cần dùng kiếm Hàng Ma kiểm soát năng lực khi cãi nhau với mục sư nuôi lớn mình Fujimoto Shirou. Lúc đó, ma quỷ đang tấn công tu viện một cách trắng trợn, mục sư Fujimoto bị Satan chiếm hữu thân thể mà tự tử để bảo vệ Rin. Âm mưu của Satan không được Rin tiếp nhận nên Satan muốn dẫn cậu về “Gehenna”. Bởi vậy, nhằm chống lại vận mệnh làm con trai của Satan, trả thù cho cha nuôi mục sư Fujimoto và chứng minh sự tồn tại của mình, Rin quyết tâm trở thành một chuyên gia diệt quỷ xuất sắc. Cậu được giám đốc của Học viện Chân Thập Tự Mephisto·Pheles dẫn về trường và chính thức gia nhập Đoàn Hiệp sĩ Chân Thập Tự, học tri thức diệt quỷ. Nhằm đánh bại cha đẻ Satan, dùng năng lực lam hỏa(ma quỷ) của mình trả thù, Rin bắt đầu hành trình chuyên gia diệt quỷ. Mục tiêu của cậu là: “Đánh Satan một trận.”</div>
                            </div>
                        </div>
                    </li>
                    <li class='li'>
                        <input type='radio' class='radio' name='Tabselect'><p>Đề xuất</p>
                        <div class='TabBox'>
                            <div class='subTabBox3'>
                                <div class='subTabBoxTitle'>Phim cùng thể loại</div>
                                <div class='subTabBoxBody'>
                                    <a href='/MainMenu/SubPage/SubPage4.php'><div class='VideoBox'>
                                        <img src='/MainMenu/Images/anime4.jpg' alt="">
                                        <div class='VideoBoxName'>Solo Leveling</div>
                                    </div></a>
                                    <a href='/MainMenu/SubPage/SubPage7.php'><div class='VideoBox'>
                                        <img src='/MainMenu/Images/anime7.jpg' alt="">
                                        <div class='VideoBoxName'>Black Clover</div>
                                    </div></a>
                                    <a href='/MainMenu/SubPage/SubPage6.php'><div class='VideoBox'>
                                        <img src='/MainMenu/Images/anime6.jpg' alt="">
                                        <div class='VideoBoxName'>Dragon Ball</div>
                                    </div></a>
                                    <a href='/MainMenu/SubPage/SubPage2.php'><div class='VideoBox'>
                                        <img src='/MainMenu/Images/anime2.jpg' alt="">
                                        <div class='VideoBoxName'>One Piece</div>
                                    </div></a>
                                    <a href='/MainMenu/SubPage/SubPage9.php'><div class='VideoBox'>
                                        <img src='/MainMenu/Images/anime9.jpg' alt="">
                                        <div class='VideoBoxName'>Frieren, Funeral Wizard</div>
                                    </div></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class='TabBox1'></div>
            </div>
        </div>
    </div>
    <div class='footer'>
            <div class='subFooter'>
                <div class='col3'>
                    <div><img src="/MainMenu/Images/TitleIcon.png"></div>
                    <div><img src='/MainMenu/Images/logo1.png' class='icon2'></div>
                    <div><img src='/MainMenu/Images/logo2.png'></div>
                </div>

                <div class='col4'>
                    <div href="" class='row1'>Về FPT Play</div>
                    <div href="" class='row2'>Giới thiệu</div>
                    <div href="" class='row2'>Các gói dịch vụ</div>
                    <div href="" class='row2'>Liên hệ</div>
                    <div href="" class='row2'>Trung tâm hỗ trợ</div>
                    <div href="" class='row2'>Thông tin</div>
                </div>

                <div class='col4'>
                    <div href="" class='row1'>Dịch vụ</div>
                    <div href="" class='row2'>Gói DATA</div>
                    <div href="" class='row2'>Quảng cáo</div>
                    <div href="" class='row2'>Mua gói</div>
                    <div href="" class='row2'>Bảo hành</div>
                </div>

                <div class='col4'>
                    <div href="" class='row1'>Quy định</div>
                    <div href="" class='row2'>Điều khoản sử dụng</div>
                    <div href="" class='row2'>Chính sách thanh toán</div>
                    <div href="" class='row2'>Chính sách bảo mật thông tin dữ liệu</div>
                </div>
                <div class='col3'>
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
            <div class='col5'>
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