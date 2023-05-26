<html>
<head>
<title> process of customer detail</title>
</head>
<body>
<?php
include("DBconnect.php");
if(isset($_POST['submit'])){
$Sc_no=$_POST["SN"];
$Customer_id=$_POST["customer_id"];
$Customer_name=$_POST["fullname"];
$Demand_type=$_POST["demand_type"];
$Mobile_no=$_POST["mobile"];
$query="INSERT into tbl_customer(Sc_NO,Customer_Id,Customer_Fullname,Demand_Type,Mobile_NO)
VALUES('$Sc_no','$Customer_id','$Customer_name','$Demand_type','$Mobile_no')";
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

