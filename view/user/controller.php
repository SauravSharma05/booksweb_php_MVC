<?php 

include "model.php";
class controller extends model
{
    public function __construct()
    {
            $url = $_SERVER['PATH_INFO'];
            model::__construct();
            session_start();
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
                                $id = $userdata->user_id;
                                
                                if($userdata)
                                {   

                                    $_SESSION['user_id'] = $id;
                                    setcookie ("email",$email,time()+ 3600);
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
                            $price = $data[0]->price;
                            $quantity= $_REQUEST['quantity'];
                            $user_id = $_SESSION['user_id'];

                            
                            
                            $addtocartdata = $this->showwhere('adc',$id);
                            $bookid = $addtocartdata[0]->book_id;
                            $prdqty = $addtocartdata[0]->quantity;
                            $userid = $data[0]->user_id;
                            
                            if($user_id == $userid && $id == $bookid)
                            {
                                $mainqty = $prdqty + $quantity; 

                                $dataa = array(
                                "quantity" => $mainqty,

                                );
                                $this->update('adc',$dataa,$id);
                            }
                            else
                            {

                                $dataa = array(
                                "quantity" => $quantity,
                                "book_id" => $id,
                                "user_id" => $user_id,
                                "price" => $price,
                            );
                            $res = $this->insert('adc',$dataa);
                            if($res)
                            {
                                echo "<script> alert('added to cart successfully') </script>";
                                header('location:cartpage');
                            }
                            }
                            }

                        include 'productpage.php';
                        break;
                        
                        case '/cartpage':
                        //  include "header.php";
                        
                        $cartdata = $this->show('adc');
                        if(isset($_REQUEST['del']))
                        {
                            $id = $_REQUEST['del'];
                            $this->delete('adc',$id);
                            header('location:cartpage');
                            
                        }
                        include 'cartpage.php';
                        break;


                        case '/payment':
                        
                        if(isset($_POST['pay_id']) && isset($_POST['amount']))
                        {
                            $pay_id = $_POST['pay_id'];
                            $amount = $_POST['amount'];
                            $dataa = array(
                                "pay_id" => $pay_id,
                                "amount" => $amount,
                            );

                            $response = $this->insert('payment', $dataa);
                            if($response)
                            {
                                echo "<script>Alert('payment done')</script>";
                            }
                        }
                        break;


                        case '/success':
                        

                        include 'success.php';
                        break;

                        
                 
            }
        }
}

$obj = new controller;

?>