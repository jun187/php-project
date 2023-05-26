<html>
<head>
<title> Demand processing</title>
</head>
<body>
<?php
include("DBconnect.php");
if(isset($_POST['submit'])){
$Sc_no=$_POST["SN"];
$demand_id=$_POST["demand_id"];
$demand_name=$_POST["name"];

$query="INSERT into tbl_demandtype(Demand_Id,Demand_Name)
VALUES('$demand_id','$demand_name')";
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

