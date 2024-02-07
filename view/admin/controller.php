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
                    
                     case '/register':
                        if(isset($_REQUEST['submit']))
                        {
                            $name= $_REQUEST['name'];
                            $address= $_REQUEST['address'];
                            $email= $_REQUEST['email'];
                            $password= $_REQUEST['password'];

                            
                                $data = array(
                                "name" => $name,
                                "email" => $email,
                                "address" => $address,
                                "password" => $password,
                            );
                            $this->insert('users',$data);
                            header('location:login');
                        }
                        include "../../view/user/register.php";
                        break;
                        
                        case '/login':
                            if(isset($_REQUEST['log']))
                            {
                                // $email= $_REQUEST['email'];
                                // $password= $_REQUEST['password'];
                                // $data = array(
                                //     "email" => $email,
                                //     "password" => $password,
                                // );
                                $data = $_REQUEST;
                                $user_detail =    $this->login($data);
        
                                // require_once("view/login.php");
                                // break;
                                // $this->show('users',$data);
                            }
                        
                            include "../../view/user/login.php";
                            break;
    

                case '/userlist':
        
                    // $userdata = $this->show('user');
                    if(isset($_REQUEST['del']))
                    {   
                        $id = $_REQUEST['del'];
                        $this->delete('users',$id);
                        header('location:userlist');
                    }
                    $userdata = $this->show("users");
                    include 'userlist.php';
                    break;
                    
                    case '/updateuser':
                        if(isset($_REQUEST['upd']))
                        {   
                            $id = $_REQUEST['upd'];
                            // echo $id;
                            // $data = $this->showwhere('user',$id);
                        
                            include "updateuser.php";
                        }
                        else if (isset($_REQUEST['updatedata']))
                        {
                            if($_FILES['image']['error'] == 0  )
                            {
                                $image = "images/".time().$_FILES['image']['name'];
                                move_uploaded_file($_FILES['image']['tmp_name'],$image);
                                }
                            else
                            {
                               $image = $_REQUEST["image"];
                            }
                            $data = array(
                                "name"=>$_REQUEST["name"],
                                "email"=>$_REQUEST["email"],
                                "address"=>$_REQUEST["address"],
                                "gender"=>$_REQUEST["gender"],
                                // "hobby"=>$_REQUEST["hobby"],
                                // "password"=>$_REQUEST["password"],
                                "image" => $image 
                         );
                            // $response =$this->update("user",$data ,$_REQUEST["updatedata"]);
                            header("location:userdata");    
                        }
                        break;              
            }
        }
}

$obj = new controller;

?>