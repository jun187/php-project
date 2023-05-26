<html>
<head>
<title> customer bill processing</title>
</head>
<body>
<?php
include("DBconnect.php");
if(isset($_POST['submit'])){


$Bill_Id=$_POST["bill_id"];
$Date_Reading=$_POST["date_reading"];
$current_Reading=$_POST["current_reading"];
$Previous_Reading=$_POST["previous_reading"];
$Bill_Month=$_POST["bill_month"];
$Bill_Year=$_POST["bill_year"];
$Bill_Amount=$_POST["bill_amount"];

$query="INSERT into tbl_customerbill(Bill_id,Date_of_reading,Curr_reading,Prev_reading,bill_month,bill_year,bill_amount)
VALUES('$Bill_Id','$Date_Reading','$current_Reading','$Previous_Reading','$Bill_Month','$Bill_Year','$Bill_Amount')";
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

