<?php
    session_start();
    require_once "progress/dbConnect.php";
    ob_start(); 
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
        try
        {
          $sql = "SELECT * FROM admin WHERE username like '".$username."' LIMIT 1";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          $row=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
 
              if($password == $row['password'])
              {
                  $_SESSION['id'] = $row['id'];
                  header("location:admin.php");
              }
              else
              {
                  echo "nhap sai roi!!";
              }
          }
          else
          {
              echo "nhap sai roi!!";
          }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link rel="stylesheet" href="css\styleAdmin.css">
</head>
<body>
  <div class="login-page">
    <div class="form">
      <div class="title">Login</div>
      <form class="login-form" action="#" method="post">
        <input type="text" placeholder="User Name" name="username"/>
        <input type="password" placeholder="Password" name="password"/>
        <div class="inputfield">
          <input type="submit" value="login" name="login" class="btn">
        </div>
      </form>
    </div>
  </div>
</body>
</html>