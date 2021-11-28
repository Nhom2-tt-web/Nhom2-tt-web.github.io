<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <link rel="stylesheet" href="./Views/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="./Views/css/style.css"/>
    <title>Bộ Y Tế- Cổng thông tin của bộ y tế</title>
  </head>
  <style>
      .ms:hover{
    border-radius: 5px;
    color: #3e7ab9;
    background-color: white ; 
}

  </style>
  <body background="./Views/img/bg.jpg">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <script src="./Views/js/bootstrap.min.js" ></script>
   
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
                    <li ><a class="ms" href="#">Bản Tin Covid-19</a></li>
                    <li><a  class="ms" href="#">Chỉ đạo chống dịch</a></li>
                    <li><a  class="ms" href="#">Dự phòng - Điều trị</a></li>
                    <li><a  class="ms" href="#">Vaccine-Tiêm chủng</a></li>
                    <li><a  class="ms" href="#">Hoạt động địa phương</a></li>
                    <li><a  class="ms" href="#">Hướng dẫn</a></li>
                    <li><a  class="ms" href="#">Tin tức</a></li>
                    <li><a  class="ms" href="#">Tình hình thế giới</a></li>
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
        <br></br><br></br>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <section className="loginContainer">
                
                
           <div class="panel panel-primary">
                 <div class="panel-heading">
                       <h3 class="panel-title">Đăng Nhập</h3>
                 </div>
                 <div class="panel-body">
                  <form method="POST" action="./?action=login_admin" >     
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  type="text" class="form-control" name="username" placeholder="Email" />
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input  type="password" class="form-control" name="password" placeholder="Password" />
                 </div>
                 <br>
                 <div class="input-group ">
                    
                    <input  type="submit" class="btn btn-large btn-block btn-primary" name="login" value="Đăng Nhập" style="width:405px;" />
                 </div>
                 </form>
                 <div class="container-login100-form-btn m-t-32">
						<i>Do you have account?<a href="./?action=signup">Signup</a></i>
					</div>
                 </div>
           </div>
   </section>    
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                
                </div>
        </div>
        
 
  </body>
</html>
