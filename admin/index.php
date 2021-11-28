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
            <a href="./solieu.php">Quản lí số liệu</a>
          </li>
          <li>
          </li>
         
         
        </ul>
        <form class="navbar-form navbar-right" action="./?action=search" method="POST">
           <div class="form-group">
           <input type="text" class="form-control" placeholder="Search" name="ndsearch">
           </div>
           <input type="submit" class="btn btn-default" value="tìm kiếm" name="search"></input>
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
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" >
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 navbar-fixed-bottom top ">
    <form name="" method="post">   
    <div class="panel panel-default ">
                  <div class="panel-heading">
                  <h3 class="panel-title">Điền nội dung tin tức</h3>
                  </div>
                  <div class="panel-body">
				           <label for="">Mã bài viết</label>
                  <input type="text" class="form-control" size="20" name="id"/>
                  <label for="">Loại tin tức</label>
                  <input type="text" class="form-control" size="20" name="name"/>
                  <label for="">Nội dung</label>
                  <input type="text" class="form-control" size="20" name="content"/>
                  <label for="">title</label>
                 <input type="text" class="form-control" size="20" name="title"/>
			         	 <label for="">Ảnh</label>
                 <input type="text" class="form-control" size="20" name="image" value="./Views/img/bt3.png"/>
                </div>
				&nbsp &nbsp &nbsp
				<input name ="add" type="submit" value="Thêm mới" class="btn btn-default">
                <input name="reset" type="reset" value="&nbsp Nhập lại &nbsp" class="btn btn-default">
                <br><br/>
            </div>
            <?php 
			$conn=mysqli_connect('localhost','root','','newscv19') or die ('connect failed');
               mysqli_query($conn, 'set name utf8');
			if(isset($_POST['add']))
			{
				$h1=$_POST['id'];
				$h2=$_POST['name'];
				$h4=$_POST['content'];
				$h5=$_POST['image'];
				$h6=$_POST['title'];
				$sql="INSERT INTO listnews VALUES ('$h1','$h2','$h4','$h5','$h6')";				
				if($h1!=null)
				{
					$query=mysqli_query($conn,$sql);
					if($query)
                    {
							$message = "Đã thêm thành công";
							echo "<script type='text/javascript'>alert('$message');</script>";
					}
					else {
						$message = "Mã tin tức đã tồn tại";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}				
				}
				else{
					$message = "Hãy nhập lại mã tin tức";
						echo "<script type='text/javascript'>alert('$message');</script>";
				}
			}
		 ?>
      </form>
    </div>
    </div>
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    <?php 
	$conn = mysqli_connect('localhost','root','','newscv19') or die('connect failed');
	mysqli_query($conn,'SET NAMES UTF8');?>
		<?php
    	$sql = "SELECT * FROM listnews ";
			$result = mysqli_query($conn,$sql);
      $number_of_result = mysqli_num_rows($result);
      if (!isset ($_GET['page']) ) {

        $page = 1;
        
      } else {
        
        $page = $_GET['page'];
        
      }
        $results_per_page = 6;
        $page_first_result = ($page-1) * $results_per_page;
        $number_of_page = ceil ($number_of_result / $results_per_page);
        if($update=='search')
        {
          $id=$_POST['ndsearch'];
          $query = "SELECT * FROM listnews where id = $id ";
        }
        else{
          $query =" SELECT * FROM listnews LIMIT ".$page_first_result.' , '. $results_per_page;
        }
        $result2 = mysqli_query($conn, $query);
	    	while($row = mysqli_fetch_array($result2)): ?>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="thumbnail">
            <img  alt="" src=<?php echo '.'.$row['image'] ?> style="min-height:180px;"/>
            <div class="caption">
                <p>
                    Mã tin tức : <?php echo $row['id'] ?>
                  <br></br> loại tin tức : <?php echo $row['name'] ?>
                  <br></br>
                  <a href='./update.php/?id="<?php echo $row['id']?>"' type="button" class="btn btn-info" > Cập nhập </a>
                  <a href='./delete.php/?id="<?php echo $row['id']?>"' class="btn btn-danger">&nbsp xóa &nbsp</a>
                </p>
            </div>
          </div>
          </div>
		 <?php endwhile; ?>
     <ul class="pagination modal-2" style="margin-left:44%">
  <?php
  for($page = 1; $page<= $number_of_page; $page++) {

    echo ' <li><a href = "./?page=' . $page . '">' . $page . '</a></li>';
   
    }
  
  ?>
</ul>
    </div>
  
</div>

</div>
</div>
</body>
</html>


 