<?php
$conn = mysqli_connect("localhost","root","","mantiquilla");

if ($conn){
    die("Succesful");
}

$mobilenumber = $_POST['mobilenumber'];
$password = $_POST['password'];

$sql = "SELECT * FROM customers WHERE mobilenumber =$mobilenumber AND password = $password";


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) ){ 
    echo ("succcess");
}else{
    echo ("echo again");
}
mysqli_close($conn);
?>

