<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "store";
$conn = new mysqli($db_host , $db_username , $db_password , $db_name);
$sql = "INSERT INTO `items` (id, Name, Price) VALUES(?,?,?)";
$result  = $conn -> prepare($sql);
$result -> bind_param('isi',$id , $Name , $Price);

$Name = 'Canon EOS';
$Price = '36000';
$result -> execute();
$Name = 'Nikon DSLR';
$Price = '40000';
$result -> execute();
$Name = 'Sony DSLR';
$Price = '45000';
$result -> execute();
$Name = 'Olympus DSLR';
$Price = '50000';
$result -> execute();
$Name = 'Titan Model #301';
$Price = '13000';
$result -> execute();
$Name = 'Titan Model #201';
$Price = '3000';
$result -> execute();
$Name = 'HMT Milan';
$Price = '8000';
$result -> execute();
$Name = 'Faber Luba #111';
$Price = '18000';
$result -> execute();
$Name = 'H&W';
$Price = '800';
$result -> execute();
$Name = 'Luis Phil';
$Price = '1000';
$result -> execute();
$Name = 'John Zok';
$Price = '1500';
$result -> execute();
$Name = 'Jhalsani';
$Price = '1300';
$result -> execute();

$result -> close();

$conn -> close();

?>