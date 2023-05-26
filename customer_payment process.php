<html>
<head>
<title> payment process detail</title>
</head>
<body>
<?php
include("DBconnect.php");
if(isset($_POST['submit'])){
$payment_id=$_POST["payment_id"];
$sc_no=$_POST["sc_no"];
$bill_id=$_POST["bill_id"];
$bill_amount=$_POST["bill_amount"];
$payment_method_id=$_POST["payment_method_id"];
$payment_amount=$_POST["payment_amount"];
$payment_date=$_POST["payment_date"];



$query="INSERT into tbl_customer_payment (payment_id,Sc_no,bill_id,bill_amt,payment_method_id,payment_amount,payment_date)

Values('$payment_id','$sc_no','$bill_id','$bill_amount','$payment_method_id','$payment_amount','$payment_date')";
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

