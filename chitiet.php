<!DOCTYPE html>
<html>
<head>
	<title>Bộ Y tế - Cổng thông tin Bộ Y tế về đại dịch COVID-19</title>
	<link rel="stylesheet" type="text/css" href="./Views/css/style.css"/>
	<link rel="stylesheet" href="./Views/css/bootstrap.min.css"/>
</head>
<style>
.box-item:hover{
    border:0.2px solid #f8f9fa;
    border-radius: 5px;
    padding: 5px;
    color: #3e7ab9;
    background-color: #f8f9fa ;
}
.video_right_item:hover{
    border:0.2px solid #f8f9fa;
    border-radius: 5px;
    padding: 5px;
    color: #3e7ab9;
    background-color: #f8f9fa ;}
.nav-item:hover{
    border:0.2px solid #f8f9fa;
    border-radius: 5px;
    padding: 5px;
    color: #3e7ab9;
    background-color: #f8f9fa ;}
.ms:hover{
    border-radius: 5px;
    color: #3e7ab9;
    background-color: white ; 
}
.tintuc_item:hover{
    border:0.2px solid #f8f9fa;
    border-radius: 5px;
    padding: 5px;
    color: #3e7ab9;
    background-color: #f8f9fa ;
}
.content-tinhhinh:hover{
   
    color: #3e7ab9;
    background-color: #f8f9fa ;}

</style>
<body>
<div class="header">
			<div class="top">
				<div class="top-flex">
					<div id="date"></div>
				</div>
				<div class="top-right">
					<div class="search">
						<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="26" height="26"viewBox="0 0 172 172"
   						style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#666666"><path d="M74.53333,17.2c-31.59642,0 -57.33333,25.73692 -57.33333,57.33333c0,31.59642 25.73692,57.33333 57.33333,57.33333c13.73998,0 26.35834,-4.87915 36.24766,-12.97839l34.23203,34.23203c1.43802,1.49778 3.5734,2.10113 5.5826,1.57735c2.0092,-0.52378 3.57826,-2.09284 4.10204,-4.10204c0.52378,-2.0092 -0.07957,-4.14458 -1.57735,-5.5826l-34.23203,-34.23203c8.09924,-9.88932 12.97839,-22.50768 12.97839,-36.24766c0,-31.59642 -25.73692,-57.33333 -57.33333,-57.33333zM74.53333,28.66667c25.39937,0 45.86667,20.4673 45.86667,45.86667c0,25.39937 -20.46729,45.86667 -45.86667,45.86667c-25.39937,0 -45.86667,-20.46729 -45.86667,-45.86667c0,-25.39937 20.4673,-45.86667 45.86667,-45.86667z"></path></g></g></svg>
					</div>
					<div class="hotline">
                        <a href="tel:19009095" rel="nofollow" title="đường dây nóng" class="header-hl">
                            Đường dây nóng: 19009095
                        </a>
                    </div>
					</div>
				</div>
			</div>
			<div class="middle">
				<div class="container">
					<div class="header-middle">
                		<img src="./Views/img/logo.png" alt="" class="header-logo">
                		<div class="header-slg">CỔNG THÔNG TIN CỦA BỘ Y TẾ VỀ ĐẠI DỊCH COVID-19</div>
                    </div>
                </div>
			</div>
			<div class="bot">
				<div class="container">
					<ul>
					
				    <li><a>&nbsp &nbsp&nbsp</a></li>
                    <li><a href="./" class="ms" >
					<i class="glyphicon glyphicon-home"></i></a></li>
                    <li ><a class="ms" href="./?action=bantin">Bản Tin Covid-19</a></li>
                    <li><a  class="ms" href="./?action=chidaochongdich">Chỉ đạo chống dịch</a></li>
                    <li><a  class="ms" href="./?action=duphong">Dự phòng - Điều trị</a></li>
                    <li><a  class="ms" href="./?action=tiemchung">Vaccine-Tiêm chủng</a></li>
                    <li><a  class="ms" href="./?action=hddp">Hoạt động địa phương</a></li>
                    <li><a  class="ms" href="./?action=hd">Hướng dẫn</a></li>
                    <li><a  class="ms" href="./?action=tt">Tin tức</a></li>
                    <li><a  class="ms" href="./?action=thtg">Tình hình thế giới</a></li>
					<?php
					if(!isset($_COOKIE['name']))
					{
						echo'<li><a  class="ms" href="./?action=login">Đăng bài</a></li>';
					}
					else
					{
						
						echo'<li><a  class="ms" href="./admin">Đăng bài</a></li>';
					}
					?>
                </ul>
				</div>
			</div>
		</div>
			<div class="focus">
				<div class="container">
					<div class="content">
            <div class="content-l">
                <?php
                echo ' <img src="'.$categorys[0]['image'].'" alt="" style="margin-bottom: 20px;">
                <div class="text-content" style="padding-left: 15px;">
                    <h3>
                    '.$categorys[0]['title'].'
                    </h3>
                    <p> '.$categorys[0]['content'].'</p>
                </div>';
               
                ?>
            </div>
        </div>  
			<div class="category"></div>
			<div class="category"></div>
			<div class="category"></div>
			<div class="section-new"></div>
			<div class="category"></div>
			<div class="list-new"></div>
			<div class="home-partner">
				<div class="container">
					<div class="partner-title">
						 <div class="title">
                    			<h2>Liên kết</h2>
                		 </div>
                		 <div class="partner-content">
                		 <div class="swiper-wrapper">
                		 	<div class="swiper-slide" style="width: 250px;margin-right: 20px;">
                		 		<img src="./Views/img/lk1.jpg">
                		 	</div>
                		 	<div class="swiper-slide"style="width: 250px;margin-right: 20px;">
                		 		<img src="./Views/img/lk2.jpg">
                		 	</div>
                		 	<div class="swiper-slide"style="width: 250px;margin-right: 20px;">
                		 		<img src="./Views/img/lk3.jpg">
                		 	</div>
                		 	<div class="swiper-slide"style="width: 250px;margin-right: 20px;">
                		 		<img src="./Views/img/lk4.jpg">
                		 	</div>
                		 	<div class="swiper-slide"style="width: 250px;margin-right: 20px;">
                		 		<img src="./Views/img/lk5.jpg">
                		 	</div>
                		 </div>
                		</div>
					</div>
				</div>
			</div>
		 </div>
        </div>
		<div class="footer">
			<div class="container">
				<div class="footer-flex">
					<div class="footer-left">
						<div class="logo">
							<img src="./Views/img/logo.png">
						</div>
						<div class="footer-name">
                        <p class="text">QUẢN LÝ NỘI DUNG: BÁO SỨC KHỎE VÀ ĐỜI SỐNG <span class="h-mb">-</span><span> CƠ QUAN NGÔN LUẬN CỦA BỘ Y TẾ</span></p>
                        <p class="text">Địa chỉ: Số 138A Giảng Võ - Quận Ba Đình - TP. Hà Nội</p>
                        <p class="text">Đường dây nóng: 19009095</p>
                        <p class="text">Email: covid19@suckhoedoisong.vn</p>
                       </div>
					</div>
					<div class="footer-right">
						<img src="./Views/img/lk5.jpg">
					</div>
				</div>
			</div>
		</div>
	 <script>
        var date = document.getElementById("date");
        var d = new Date();
        var ngay = ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"];
        var thang = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"];
        document.getElementById("date").innerHTML = ngay[d.getDay()] + ", " + d.getDate() + "/" + thang[d.getMonth()]
            + "/" + d.getFullYear();
    </script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <script src="./Views/js/bootstrap.min.js" ></script>
</body>
</html>