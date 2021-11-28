<?php
 $Masach= $_GET['id'];
 $conn=mysqli_connect('localhost','root','','newscv19') or die ('connect failed');
 
 $sql = "DELETE FROM listnews Where id = $Masach ";
 $query=mysqli_query($conn,$sql);
 if($query)
 {
     header('Location:../index.php?action=delete');
 }
 else  {echo "lỗi";}
?>