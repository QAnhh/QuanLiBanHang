<?php
	if(isset($_POST["saveProfile"])){
		$name = trim($_POST["name"]);
		$image = trim($_POST["imageLink"]);
		$number = trim($_POST["number"]);
		$price = trim($_POST["price"]);

		if($name=="") {
	      	$error[] = "Nhập name!"; 
	   	}
	   	else if($number=="") {
	      	$error[] = "Nhập number!"; 
	   	}
	   	else if($price=="") {
	      	$error[] = "Nhập price!"; 
	   	}

	   	else
	   	{
	      	try
	      	{
		        //thay đổi dữ liệu database
				$sql = "update products
						set name = '".$name."',image = '".$image."',number = '".$number."',price = '".$price."'
						where id = '".$_GET['edit']."'";
				$stmt = $conn->prepare($sql);
				$stmt->execute();
				header("location: admin.php?page=products");
				setcookie("success", "Sửa thành công!", time()+1, "/","");
	     	}
	     	catch(PDOException $e)
	     	{
	        	echo $e->getMessage();
	     	}
	 	}
		
	}
?>