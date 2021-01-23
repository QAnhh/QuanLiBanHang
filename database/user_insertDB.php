<?php
	//kiểm tra btn-signup
	if(isset($_POST["btn-signup"])){
		    $uname = trim($_POST['userName']);
        $upass = trim($_POST['password']); 
        $upass2 = trim($_POST['password2']); 
        $ufullname = trim($_POST['fullName']);
     
       if($uname=="") {
          $error[] = "Nhập username!"; 
       }
       else if($upass=="") {
          $error[] = "Nhập password !";
       }
       else if ($upass2!=$upass){
          $error[] = "Mật khẩu phải trùng khớp";
       }
       else if(strlen($upass) < 8){
          $error[] = "Mật khẩu phải dài hơn 7 kí tự"; 
       }
       else
       {
          try
          {
             $stmt = $conn->prepare("SELECT login FROM admin WHERE username like '".$uname."'");
             $stmt->execute();
             $row=$stmt->fetch(PDO::FETCH_ASSOC);
        
             if($stmt->rowCount() > 0) {
                $error[] = "Username bị trùng!";
             }
             else
             {
             	$new_upass = md5($upass);
             	$sql = "INSERT into admin (username,password,name)
                		VALUES ('".$uname."','".$new_upass."','".$ufullname."')";
                
              $stmt = $conn->prepare($sql);
              $stmt->execute();
              header("location:admin.php?page=user");
				      setcookie("success", "Thêm thành công!", time()+1, "/","");
             }
         }
         catch(PDOException $e)
         {
            echo $e->getMessage();
         }
      }
		
	}
?>