<?php

class UserModel extends Database{
	protected $db;

	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}

	public function signup($username, $password, $fullName,$phone,$address)
	{	
		$sql = "INSERT INTO account (username, passwd, full_name, phone, address)
							VALUES ('$username', '$password', '$fullName','$phone' ,'$address')";
		$query=mysqli_query($this->db->conn,$sql);
		if($query)
		{
				$message = "Đã đăng ký thành công";
				echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else {
			$message = "Tài khoản đã tồn tại";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}				
		
	}
	public function add($username,$id, $ngayxp,$ngayve,$gia)
	{	
		$sql = "INSERT INTO giohang (username, id, ngayxp, ngayve, gia)
							VALUES ('$username', '$id', '$ngayxp', '$ngayve', '$gia')";
		$query=mysqli_query($this->db->conn,$sql);
		if($query)
		{
				$message = "Đã  thêm thành công";
				echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else {
			$message = "lỗi";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}				
		
	}
	public function login($username, $password)
	{	
		$sql = "SELECT * FROM account  ";
		$query=mysqli_query($this->db->conn,$sql);
	    if( mysqli_num_rows($query)!=0)
		   { while($row = mysqli_fetch_array($query)):
                if($row['username']==$username&&$row['passwd']==$password)
			       {return $row['username'];} 
          endwhile;}
		else
		   {return  NULL;}
		
	}
	public function checkLevel($username)
	{	  if($username)
		{
		$sql = "SELECT * FROM account where username= $username  ";
		$query=mysqli_query($this->db->conn,$sql);
		    while($row = mysqli_fetch_array($query)):
			       {return $row['level'];} 
          endwhile;}
		else
		   {return  NULL;}
		
	}

	public function  display() {
      
		$query ="SELECT * FROM listnews ";
        $result = mysqli_query($this->db->conn, $query);
       
	    return $result;
	}
	public function  chitietnews($id) {
		$query = "SELECT * FROM listnews Where id = $id ";
        $result2 = mysqli_query($this->db->conn, $query);
	    return $result2;
	}
	public function  solieu() {
		$query = "SELECT * FROM solieu ";
        $result2 = mysqli_query($this->db->conn, $query);
	    return $result2;
	}
}