<?php
class CategoryController extends BaseController
{  
    public function __construct()
	{
        require('./Model/Database.php');
	}
    public function index(){
        require('./Model/client/UserModel.php');
        $userModel = new UserModel();
        $categorys = [];
        $result= $userModel->display();
        $result2=$userModel->solieu();
        while($row = mysqli_fetch_array($result)):
            array_push($categorys,['id'=>$row['id'],'name'=>$row['name'],
                'content'=>$row['content'], 'image'=>$row['image'],'title'=>$row['title']]);
       endwhile;
       $row2 = mysqli_fetch_array($result2);
       $socanhiem=$tuvong=$khoi=$socatang=Null;
       $socanhiem=$row2['socanhiem'];
       $khoi=$row2['khoi'];
       $tuvong=$row2['tuvong'];
       $socatang=$row2['socatang'];
       return $this->getPath('index',['categorys'=>$categorys],$socanhiem,$khoi,$tuvong,$socatang);
    }
    public function login()
    {
        require('./Views/admin/login.php');
    }
    public function login_admin()
    {  require('./Model/client/UserModel.php');
        $userModel = new UserModel();
        $check= NuLL;
        $level= NuLL;
        $username = $password = NULL;
       if (isset($_POST['login'])) {
        if (empty($_POST['username'])) {
            echo "<script>alert('Cần điền tên đăng nhập')</script>";
        } else {
            $username = $_POST['username'];
        }
        if (empty($_POST['password'])) {
            echo "<script>alert('Cần điền mật khẩu')</script>";
        } else {
            $password =  addslashes($_POST['password']);
            $password= md5(md5($password));
        }
        if($username&&$password)
        {$check=$userModel->login($username, $password);}
      }
      
      if (session_id() === '') 
        {session_start();} 
      setcookie("name", $check, time() + 600, "/"); 
      if($check)
      {   header('Location:./admin');
      }
      else
      {
        require('./Views/admin/login.php');
        $message = "Tài khoản hoặc mật khẩu chưa đúng";
        echo "<script type='text/javascript'>alert('$message');</script>"; 
      }
    }  
    public function account()
    {
        require('./Views/admin/signup.php');
        require('./Model/client/UserModel.php');
        $userModel = new UserModel();
        $username = $password = $fullName = $phone= $email= NULL;
		if (isset($_POST['signup'])) {
			if (empty($_POST['username'])) {
                echo "<script>alert('Cần điền tên đăng nhập')</script>";
			} else {
				$username = $_POST['username'];
			}
			if (empty($_POST['password'])) {
                echo "<script>alert('Cần điền tên mật khẩu')</script>";
			} else {
				$password = md5(md5($_POST['password']));
			}
			if (empty($_POST['name'])) {
                echo "<script>alert('Cần điền họ tên')</script>";
			} else {
				$fullName = $_POST['name'];
			}
            if (empty($_POST['phone'])) {
                echo "<script>alert('Cần điền Phone')</script>";
			} else {
				$phone = $_POST['phone'];
			}
            if (empty($_POST['address'])) {
                echo "<script>alert('Cần điền địa chỉ')</script>";
			} else {
				$email = $_POST['address'];
			}
			if($username&&$password&&$fullName&&$phone&&$email)
            {$userModel->signup($username, $password, $fullName,$phone,$email);}
		}
    } 
    public function signup()
    {
        require('./Views/admin/signup.php');
    }
    public function admin()
    {
        require('./Views/admin/index.php');
    }
    public function bantin()
    {
        require('./Views/header/bantin.php');
    }
    public function chidaochongdich()
    {
        require('./Views/header/chidaochongdich.php');
    }
    public function duphong()
    {
        require('./Views/header/duphong.php');
    }
    public function hd()
    {
        require('./Views/header/hd.php');
    }
    public function hddp()
    {
        require('./Views/header/hddp.php');
    }
    public function thtg()
    {
        require('./Views/header/thtg.php');
    }
    public function tiemchung()
    {
        require('./Views/header/tiemchung.php');
    }
    public function tt()
    {
        require('./Views/header/tt.php');
    }
    
    public function setcookies()
    {setcookie("name", Null, time() + 600, "/"); 
        header('Location:./');
    }
  
  
}

