
<html>
<head>
<title> Branch processing</title>
</head>
<body>
<?php
include("DBconnect.php");
if(isset($_POST['submit'])){

$Branch_id=$_POST["branch_id"];
$Branch_name=$_POST["fullname"];
$Branch_status=$_POST["status"];

$query="INSERT into tbl_branch(Branch_Id,Branch_Name,Status)
VALUES('$Branch_id','$Branch_name','$Branch_status')";
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

$BID=$_POST["id"];
$Bname=$_POST["branch name"];
$stat=$_POST["status"];
$query="INSERT INTO tbl_branch(branch_id,branch_name,status)
VALUES('$BID','$Bname','$stat')";
echo $query;
$result=mysqli_query($conn,$query);
if($result){
echo"Successful message";
}
mysqli_close($conn);
}
?>
</body>
</html>

