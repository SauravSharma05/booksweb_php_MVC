<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cartpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <?php

    foreach ($cartdata as $value) {
        $price = $value->price;
        $quantity = $value->quantity;
        $subtotal = $price * $quantity;
        $arr[] = $subtotal;
    }
    ?>
    <h1><a href="index">HOME</a></h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">cart_id</th>
                <th scope="col">price</th>
                <th scope="col">book_id</th>
                <th scope="col">user_id</th>
                <th scope="col">quantity</th>
                <th scope="col">delete</th>
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
                    <td><input type="number" name="" id="" min="1" value="<?php echo $value->quantity ?>"></td>
                    <form action="" method="post">
                        <td><button type="submit" name="del" value="<?php echo $value->book_id ?>">delete</button></td>
                    </form>
                </tr>


            <?php } ?>

        </tbody>
    </table>

    <span>Total amount : <?php echo (array_sum($arr)); ?></span>
    <button id="rzp-button1" style="height:30px; width:100px; color:white;background-color:black; margin-left:30px;">Pay</button>



    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "", // Enter the Key ID generated from the Dashboard
            "amount": "<?php echo (array_sum($arr)); ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Acme Corp", //your business name
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            // "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "callback_url": "http://localhost/booksweb/booksweb_php_MVC/view/user/payment",
            "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
                "name": "Gaurav Kumar", //your customer's name
                "email": "gaurav.kumar@example.com",
                "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        amount = <?php echo (array_sum($arr)); ?>
        $.ajax({
            type: "POST",
            url:"Payment",
            data:"pay_id="+response.razorpay_payment_id+"&amount="+amount,

            success:function(result)
            {
                window.location="success"
            }
        })


                    var rzp1 = new Razorpay(options);
                    document.getElementById('rzp-button1').onclick = function(e) {
                        rzp1.open();
                        e.preventDefault();
                    }
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <button type="submit" name="checkout">check out</button> -->
</body>

</html>