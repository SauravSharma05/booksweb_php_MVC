<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cartpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">cart_id</th>
      <th scope="col">price</th>
      <th scope="col">book_id</th>
      <th scope="col">user_id</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($cartdata as $value) { 
        ?>
    <tr>
      <td><?php echo $value->cart_id ?></td>
      <td><?php echo $value->price ?></td>
      <td><?php echo $value->book_id ?></td>
      <td><?php echo $value->user_id ?></td>
    </tr>
    
    <?php } ?>

  </tbody>
</table>
</body>
</html>