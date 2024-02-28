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
                    case '/index':           
                    
                    $data = $this->show('books');
                    include "../../view/user/header.php";
                    include "../../view/user/index.php";
                    include "../../view/user/footer.php";
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
                               
                                $data = $_REQUEST;
                                $user_detail =    $this->login($data);
                            }
                            include "../../view/user/login.php";
                            break;
                 
            }
        }
}

$obj = new controller;

?>