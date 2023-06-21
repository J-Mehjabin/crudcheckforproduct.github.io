
<?php
include "dbcont.php";

$id=$_POST['_id'];
$nam=$_POST['_nam'];
$des=$_POST['_des'];
$pri=$_POST['_pri'];
$qn=$_POST['_qn'];


$smt = "SELECT * FROM product WHERE ID='$id'";
$result= $conn->query($smt);
if($result->num_rows==0)
{
	$sql = "INSERT INTO product (ID,Name,Description,Purchase_price,Quantity) 
		VALUES ('$id', '$nam', '$des', '$pri','$qn')";

		
		if($conn->query($sql))
		{
			header('location:user.php');	
		}
		else
		{
			echo "insertion failed";
		}
}
else{
	echo "username already exits try another";
	//header("Location:registration.php");
	
	}

$conn->close();
?>

