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
            $this->connection->query($sql);
        }
        public function show($table)
        {
            $sql = "SELECT * FROM $table";
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
        public function delete($table, $id)
        {
            
            $sql = "DELETE FROM $table WHERE user_id = $id";
            $this->connection->query($sql);
        }
        public function showwhere($table,$id)
        {
            $sql = "SELECT * FROM $table where user_id=$id";
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
        $SQL .= " WHERE id = $id";
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
            echo "Admin side";
            header("location:admin-dashboard");
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
}

}
   


?>