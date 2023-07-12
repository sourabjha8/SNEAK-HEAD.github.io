<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4277854baa.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="cart.css">
    <title>Cart</title>
</head>
<body>

    <!-- nav bar -->

    <header>
        <a href="index.html" class="logo">SNEAK-HEAD</a>
        <nav>
            <ul class="cen-nav">
                <li><a href="store-shoe.php">Store</a></li>
                <!-- <li><a href="#">Men</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Children</a></li> -->
            </ul>
        </nav>
        <div class="search">
            <div class="searchbox">
                <input type="text" placeholder="Search here.....">
            </div>
            <!-- <a href="#"><i class="fa-solid fa-magnifying-glass icon searchBtn"></i></a> -->
            <!-- <a href="#"><i class="fa-solid fa-xmark icon closeBtn"></i></a> -->
            <?php 
                $count=0;
                if(isset($_SESSION['cart']))
                {
                    $count=count($_SESSION['cart']);
                }
            ?>
            <a href="mycart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php echo $count ?></sup></a>
            <a href="#"><i class="fa-regular fa-user icon"></i></a>
            <!-- <a href="#">Total Price: &#8377; 100</a> -->

        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5 cart-heading">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
            <table class="table table-striped table-hover cart-table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php

                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $sr=$key+1;
                                echo"
                                <tr>
                                    <td>$sr</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                    <td>
                                    <form action='manage-cart.php' method='POST'>
                                        <input type='number'class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' value='$value[Quantity]' min='1' max='10'>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                    </td>
                                    <td class='itotal'></td>
                                    <td>
                                    <form action='manage-cart.php' method='POST'>
                                    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                    </td>
                                </tr>
                                ";
                            }
                        }
                    ?>
                </tbody>
                </table>
            </div>
            <div class="col-lg-3 total-desc">
                <div class="border bg-light rounded p-2 w-75">
                    <h4>Total:</h4>
                    <h5 class="text-right" id="gtotal"></h5>
                    <br>
                    <?php

                        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                        {

                    ?>
                    <form action="purchase.php" method="POST">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" class="form-control" name="phone_no" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address" required>
                    </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pay_mode" value="COD" name="flexRadioDefault" id="flexRadioDefault2" checked required>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash On Delivery
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block" name="purchase">Make Payment</button>
                    </form>
                    <?php 
                    
                    }

                    ?>
                </div>
               
            </div>
        </div>
    </div>
    
    <script>

        var gt=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal=document.getElementById('gtotal');

        function subtotal()
        {
            gt=0;
            for(i=0;i<iprice.length;i++)
            {
                itotal[i].innerText=iprice[i].value*(iquantity[i].value);

                gt=gt+iprice[i].value*(iquantity[i].value);
            }
            gtotal.innerText=gt;
        }

        subtotal();

    </script>

</body>
</html>