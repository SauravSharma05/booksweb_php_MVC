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
                     include "../../view/admin/index.php";
                     break;
                       
                case '/userlist':                
                    // $userdata = $this->show('user');     //debugging
                    if(isset($_REQUEST['del']))             //delete user data
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
                case '/booklist':                
                    // $userdata = $this->show('user');     //debugging
                    if(isset($_REQUEST['del']))             //delete user data
                    {   
                        $id = $_REQUEST['del'];
                        $this->delete('books',$id);
                        header('location:booklist');
                    }
                    else if(isset($_REQUEST['update']))     // work in progress
                    {                             
                        header("location:updateuser");    
                        }
                    $booksdata = $this->show("books");
                    include 'booklist.php';
                    break;

                    case '/addbook':

                        if(isset($_REQUEST['submit']))
                        {
                            
                            $file = $_FILES['image']['tmp_name'];
                            // C:\xampp\htdocs\booksweb\booksweb_php_MVC\assets\userside\images
                            $loc = "../../assets/userside/images/".time().$_FILES['image']['name'];
                            move_uploaded_file($file,$loc);

                            $name= $_REQUEST['name'];
                            $price= $_REQUEST['price'];
                            $description= $_REQUEST['description'];
                            $author= $_REQUEST['author'];

                                $data = array(
                                "name" => $name,
                                "price" => $price,
                                "description" => $description,
                                "author" => $author,
                                "image" => $loc,
                            );
                            $added = $this->insert('books',$data);
                            if($added)
                            {
                               echo "<script> alert('book added successfully') </script>";
                            }
                            // header('location:dashh');
                        }
                        include "../../view/admin/addbooks.php";
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
                            $response = $this->update("users",$data,$id);               //update user data
                            header("location:userlist");    
                        }
                        include 'updateuser.php';
                        break;
            }
        }
}
$obj = new controller;
?>