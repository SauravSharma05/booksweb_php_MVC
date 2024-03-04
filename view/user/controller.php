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
                    
                    // $data = $this->show('books');
                    $booksdata = $this->join_book_cat();
                    
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
                                $email = $_REQUEST['email'];
                                $data = $_REQUEST;
                                $userdata =    $this->login($data);
                                // echo "<pre>";
                                // print_r($userdata);
                                // exit;

                                // $data = $this->showwhere('users',$id);
                                // if($user_detail)
                                {   

                                    // $_SESSION['user_id'] = $user_id;
                                    // setcookie ("email",$email,time()+ 3600);
                                }

                            }
                            include "../../view/user/login.php";
                            break;

                        case '/productpage':
                        
                        if(isset($_REQUEST['sub']))
                        {
                            $id = $_REQUEST['sub'];
                            // echo $id;
                            $data = $this->showwhere('books',$id);
                        }
                        if(isset($_REQUEST['adc']))
                        {
                            $id = $_REQUEST['adc'];
                           $data = $this->showwhere('books',$id);
                            
                            $quantity= $_REQUEST['quantity'];
                            
                                    $data = array(
                                    "quantity" => $quantity,
                                    "bool_id" => $id,
                                );
                                // $this->insert('adc',$data);
                                // header('location:productpage');
                            }
                            // echo "<pre>";
                            // print_r($data);
                            // exit;
                        

                        include 'productpage.php';
                        break;
                 
            }
        }
}

$obj = new controller;

?>