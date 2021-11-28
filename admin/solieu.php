<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Bộ Y Tế- Cổng thông tin của bộ y tế</title>
</head>
<style>
.top {
  margin-bottom: 7%;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
.modal-1 li:first-child a {
  -moz-border-radius: 6px 0 0 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px 0 0 6px;
}
.modal-1 li:last-child a {
  -moz-border-radius: 0 6px 6px 0;
  -webkit-border-radius: 0;
  border-radius: 0 6px 6px 0;
}
.modal-1 a {
  border-color: #ddd;
  color: #4285F4;
  background: #fff;
}
.modal-1 a:hover {
  background: #eee;
}
.modal-1 a.active, .modal-1 a:active {
  border-color: #4285F4;
  background: #4285F4;
  color: #fff;
}
</style>
<body>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
$update=$_REQUEST['action']??'index';
if($update=='update')
{
  $message = "cập nhật thành công";
  echo "<script type='text/javascript'>alert('$message');</script>";
}if($update=='delete')
{
  $message = "xóa thành công";
  echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
        <a class="navbar-brand" href="../">Trang chủ</a>
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="#">Quản lí bài viết</a>
          </li>
          <li>
            <a href="">Quản lí số liệu</a>
          </li>
          <li>
          </li>
         
         
        </ul>
        <form class="navbar-form navbar-right" method="POST">
           <a href="../?action=setcookies" class="btn btn-default">Log out</a>
        </form>
        
</nav>
<div class="">
<div class="row">
    <?php if(!isset($_COOKIE['name'])){
       header('Location:../');
    }
    else
    {
     
    }?>
   <div class="container">
 
    <form method='post' action="./solieu.php?action=updatesolieu"> 
    <div class="panel panel-default">
                  <div class="panel-heading">
                        <h3 class="panel-title">Cập nhật số liệu
                        </h3>
    <?php 
	$conn = mysqli_connect('localhost','root','','newscv19') or die('connect failed');
	mysqli_query($conn,'SET NAMES UTF8');
    $sql = "SELECT * FROM solieu ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    ?> 
                  </div>
                  </div>
                  <div class="panel-body">
                  <label for="">Sổ ca nhiễm</label>
                  <input type="text" class="form-control" size="20" name="socanhiem" value="<?php echo $row['socanhiem']; ?>"/>
                  <label for="">Khỏi</label>
                  <input type="text" class="form-control" size="20" name="khoi" value="<?php echo $row['khoi']; ?>"/>
                  <label for="">Tử vong</label>
                 <input type="text" class="form-control" size="20" name="tuvong" value="<?php echo $row['tuvong']; ?>"/>
			    <label for="">Số ca nhiễm mới</label>
                 <input type="text" class="form-control" size="20" name="socatang" value="<?php echo $row['socatang']; ?>"/>
                 <br></br>
                 <input type="submit" value="cập nhật" class="btn btn-large btn-block btn-primary" name="update"></input>
                 </div>       
            </div>
            </div>
	</div>
    </form>
    <?php
    if (isset($_POST['update'])){
        $h2=$_POST['socanhiem'];
        $h4=$_POST['khoi'];
        $h5=$_POST['tuvong'];
        $h6=$_POST['socatang'];
        $sql= "UPDATE solieu SET socanhiem = '$h2', khoi = '$h4', tuvong = '$h5', socatang='$h6' WHERE id = 0";
        $result= $conn->query($sql);
    if($update=='updatesolieu')
    { $message = "cập nhật thành công";
        echo "<script type='text/javascript'>alert('$message');</script>";} 
    }
    $conn->close();
    ?>
</div>
</div>
</body>
</html>


 