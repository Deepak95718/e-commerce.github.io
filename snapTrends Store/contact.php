
<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "store";
$conn = new mysqli($db_host , $db_username , $db_password , $db_name);

if(isset($_REQUEST['submit'])){
    $sql  = "INSERT INTO `contact`(id, name , email , address) VALUES (?,?,?,?)";
    $result = $conn -> prepare($sql);
    $result -> bind_param('isss' , $id , $name , $email , $address);
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
   if($result){
    $result -> execute();
    $result ->close();
}
$conn ->close();
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact | Life Style Store</title>
        <style type="css">
            .p1{
                text-align: justify;
            }
        </style>
        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <script src="jquery.js"></script>
        <script src="bootstrap.min.js"></script>
</head>
<body>
<?php
include 'header.php';
?>
<div class="container" id="content">
    <div class="row">
    <div class="col-lg">
        <img src="contact.png" style="float: right;">
        <h1>Get in Touch</h1>
        <p id="p1">Hi there, we are here to help you.<br> Please feel free to contact us in case you have any queries regarding the products, payment or order delivery.<br>With respect to payment, we will be accepting prepaid orders only, in order to avoid cash payment and hence maintain social distancing.<br> With respect to delay in order delivery, please note that we are trying our best to deliver your order on time, but your order may be delayed due to the current situation (or unforseen circumstances). However, we ensure that your order will be delivered soon.<br>In case you have any other queries, please fill the form below, and our team will get in touch with you within 24 hours.<br>You can also contact the number given below to get in touch with our customer care executive immediately.</p>
    </div><br><br>
    <div class="col-lg">
        <div style="float: right;">
            <h1>STORE INFORMATION</h1><br>
            <p id="p1">Haryana, India - 124507</p><br>
            <p id="p1">Phone : +91 9817672386</p><br>
            <p id="p1">Email : dy1883078@gmail.com</p>
        </div>
        <h1>CONTACT US</h1>
        <div style="float: left;">
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" autofocus="on" class="form-control" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
            </div>
            <div class="form-group">
                <textarea rows="5" cols="60" name="address" placeholder="Address"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </div>
</div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>