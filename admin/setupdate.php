<?php
 $Ma= $_GET['id'];
 $h2=$_POST['name'];
 $h4=$_POST['content'];
 $h5=$_POST['image'];
 $h6=$_POST['title'];
 $conn=mysqli_connect('localhost','root','','newscv19') or die ('connect failed');
 $sql= "UPDATE listnews SET name = '$h2', content = '$h4', image = '$h5', title='$h6' WHERE id = $Ma";
 $result= $conn->query($sql);
 if($result)
    {header('Location:../index.php?action=update');}
 else  
 {echo "lỗi";}
 $conn->close();
?>