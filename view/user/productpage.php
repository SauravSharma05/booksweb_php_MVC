<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .products{
            margin: 90px auto;
            width: 80%;
        }
    </style>
</head>
<body>

    <?php foreach ($data as $value) { 
        ?>
    
    <div class="products">

        <div class="card" style="width: 18rem;border: 2px solid black;padding:5px;">
            <img src="<?php echo $value->image ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $value->name ?></h5>
                <p class="card-text"><?php echo $value->description ?></p>
                <label for="quantity">quantity</label><input type="number" min="1" max="5" name="quantity" id="">
                <form action="">
                    <button type="submit" name="adc" value="<?php echo $value->book_id ?>">add to cart</button>
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>