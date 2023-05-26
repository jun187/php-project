<?php
include("DBconnect.php");
$query="select * from tbl_customer";
$result=mysqli_query($conn,$query);
echo"<table border='1'>
<tr>
<td> Sc_No</td>
<td>Customer_Id</td>
<td>customer_fullname</td>
<td>Demand_Type<td>
<td>Mobile_No</td>
<td>Action</td>
</tr>";
$i=1;
while($row=mysqli_fetch_array($result))
{
echo"<tr>";
 echo"<td>" . $i ."</td>;"
echo"<td>"  .$row['Sc_No'] . "</td>";
echo"<td>"  .$row['Customer_Id'] . "</td>";
 echo"<td>"  .$row['customer_fullname'] ."</td>";
echo"<td>"  .$row['Demand_Type'] . "</td>";
echo"<td>"  .$row['Mobile_No'] . "</td>";
?>
<td><a href="view_bill.php? customer_id=<?php    echo $row['Customer_Id'];?>">View Bill</a>||
<a href=""View_payment.php? customer_id=<?php echo $row['Customer _Id'];?>">View Payment</a>
</td>
</php
echo"</tr>";
$i=$i+1';
}
echo"</table>";
?>








