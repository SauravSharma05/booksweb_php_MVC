<?php 

class model
{       
        public $connection;
        public function __construct()
        {
            $this->connection = new mysqli("localhost","root","","booksweb"); 
        }
        public function insert($table, $data)
        {
            $arr = array_keys($data);
            $val = array_values($data);

            $arr1 = implode(",",$arr);
            $val1 = implode("','",$val);

            $sql  = "INSERT INTO $table ($arr1) VALUES ('$val1')";
            // echo $sql;
            $res = $this->connection->query($sql);
            return $res;    

        }
        public function show($table)
        {
            $sql = "SELECT * FROM $table";
            $data = $this->connection->query($sql);
            if($data->num_rows>0)
            {
                while ($datas = mysqli_fetch_object($data)) 
                {
                        $bookdata[] = $datas; 
                }
            }
            return $bookdata;
        }

        public function join_book_cat()
        {
            // SELECT columns  
            // FROM table1   
            // INNER JOIN table2  
            // ON table1.column = table2.column;  

            $sql = "SELECT books.name,books.book_id, books.author,books.price,books.image,books.description, book_cat.cat_name FROM books INNER JOIN book_cat ON books.cat_id = book_cat.cat_id; ";
            
            $data = $this->connection->query($sql);
            if($data->num_rows>0)
            {
                while ($datas = mysqli_fetch_object($data)) 
                {
                        $booksdata[] = $datas; 
                }
            }
            return $booksdata;


        }

        public function delete($table, $id)
        {
            
            $sql = "DELETE FROM $table WHERE book_id = $id";
            $this->connection->query($sql);
        }
        public function showwhere($table,$id)
        {
            $sql = "SELECT * FROM $table where book_id=$id";
            $data = $this->connection->query($sql);
            if($data->num_rows>0)
            {
                while ($datas = mysqli_fetch_object($data)) 
                {
                        $userdata[] = $datas; 
                }
            }
            return $userdata;
        }
        public function update($tbl,$values,$id)
        {
        $SQL = " UPDATE $tbl SET ";
        foreach($values as $key => $value)
        {
            $SQL .= " $key = '$value' , ";
        }
        $SQL = rtrim($SQL," , ");
        $SQL .= " WHERE book_id = $id";
        $sqlex = $this->connection->query($SQL);
}
public function login($data)
{
    if(isset($data['log']))
    {
        $SQL = "SELECT * FROM users WHERE email = '$data[email]' AND password = '$data[password]';";
      $sqlex = $this->connection->query($SQL);
    if($sqlex->num_rows > 0)
    {
          $userdata = $sqlex->fetch_object();
     
        if($userdata->role_as == 1)
        {
            // echo "Admin side";
            header("location:../admin/dashh");
        }
        else
        {
            header("location:index");
        }
    }
    else
    {
        echo "<script> alert('Invalid Username or Password')  </script>";
    }
}
    else
    {
        // echo "inside else";
      }
      return $userdata;
}

}
   


?>