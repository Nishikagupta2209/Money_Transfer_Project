<html>
<head>
<style type="text/css">
td,th{
border:1px solid blue;
}
table{
border:2px solid blue;
}
</style>
</head>
<body>
<form method="post" action="viewonecustomer.php" align="center">
<?php
$con=mysqli_connect("localhost","root","","transfer money");
if(!$con)
die("server is not connected");
$s="select * from customer";
$res=mysqli_query($con,$s);
echo "<table align='center'>";
echo "<tr><th>Name</th><th>Email</th><th>current balance</th><th>contact no.</th></tr>";
while($row=mysqli_fetch_assoc($res)){
echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Current_balance"]."</td><td>".$row["contact no."]."</td></tr>";
}
echo "</table>";
?>
<br>
<input type ="text" name="txt" placeholder="select one and enter name">
<input type="submit" value="view details">
</form>
</body>
</html>