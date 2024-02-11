<?php 
include "model.php";
class controller extends model
{
        public function __construct()
        {
            $url = $_SERVER['PATH_INFO'];
            model::__construct();
            switch ($url) 
            {
                case '/dashh':   
                     include "../../view/admin/index.php";
                     break;
                       
                case '/userlist':                
                    // $userdata = $this->show('user');
                    if(isset($_REQUEST['del']))
                    {   
                        $id = $_REQUEST['del'];
                        $this->delete('users',$id);
                        header('location:userlist');
                    }
                    else if(isset($_REQUEST['update']))
                    {                             
                        header("location:updateuser");    
                        }
                    $userdata = $this->show("users");
                    include 'userlist.php';
                    break;

                    case '/updateuser':
                        if(isset($_REQUEST['update']))
                        {
                            $id = $_REQUEST['update'];    
                            $data = $this->showwhere('users',$id);
                        }
                        if(isset($_REQUEST['updatedata']))
                        {             
                            $id= $_REQUEST['updatedata']; 
                            $data = array(
                                "name"=>$_REQUEST["name"],
                                "email"=>$_REQUEST["email"],
                                "address"=>$_REQUEST["address"],
                            );
                            $response = $this->update("users",$data,$id);
                            header("location:userlist");    
                        }
                        include 'updateuser.php';
                        break;
            }
        }
}
$obj = new controller;
?>