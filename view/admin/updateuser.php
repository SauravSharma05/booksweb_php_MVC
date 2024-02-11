<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        fieldset{
            width: 50%;
            margin: 20px auto;
        }
        img{
            width: 150px;
            height: 150px;
        }
        input{
            width: 50%;
            border: 2px solid red;
            text-align: center;
            height: 50px;
        }
        .boxa{
            display: flex;
            align-items: center;
            flex-direction: column;
            gap: 5px;
        }
        a{
            text-decoration: none;
            background-color: red;
            color: whitesmoke;
            font-size: 25px;
            margin-left: 600px;
            
        }
        .rad{
            height: 20px;
            width: 20px;
        }
    </style>
</head>
<body>
            <hr>
                <a href="dashh">BACK TO HOME</a>
            <hr>
        <fieldset>
            <legend>update user form</legend>
            <form action="" enctype="multipart/form-data" method="post">

                <?php 
                if(isset($data))
                {   
                    // echo "<pre>";
                    // print_r($data);
                    // echo "</pre>";
                    foreach ($data as $value) 
                    {?>
                    
                    <div class="boxa">
                        
                       NAME : <input type="text" value="<?php echo $value->name ?>" name="name" id="">
                        <br>
                       EMAIL : <input type="email" value="<?php echo $value->email ?>" name="email" id="">
                        <br>
                        ADDRESS : <textarea  name="address" id="address" cols="30" rows="10" ><?php echo $value->address ?></textarea>
                        <br>
                        <button name="updatedata" value="<?php echo $value->user_id  ?>">Update data</button>
                                            
                    </div>
                    <?php }}?>
            </form>
        </fieldset>


</body>
</html>