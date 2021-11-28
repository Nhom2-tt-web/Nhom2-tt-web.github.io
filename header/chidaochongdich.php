<!DOCTYPE html>
<html>
<head>
	<title>Bộ Y tế - Cổng thông tin Bộ Y tế về đại dịch COVID-19</title>
	<link rel="stylesheet" type="text/css" href="./Views/header/css/style.css"/>
    <link rel="stylesheet" href="./Views/css/bootstrap.min.css"/>
</head>
<style>
    .ms:hover{
    border-radius: 5px;
    color: #3e7ab9;
    background-color: white ; 
}
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
		<div class="main home-page">
			<div class="statistical">
				<div class="container">
					<div class="box-top">
						<div class="nav">
							<ul>
								<div class="title">
								<li><a href="">Chỉ đạo chống dịch</a></li>
								</div>
							</ul>
                        </div>
                    </div>
				</div>		
		    </div>
	    </div>

			<div class="focus">
				<div class="container">
					<div class="content">
            <div class="content-l">
                <img src="https://covid19.qltns.mediacdn.vn/thumb_w/740/354844073405468672/2021/11/23/avatar1637684711984-16376847129681863207147-0-72-315-576-crop-16376848108481080615141.jpg" alt="">
                <div class="text-content">
                    <h3>
                    Nếu COVID-19 gia tăng, năng lực cung cấp oxy y tế của Việt Nam có đáp ứng nhu cầu điều trị?
                    </h3>
                    <br>
                    <p >Thứ trưởng Bộ Y tế Trần Văn Thuấn ngày 23/11 cho biết năng lực cung cấp oxy y tế của Việt Nam hiện đáp ứng đủ nhu cầu điều trị. Nếu trong tình huống dịch COVID-19 bùng phát mạnh thì sẽ chuyển công năng từ sản xuất oxy công nghiệp sang oxy y tế</p>
                </div>
            </div>
            <div class="content-r">
                <div class="title">
                    <h3>Diễn biến dịch</h3>
                </div>
                <div class="wp-content-r">
                    <div class="cont-item">
                        <h4>
                            THÔNG BÁO VỀ 5.376 CA MẮC MỚI
                        </h4>
                        <p>
                            Tính từ 17h ngày 02/10 đến 17h ngày 03/10, trên Hệ thống Quốc gia quản lý ca bệnh COVID-19
                            ghi nhận 5.376 ca nhiễm mới, trong đó 09 ca nhập cảnh và 5.367 ca ghi nhận trong nước (giảm
                            110 ca so với ngày trước đó) tại 39 tỉnh, thành phố (có 2.674 ca trong cộng đồng).
                            Các tỉnh, thành phố ghi nhận ca bệnh như sau:
                            TP. Hồ Chí Minh (2.461), Bình Dương (1.283), Đồng Nai (824),
                            An Giang (147), Long An (85), Kiên Giang (75), Bình Thuận (73),
                            Tây Ninh (54), Khánh Hòa (50), Hà Nam (39), Đồng Tháp (35),
                            Cần Thơ (33), Cà Mau (24), Hậu Giang (20), Quảng Bình (19)
                            , Đắk Lắk (17), Quảng Trị (15), Tiền Giang (13), Bà Rịa -
                            Vũng Tàu (13), Ninh Thuận (12), Bình Phước (12), Nghệ An
                            (11), Bình Định (8 ), Đắk Nông (6), Phú Yên (5), Bến Tre
                            (5), Vĩnh Long (4), Bạc Liêu (4), Hà Nội (4), Quảng Ngãi
                            (3), Hà Tĩnh (3), Lâm Đồng (2), Trà Vinh (2), Bắc Giang
                            (1), Gia Lai (1), Kon Tum (1), Đà Nẵng (1), Thừa Thiên
                            Huế (1), Phú Thọ (1).
                        </p>
                    </div>
                    <div class="cont-item">
                        <h4>
                            THÔNG BÁO VỀ 5.376 CA MẮC MỚI
                        </h4>
                        <p>
                            Tính từ 17h ngày 02/10 đến 17h ngày 03/10, trên Hệ thống Quốc gia quản lý ca bệnh COVID-19
                            ghi nhận 5.376 ca nhiễm mới, trong đó 09 ca nhập cảnh và 5.367 ca ghi nhận trong nước (giảm
                            110 ca so với ngày trước đó) tại 39 tỉnh, thành phố (có 2.674 ca trong cộng đồng).
                            Các tỉnh, thành phố ghi nhận ca bệnh như sau:
                            TP. Hồ Chí Minh (2.461), Bình Dương (1.283), Đồng Nai (824),
                            An Giang (147), Long An (85), Kiên Giang (75), Bình Thuận (73),
                            Tây Ninh (54), Khánh Hòa (50), Hà Nam (39), Đồng Tháp (35),
                            Cần Thơ (33), Cà Mau (24), Hậu Giang (20), Quảng Bình (19)
                            , Đắk Lắk (17), Quảng Trị (15), Tiền Giang (13), Bà Rịa -
                            Vũng Tàu (13), Ninh Thuận (12), Bình Phước (12), Nghệ An
                            (11), Bình Định (8 ), Đắk Nông (6), Phú Yên (5), Bến Tre
                            (5), Vĩnh Long (4), Bạc Liêu (4), Hà Nội (4), Quảng Ngãi
                            (3), Hà Tĩnh (3), Lâm Đồng (2), Trà Vinh (2), Bắc Giang
                            (1), Gia Lai (1), Kon Tum (1), Đà Nẵng (1), Thừa Thiên
                            Huế (1), Phú Thọ (1).
                        </p>
                    </div>
                </div>
                <a href="#">Xem thêm</a>
            </div>
			</div>

            <div class="info-menu-ngang">
                  <div class="info" style="border-bottom: 1px solid #e8e8e8;">
                      <img src="./Views/header/img/xn1.jpg">
                      <h4> Ngày 18/10: Có 3.168 ca mắc COVID-19 tại TP HCM, Sóc Trăng và 43 tỉnh</h4>
                  </div>
                  <div class="info" style="border-bottom: 1px solid #e8e8e8;">
                      <img src="./Views/header/img/xn2.jpg">
                      <h4> Chiều 18/10: Đã tiêm trên 64,1 triệu liều vaccine phòng COVID-19; </h4>
                  </div>
                  <div class="info" style="border-bottom: 1px solid #e8e8e8;">
                      <img src="./Views/header/img/xn3.jpg">
                      <h4> Sáng 18/10: Chỉ còn 3.413 bệnh nhân COVID-19 nặng; </h4>
                  </div>
            </div>
			
            <div class="info-menu-doc">
                <div class="info-doc">
                      <img src="./Views/header/img/mn2.jpg">
                      <div class="info-text">
                        <h4>Sáng 13/10: Chỉ còn 4.299 ca COVID-19 nặng; 1,1 triệu liều vaccine AstraZeneca do Hàn Quốc hỗ trợ dự kiến về Việt Nam hôm nay</h4>
                        <p>SKĐS - Đến nay hơn 783.200 bệnh nhân COVID-19 ở nước ta đã khỏi bệnh, trong số các bệnh nhân đang điều trị hiện chỉ còn 4.299 ca nặng; 1,1 triệu liều vaccine AstraZeneca do Hàn Quốc hỗ trợ dự kiến về...</p>
                      </div>                    
                  </div>
                  <div class="info-doc"> 
                      <img src="./Views/header/img/mn3.jpg">
                      <div class="info-text">
                        <h4>Sáng 12/10: Gần 784.800 bệnh nhân COVID-19 đã khỏi; Bắc Ninh khẩn tìm người liên quan đến 16 địa điểm</h4>
                        <p>SKĐS - Đến nay Việt Nam có 843.281 ca mắc COVID-19, trong đó gần 784.800 bệnh nhân đã được chữa khỏi; Bắc Ninh khẩn tìm người liên quan đến 16 địa điểm; Tất cả các quận, huyện và TP Thủ Đức ở TP...</p>
                      </div>   
                  </div>
                  <div class="info-doc">
                      <img src="./Views/header/img/mn4.jpg">
                      <div class="info-text">
                        <h4>Sáng 17/10: Hơn 790.500 bệnh nhân COVID-19 đã khỏi; Trên 75% người trên 18 tuổi ở TP HCM đã tiêm mũi 2 vaccine</h4>
                        <p>SKĐS - Đến nay Việt Nam có 860.860 ca mắc COVID-19, trong đó hơn 790.500 bệnh nhân COVID-19 đã khỏi; Trên 75% người trên 18 tuổi ở TP HCM đã tiêm mũi 2 vaccine; Từ ngày 17/10, Phú Yên phòng chống...</p>
                      </div>   
                  </div>
                  <div class="info-doc">
                      <img src="./Views/header/img/mn5.jpg">
                      <div class="info-text">
                        <h4>Sáng 11/10: Chỉ còn 835 ca COVID-19 nặng thở máy và can thiệp ECMO; 12 tỉnh đã 14 ngày chưa có F0 trong cộng đồng</h4>
                        <p>SKĐS - Đến nay Việt Nam có 839.662 ca mắc COVID-19, hơn 782.000 trong số này đã khỏi bệnh. Về các bệnh nhân đang điều trị còn 5.014 ca nặng. 19 địa phương đã 14 ngày không có F0 thứ phát, trong cộng đồng.</p>
                      </div>   
                  </div>
                  <div class="info-doc">
                      <img src="./Views/header/img/mn1.jpg">
                      <div class="info-text">
                        <h4>Sáng 10/10: Chỉ còn 9% bệnh nhân COVID-19 đang điều trị; Hơn 70 % người trên 18 tuổi ở TP HCM tiêm đủ 2 mũi vaccine</h4>
                        <p>SKĐS - Đến nay đã có 760.801 bệnh nhân COVID-19 ở nước ta khỏi bệnh, chiếm 91% tổng số ca mắc COVID-19; Hơn 70 % người trên 18 tuổi ở TP HCM tiêm đủ 2 mũi vaccine;</p>
                      </div>   
                  </div>
            </div>

            <br>

			<div class="home-partner">
				<div class="container">
					<div class="partner-title">
						 <div class="title">
                    			<h2>Liên kết</h2>
                		 </div>
                		 <div class="partner-content">
                		 <div class="swiper-wrapper">
                		 	<div class="swiper-slide" style="width: 250px;margin-right: 20px;">
                		 		<img src="./Views/header/img/lk1.jpg">
                		 	</div>
                		 	<div class="swiper-slide"style="width: 250px;margin-right: 20px;">
                		 		<img src="./Views/header/img/lk2.jpg">
                		 	</div>
                		 	<div class="swiper-slide"style="width: 250px;margin-right: 20px;">
                		 		<img src="./Views/header/img/lk3.jpg">
                		 	</div>
                		 	<div class="swiper-slide"style="width: 250px;margin-right: 20px;">
                		 		<img src="./Views/header/img/lk4.jpg">
                		 	</div>
                		 	<div class="swiper-slide"style="width: 250px;margin-right: 20px;">
                		 		<img src="./Views/header/img/lk5.jpg">
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
							<img src="./Views/header/img/logo.png">
						</div>
						<div class="footer-name">
                        <p class="text">QUẢN LÝ NỘI DUNG: BÁO SỨC KHỎE VÀ ĐỜI SỐNG <span class="h-mb">-</span><span> CƠ QUAN NGÔN LUẬN CỦA BỘ Y TẾ</span></p>
                        <p class="text">Địa chỉ: Số 138A Giảng Võ - Quận Ba Đình - TP. Hà Nội</p>
                        <p class="text">Đường dây nóng: 19009095</p>
                        <p class="text">Email: covid19@suckhoedoisong.vn</p>
                       </div>
					</div>
					<div class="footer-right">
						<img src="./Views/header/img/footer1.jpg">
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