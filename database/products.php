<?php
	//kiểm tra edit
	if(isset($_GET['edit'])){
		//lấy dữ liệu (nếu có)
		$sql = "select * from products
				where id = '".$_GET['edit']."'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$profile=$stmt->fetch(PDO::FETCH_ASSOC);
		include_once 'database/products_editDP.php';
		include_once 'database/products_editDB.php';
		if(isset($error))
	    {
	      	foreach($error as $err)
	      	{
	          	?>
              	<div class="container body">
                  	<div class="main_container">
                      	<div class="right_col" role="main">
                        	<div class="alert alert-danger">
                            <i class="fa fa-warning"></i> &nbsp; <?php echo $err; ?>
                        	</div>
                      	</div>
                  	</div>
              	</div>
	          	<?php
	      	}
	  	}	
	}
	//kiểm tra delete
	else if(isset($_GET['del'])){
		$sql = "DELETE from products
				where id = '".$_GET['del']."'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		setcookie("success","xóa thành công",time()+1,"/","");
		header("location:admin.php?page=products");
	}
	//kiểm tra insert
	else if(isset($_GET['insert'])){
		include_once 'database/products_insertDP.php';
		include_once 'database/products_insertDB.php';
		if(isset($error))
	    {
	      	foreach($error as $err)
	      	{
	          	?> 
              	<div class="right_col" role="main">
                	<div class="alert alert-danger">
                    	<i class="fa fa-warning"></i> &nbsp; <?php echo $err; ?>
                	</div>
              	</div>
	          	<?php
	      	}
	  	}
	}
	else{
		if(isset($_COOKIE['success'])){
			
			echo '<div class="right_col">';
			echo $_COOKIE['success'];
			echo '</div>';
		}	
?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="right_col" role="main">
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          	<th>id</th>
							<th>name</th>
							<th>number</th>
							<th>price</th>
							
                        </tr>
                      </thead>
                      <tbody>
                        
<?php
	$sql = "select * from products";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		echo '<tr><td>'.$row['id'].'</td>';
		echo '<td>'.$row['name'].'</td>';
		echo '<td>'.$row['number'].'</td>';
		echo '<td>'.$row['price'].'</td>';
		
?>
		<td>
			<a href="admin.php?page=products&&edit=<?php echo $row['id'];?>" class=" btn-outline-dark ">Sửa</a>
			<a href="admin.php?page=products&&del=<?php echo $row['id'];?>" class=" btn-outline-dark ">Xóa</a>
		</td>
		</tr>
<?php
	}
?>

                      </tbody>
					</table>
					<a href="admin.php?page=bproducts&&insert" class="btn btn-outline-dark" >Thêm</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	</div>
	
  </body>
<?php
	}
?>