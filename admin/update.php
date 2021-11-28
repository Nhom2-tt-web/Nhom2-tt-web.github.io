<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="./Uneti-2.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Bộ Y Tế- Cổng thông tin của bộ y tế</title>
</head>
<style>
</style>
<body>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <a class="navbar-brand container" href="#">Bộ Y Tế- Cổng thông tin của bộ y tế</a>
    <ul class="nav navbar-nav">
    </ul>
</nav>
<div class="container">
<?php 
    $Masach=$_GET['id'];    
    echo "<form action='../setupdate.php/?id=$Masach' method='post'>";   
    echo  '<div class="panel panel-default">
                  <div class="panel-heading">
                        <h3 class="panel-title">Cập nhật tin tức
                        <a href="../index.php" > <i class="glyphicon glyphicon-remove navbar-right">&nbsp</i> </a>
                        </h3>
                        
                  </div>
                  </div>
                  <div class="panel-body">
                  <label for="">Loại tin tức</label>
                  <input type="text" class="form-control" size="20" name="name"/>
                  <label for="">Nội dung</label>
                  <input type="text" class="form-control" size="20" name="content"/>
                  <label for="">title</label>
                 <input type="text" class="form-control" size="20" name="title"/>
			         	 <label for="">Ảnh</label>
                 <input type="text" class="form-control" size="20" name="image" value="./Views/img/bt3.png"/>
                 <br></br>
                 <input type="submit" value="cập nhật" class="btn btn-large btn-block btn-primary"></input>
                 
                 
                 </div>       
            </div>
            </div>
	</div>
    </form>' ?> 
</div>
</body>
</html>


 