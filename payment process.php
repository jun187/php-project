<html>
<head>
<title> payment process detail</title>
</head>
<body>
<?php
include("DBconnect.php");
if(isset($_POST['submit'])){
$payment_id=$_POST["payment_id"];
$payment_name=$_POST["name"];
$status=$_POST["status"];
$query="INSERT into payment_method(Payment_id,payment_name,Status)
Values('$payment_id','$payment_name','$status')";
echo $query;
$result=mysqli_query($conn,$query);
if($result){
echo"data enter succesfully";
}
else
{
echo"Error:".$query.":-".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</body>
</html>

