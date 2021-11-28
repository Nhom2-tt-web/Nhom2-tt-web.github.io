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
		<div class="main home-page">
			<div class="statistical">
				<div class="container">
					<div class="box-top">
						<div class="nav">
							<ul>
								<div class="title">
								<li><a href="">Việt Nam</a></li>
								<li><a href="" class="world">Thế Giới</a></li>
								</div>
							</ul>
						</div>
						<div class="nav-content">
							<div class="list">
								<div class="item">
									<p class="text">SỐ CA NHIỄM</p>
									<p class="value"><?php echo $socanhiem ?></p>
									<p class="note">Hôm nay
										<span> +<?php echo $socatang ?></span>
									</p>
								</div>
								<div class="item">
									<p class="text">KHỎI</p>
									<p class="value"><?php echo $khoi ?></p>
									
									</p>
								</div>
								<div class="item">
									<p class="text">TỬ VONG</p>
									<p class="value"><?php echo $tuvong ?></p>
								
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="focus">
				<div class="container">
					<div class="content">
            <div class="content-l">
            <?php
                echo '
                <a class="text-content" style="text-decoration: none" href="./?controllers=Product&&action=index&&id='.$categorys[0]['id'].'">
                <img src="'.$categorys[0]['image'].'" style="padding-left: 15px;">
                    <h3>
                    '.$categorys[0]['title'].'
                    </h3>
                    <p> '.$categorys[0]['content'].'</p>
                </a>';
               
                ?>
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
			<div class="juncture">
				<div class="container">
					<div class="juncture-nav">
						<div class="title">
                    			<h2>Tình hình dịch cả nước</h2>
                		 </div>
					</div>
					<div class="juncture-flex">
						<div class="box-juncture" style="margin-bottom: 50px">
							<div class="table-left">
								<div class="row head">
									<span class="city">Tỉnh/TP</span>
									<span class="total">Tổng số ca</span>
									<span class="daynow">Hôm nay</span>
									<span class="die">Tử vong</span>
								</div>
								<div class="tbody">
									<div class="row">
										<span class="city">TP. Hồ Chí Minh</span>
										<span class="total">416.702</span>
										<span class="daynow red">+907</span>
										<span class="die">16.287</span>
									</div>
									<div class="row">
									<span class="city">Bình Dương</span>
									<span class="total">226.297</span>
									<span class="daynow red">+500</span>
									<span class="die">2.307</span>
								    </div>
								    <div class="row">
								    	<span class="city">Long An</span>
								    	<span class="total">33.829</span>
								    	<span class="daynow red">+51</span>
								    	<span class="die">459</span>
								    </div>
								    <div class="row">
								    	<span class="city">Tiền Giang</span>
								    	<span class="total">14.859</span>
								    	<span class="daynow red">+79</span>
								    	<span class="die">379</span>
								    </div>
								    <div class="row">
								    	<span class="city">Tây Ninh</span>
								    	<span class="total">9.357</span>
								    	<span class="daynow red">+104</span>
								    	<span class="die">146</span>
								    </div>
								    <div class="row">
								    	<span class="city">Đồng Tháp</span>
								    	<span class="total">9.254</span>
								    	<span class="daynow red">+65</span>
								    	<span class="die">221</span>
								    </div>
								    <div class="row">
								    	<span class="city">Khánh Hòa</span>
								    	<span class="total">8.675</span>
								    	<span class="daynow red">+38</span>
								    	<span class="die">89</span>
								    </div>
								    <div class="row">
								    	<span class="city">An Giang</span>
								    	<span class="total">7.847</span>
								    	<span class="daynow red">+134</span>
								    	<span class="die">103</span>
								    </div>
								    <div class="row">
								    	<span class="city">An Giang</span>
								    	<span class="total">7.847</span>
								    	<span class="daynow red">+134</span>
								    	<span class="die">103</span>
								    </div>
								    <div class="row">
								    	<span class="city">An Giang</span>
								    	<span class="total">7.847</span>
								    	<span class="daynow red">+134</span>
								    	<span class="die">103</span>
								    </div>
								    <div class="row">
								    	<span class="city">An Giang</span>
								    	<span class="total">7.847</span>
								    	<span class="daynow red">+134</span>
								    	<span class="die">103</span>
								    </div>
								</div>
							</div>
						</div>
						<div class="box-juncture"></div>
					</div>
				</div>
			</div>
			<div class="section-new">
				<div class="container">
					<div class="sn-flex">
						<div class="box-category-left">
							 <div class="title">
                    			<h2>Chỉ đạo chống dịch</h2>
                			 </div>
                			 <div class="list-new">
                			 <?php $cdcd=0;
                             for($i=0;$i<count($categorys);$i++)
                             {if($categorys[$i]['name']=='cdcd'&&$cdcd<3)
                                {echo'<a style="text-decoration: none" href="./?controllers=Product&&action=index&&id='.$categorys[$i]['id'].'" class="box-item" >
                                    <img src="'.$categorys[$i]['image'].'">
                                    <div class="content-item">
                                        <h3>'.$categorys[$i]['title'].'</h3>
                                       <p>'.$categorys[$i]['content'].'</p>
                                    </div>
                                </a>';$cdcd++;}
                             }
                             ?>	
                			</div>
						</div>
                        <div class="box-category-right">
							<div class="title">
                    			<h2>Bản tin Covid-19</h2>
                			 </div>
                			 <div class="list-new">
                             <?php $btcv=0;
                             for($i=0;$i<count($categorys);$i++)
                             {if($categorys[$i]['name']=='btcv'&&$btcv<3)
                                {echo'<a style="text-decoration: none" href="./?controllers=Product&&action=index&&id='.$categorys[$i]['id'].'" class="box-item" >
                                    <img src="'.$categorys[$i]['image'].'">
                                    <div class="content-item">
                                        <h3>'.$categorys[$i]['title'].'</h3>
                                       <p>'.$categorys[$i]['content'].'</p>
                                    </div>
                                </a>';$btcv++;}
                             }
                             ?>	
                			</div>
                         </div>
					</div>
					
				</div>
			</div>
			<div class="juncture"></div>

					<div class="video">
						  
					 <div class="video_title">
						<div class="title ">
							<h2> Video </h2>
						 </div>
					 </div>
					 <div class="video_content">
							<div class="video_left">
								<video class="video_left_video"   controls>
									<source src="./Views/video/Bộ Y tế - Cổng thông tin của Bộ Y tế về đại dịch COVID-19.mp4">
									
								</video>
					
								<h3>6 biện pháp đảm bảo thích ứng an toàn, linh hoạt, kiểm soát hiệu quả dịch COVID-19</h3>
								<p>Trong hướng dẫn tạm thời chuyên môn y tế thực hiện Nghị quyết số 128/NQ-CP của Chính phủ, Bộ Y tế đưa ra 6 biện pháp chuyên môn y tế mà các tỉnh, thành phố trực thuộc Trung ương cần có kế hoạch triển khai và thực hiện để đảm bảo...</p>
							
							</div>
							<div class="video_right">
						 <div class="video_right_row" > 
                            <?php $vdr=0;
                             for($i=0;$i<count($categorys);$i++)
                             {if($categorys[$i]['name']=='vdr'&&$vdr<4)
                                {echo'<a style="text-decoration: none" href="./?controllers=Product&&action=index&&id='.$categorys[$i]['id'].'" class="video_right_item" > 
                                    <img width="270px" class="video_right_item-img" src="'.$categorys[$i]['image'].'" >
                                    <h3>'.$categorys[$i]['title'].'</h3>
                           </a>  ';$vdr++;}
                             }
                             ?>	
						 </div>
							</div>
					</div>
				</div>
				
    
					<div class="juncture"></div>
			<div class="section-new">
				<div class="container">
					<div class="sn-flex">
						<div class="nav-category-left">
							 <div class="title">
                    			<h2>Hướng dẫn </h2>
                			 </div>
                			 <div class="list-new">
                             <?php $hd=0;
                             for($i=0;$i<count($categorys);$i++)
                             {if($categorys[$i]['name']=='hd'&&$hd<3)
                                {echo'<a style="text-decoration: none" href="./?controllers=Product&&action=index&&id='.$categorys[$i]['id'].'" class="nav-item" >
                                    <img src="'.$categorys[$i]['image'].'">
                                    <div class="content-item">
                                        <h3>'.$categorys[$i]['title'].'</h3>
                                       <p>'.$categorys[$i]['content'].'</p>
                                    </div>
                                </a>';$hd++;}
                             }
                             ?>	
						</div>
                    </div> 
						<div class="nav-category-right">
							<div class="title">
                    			<h2>Hoạt động địa phương</h2>
                			 </div>
                			 <div class="list-new">
                             <?php $hddp=0;
                             for($i=0;$i<count($categorys);$i++)
                             {if($categorys[$i]['name']=='hddp'&&$hddp<3)
                                {echo'<a style="text-decoration: none" href="./?controllers=Product&&action=index&&id='.$categorys[$i]['id'].'" class="nav-item" >
                                    <img src="'.$categorys[$i]['image'].'">
                                    <div class="content-item">
                                        <h3>'.$categorys[$i]['title'].'</h3>
                                       <p>'.$categorys[$i]['content'].'</p>
                                    </div>
                                </a>';$hddp++;}
                             }
                             ?>	
                			 </div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="container1" >
				<div class="tinhhinh">
					<div class="tinhhinh-left">
						<div class="title-tinhhinh">
							<div class="title">
                    			<h2>Tình hình thế giới</h2>
                			 </div>
						</div>
						<div class="content-left">
							<li><a href=""><img src="./Views/img/vaccin.png"/></a></li>
							<h2>Thái Lan đặt mục tiêu tiêm chủng đầy đủ vaccine cho học sinh từ 12 -18 tuổi</h2>
							<p>Theo phóng viên TTXVN tại Thái Lan, các trường học ở thủ đô Bangkok đang chuẩn 
							   bị mở cửa cho học kỳ thứ 2 của năm học này vào tháng tới, trong khi khoảng 88% 
							   học sinh trung học phổ thông đăng ký tiêm phòng đã được tiêm...
							</p>
						</div>
					</div>
					<div class="tinhhinh-right">
                    <?php $thtg=0;
                             for($i=0;$i<count($categorys);$i++)
                             {if($categorys[$i]['name']=='thtg'&&$thtg<3)
                                {echo'<div class="content-tinhhinh">
                                    <ul>
                                        <li><a  style="text-decoration: none" href="./?controllers=Product&&action=index&&id='.$categorys[$i]['id'].'"><img src="'.$categorys[$i]['image'].'" /></a></li>
                                        <li><a  style="text-decoration: none" href="./?controllers=Product&&action=index&&id='.$categorys[$i]['id'].'">
                                                <h3>'.$categorys[$i]['content'].'
                                                </h3>
                                            </a>
                                        </li>
                                    </ul>
                                </div>';
							$thtg++;}
                             }
                             ?>	
					</div>
					
				</div>
				
			</div>
			
			</div>
			
			</div>
			<div class="tintuc">
				<div class="title">
					<h2>Tin tức </h2>
				 </div>
				<div class="row">
                <?php $tt=0;
                             for($i=0;$i<count($categorys);$i++)
                             {if($categorys[$i]['name']=='tt'&&$tt<8)
                                {echo'<a style="text-decoration: none" href="./?controllers=Product&&action=index&&id='.$categorys[$i]['id'].'" class="tintuc_item">
                                    <img class="tintuc_item-img"  src="'.$categorys[$i]['image'].'" alt="">	
                                    <p>'.$categorys[$i]['content'].'</p>				
                                </a>';
							$tt++;
							} 
                             }
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