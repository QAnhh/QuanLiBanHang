<?php
		
	if(isset($_POST["saveProfile"])){
		$name = trim($_POST["name"]);

		if($name=="") {
      	$error[] = "Nhập name!"; 
   	}
       	
    else
    {
    	try
    	{
      //thay đổi dữ liệu database
  		$sql = "update admin
  				set name = '".$name."'
  				where id = '".$_GET['edit']."'";
  		$stmt = $conn->prepare($sql);
  		$stmt->execute();
  		header("location: admin.php?page=user");
  		setcookie("success", "Sửa thành công!", time()+1, "/","");
      }
     	catch(PDOException $e)
     	{
        	echo $e->getMessage();
     	}
   	}
		
	}
?>