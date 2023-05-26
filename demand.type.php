<html>
<head>
<title> Customer Detail Form</title>
</head>
<body>
<h1>NEA Bill Of Customer Detail Form</h1>
<form action="Process.php" method="POST">
<label>Sc_No</label>
<input type="text" name="SN"/>
<br>
<label> Customer_Id:</label>
<input type="text" name="customer_id"/>
<br>
<br>
<label> Customer_Fullname:</label>
<input type="name" name="fullname"/>
<br>
<label> Demand_Type:</label>
<select name="demandtype">
<option value=""disabled selected> select option</option>
<option value="10">10A</option>
<option value="20">20A</option>
<option value=""25">25A</option>
</select>
<br>
<label>Mobile_Number:</label>
<input type="number" name="mobile"/>
<br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>


