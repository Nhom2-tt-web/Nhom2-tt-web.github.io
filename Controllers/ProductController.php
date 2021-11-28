<?php
class ProductController extends BaseController
{   public function __construct()
	{
        require('./Model/Database.php');
       
	}
    public function index(){
        require('./Model/client/UserModel.php');
        $userModel = new UserModel();
        $id=$_GET['id'];
        $categorys = [];
        $result= $userModel->chitietnews($id);
        while($row = mysqli_fetch_array($result)):
            array_push($categorys,['id'=>$row['id'],'name'=>$row['name'],
            'content'=>$row['content'], 'image'=>$row['image'],'title'=>$row['title']]);
       endwhile;
       $check=NULL;
        return $this->getPath('chitiet',['categorys'=>$categorys],NULL,NULL,NULL,Null);
    } 
    public function show(){
        echo __METHOD__;
    }
}