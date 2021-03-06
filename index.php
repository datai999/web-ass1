<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Int House Building</title>
    <link rel="icon" href="./img/logo.ico" sizes="32x32" />
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="navbar">
        <a href="#" class="home button">
            <b>INT House Building </b> 
            <?php  
            if(isset($_SESSION['login_user'])){
                echo "Welcome ". $login_session; 
            }?>
        </a>
        <a href="#contact" class="button">
            Liên hệ
        </a>
        <a href="#about" class="button">
            Giới thiệu
        </a>
        <a href="#projects" class="button">
            Dự án
        </a>
        <button><a href = "logout.php">Sign Out</a></button>
    </div>
    <div id="navbar_mobile">
        <div id="unactive_navbar">
            <a href="#" class="home button" onclick="myFunctionForHome()">
                <b>INT</b> Building
            </a>
            <a href="javascript:void(0);" class="button" onclick="myFunction()">
                <i id="fa-bars" class="fa fa-bars"></i>
                <i id="fa-times" class="fa fa-times" style="display: none;"></i>
            </a>
        </div>
        <div id="active_navbar">
            <a href="#projects" class="button" onclick="myFunction()">
                Dự án
            </a>
            <a href="#about" class="button" onclick="myFunction()">
                Giới thiệu
            </a>
            <a href="#contact" class="button" onclick="myFunction()">
                Liên hệ
            </a>
        </div>
    </div>
    <div class="main_content">
        <div class="top_content">
            <img src="./img/architect.jpg" alt="architect" class="main_picture">
        </div>
        <div id="projects">
            <div class="sub_title">
                <h2>Dự án</h2>
            </div>
            <div class="projects_content">
                <div class="sub_content">
                    <img src="./img/nha1.jpg" alt="house1" class="sub_picture">
                    <div class="sub_text">
                        <span>Mùa xuân</span>
                    </div>
                    <div class="prices">
                        <span>100tr.VND</span>
                    </div>
                </div>
                <div class="sub_content">
                    <img src="./img/nha2.jpg" alt="house1" class="sub_picture">
                    <div class="sub_text">
                        <span>Mùa hè</span>
                    </div>
                    <div class="prices">
                        <span>100tr.VND</span>
                    </div>
                </div>
                <div class="sub_content">
                    <img src="./img/nha3.jpg" alt="house1" class="sub_picture">
                    <div class="sub_text">
                        <span>Mùa thu</span>
                    </div>
                    <div class="prices">
                        <span>100tr.VND</span>
                    </div>
                </div>
                <div class="sub_content">
                    <img src="./img/nha4.jpg" alt="house1" class="sub_picture">
                    <div class="sub_text">
                        <span>Mùa đông</span>
                    </div>
                    <div class="prices">
                        <span>100tr.VND</span>
                    </div>
                </div>
                <div class="sub_content">
                    <img src="./img/nha5.jpg" alt="house1" class="sub_picture">
                    <div class="sub_text">
                        <span>Châu á</span>
                    </div>
                    <div class="prices">
                        <span>100tr.VND</span>
                    </div>
                </div>
                <div class="sub_content">
                    <img src="./img/nha6.jpg" alt="house1" class="sub_picture">
                    <div class="sub_text">
                        <span>Châu mỹ</span>
                    </div>
                    <div class="prices">
                        <span>100tr.VND</span>
                    </div>
                </div>
                <div class="sub_content">
                    <img src="./img/nha7.jpg" alt="house1" class="sub_picture">
                    <div class="sub_text">
                        <span>Châu âu</span>
                    </div>
                    <div class="prices">
                        <span>100tr.VND</span>
                    </div>
                </div>
                <div class="sub_content">
                    <img src="./img/nha8.jpg" alt="house1" class="sub_picture">
                    <div class="sub_text">
                        <span>Châu đại dương</span>
                    </div>
                    <div class="prices">
                        <span>100tr.VND</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="about">
            <div class="sub_title">
                <h2>Giới thiệu</h2>
                <h4>CHÀO MỪNG BẠN ĐẾN VỚI NHÀ ĐẸP SÀI GÒN</h4>
                <p>Hãy để chúng tôi chào đón bạn bằng một câu chuyện mộc mạc về sự khởi nghiệp khiêm tốn của chúng tôi vào những ngày trước khi về căn nhà NHÀ ĐẸP SÀI GÒN của năm 2005 về trước. Như mọi thương hiệu và công ty tên tuổi khác, chúng tôi tồn
                    tại nhờ tuân thủ những nguyên tắc cơ bản trong kinh doanh, đạo đức nghề nghiệp, tôn trọng khách hàng và sự hợp pháp.</p>

                <p>Khởi đầu tuy nhỏ bé nhưng chúng tôi ấp ủ một hoài bão lớn. Với tầm nhìn là sáng tạo ra những giải pháp và dịch vụ chuyên nghiệp có thể mang đến/giúp cải thiện cuộc sống, cũng như hoạt động kinh doanh của khách hàng. Các dịch vụ này phải
                    thật sự đáp ứng – thoả mãn được nhu cầu thực tế.</p>
            </div>
            <div class="projects_content">
                <div class="sub_content">
                    <img src="./img/team1.jpg" alt="team1" class="sub_picture" >
                    <h3>Nguyễn Tâm Đức</h3>
                    <h4>CEO & Founder</h4>
                    <a href="mailto:abc@example.com" class="button about">Liên hệ</a>
                </div>
                <div class="sub_content">
                    <img src="./img/team2.jfif" alt="team2" class="sub_picture" >
                    <h3>Lê Xuân Bắc</h3>
                    <h4>Kiến trúc sư</h4>
                    <a href="mailto:abc@example.com" class="button about">Liên hệ</a>
                </div>
                <div class="sub_content">
                    <img src="./img/team3.jpg" alt="team3" class="sub_picture" >
                    <h3>Robert Pattinson</h3>
                    <h4>Kiến trúc sư</h4>
                    <a href="mailto:abc@example.com" class="button about">Liên hệ</a>
                </div>
                <div class="sub_content">
                    <img src="./img/team4.jfif" alt="team4" class="sub_picture" >
                    <h3>Chiba Takeru</h3>
                    <h4>Kiến trúc sư</h4>
                    <a href="mailto:abc@example.com" class="button about">Liên hệ</a>
                </div>

            </div>
        </div>
        <div id="contact">
            <div class="sub_title">
                <h2>Liên hệ</h2>
                <p>Hãy liên hệ và nói về căn nhà mong ước của bạn.</p>
                <form action="/index.html" method="POST">
                    <input type="text" id="name" name="name" placeholder="Name">
                    <input type="text" id="email" name="email" placeholder="Email">
                    <input type="text" id="subject" name="subject" placeholder="Subject">
                    <input type="text" id="comment" name="comment" placeholder="Comment">
                    <select>
                        <option value="HoChiMinh">HoChiMinh</option>
                        <option value="Danang">Danang</option>
                        <option value="Hanoi">Hanoi</option>
                    </select>
                    <input type="submit" value="Gửi">

                    <p>Gặp chúng tôi ở đâu?</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31354.705739052497!2d106.747735!3d10.785387!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317525dfec79e4e1%3A0x77b53e09e96c8eee!2zTm92YWxhbmQgVGhlIFN1biBBdmVudWUsIDI4IMSQxrDhu51uZyBNYWkgQ2jDrSBUaOG7jSwgQW4gUGjDuiwgUXXhuq1uIDIsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sus!4v1597373886063!5m2!1svi!2sus"
                        height="450" frameborder="0" style="border:0;width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </form>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("active_navbar");
            if (x.style.height === "147px") {
                document.getElementById("fa-bars").style.display = "unset";
                document.getElementById("fa-times").style.display = "none";
                x.style.height = "0px";
            } else {
                x.style.height = "147px";
                document.getElementById("fa-bars").style.display = "none";
                document.getElementById("fa-times").style.display = "unset";
            }
        }

        function myFunctionForHome() {
            var x = document.getElementById("active_navbar");
            if (x.style.height === "147px") {
                document.getElementById("fa-bars").style.display = "unset";
                document.getElementById("fa-times").style.display = "none";
                x.style.height = "0px";
            }
        }
    </script>

    <footer>
        <p class="footer">Copyright © 2020 Powered by <a style="color: gray; text-decoration: none;" href="#" target="_blank">?</a></p>
    </footer>
</body>

</html>