<html>
<head>
<style type="text/css">
h3{
color:blue;
}
h4{
color:green;
}

</style>
</head>
<body>
<form method="post" action="ViewAllCustomer.php" align="center">
<?php
$b=$_POST["snd"];
$c=$_POST["rcpt"];
$d=$_POST["num"];
$con=mysqli_connect("localhost","root","","transfer money");
if(!$con)
die("server is not connected");
$s1="select * from customer where Name='".$b."'";
$res1=mysqli_query($con,$s1);
$row1=mysqli_fetch_assoc($res1);
$p1=intval($row1["Current_balance"],10);
$q1=intval($d,10);
$r1=$p1-$q1;

$u="update customer set Current_balance='".$r1."' where Name='".$b."'";
$no=mysqli_query($con,$u);

$s2="select * from customer where Name='".$c."'";
$res2=mysqli_query($con,$s2);
$row2=mysqli_fetch_assoc($res2);
$p2=intval($row2["Current_balance"],10);
$r2=$p2+$q1;
$v="update customer set Current_balance='".$r2."' where Name='".$c."'";
$no1=mysqli_query($con,$v);
?>
<h3> successfully transferred money</h3><br><br>
<h4> to make more transaction click the button below</h4><br>
<input type="submit" value="view all" >
</form>
</body>
</html>