<?php
    //kiểm tra saveProfile
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
             
                $sql = "INSERT into products (name,image,number,price)
                        VALUES ('".$name."','".$image."','".$number."','".$price."')";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                header("location:admin.php?page=products");
                setcookie("success", "Thêm thành công!", time()+1, "/","");
               
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        }
      
    }
?>