<html>
<body>
<form method="post" action="moneytransferred.php">
<?php
$a=$_POST["txt"];
$con=mysqli_connect("localhost","root","","transfer money");
if(!$con)
die("server is not connected");
$s="select * from customer where Name='".$a."'";
$res=mysqli_query($con,$s);
$row=mysqli_fetch_assoc($res);
echo "Name : ".$row["Name"]."<br>";
echo "Email : ".$row["Email"]."<br>";
echo "current balance : ".$row["Current_balance"]."<br>";
echo "contact no. : ".$row["contact no."];
?>
<br>
<br>
<lable for="n1">Enter the name of sender</lable><br>
<input type="text" id="n1" name="snd" placeholder="enter nane"><br>
<lable for="n2">Enter name of recipient </lable><br>
<input type="text" id="n2" name="rcpt" placeholder="enter nane"><br>
<lable for="n3">enter the amount you wanna transfer</lable><br>
<input type="number" id="n3" name="num" placeholder="enter amount"><br>
<input type="submit" value="transfer">
</form>
</body>
</html>