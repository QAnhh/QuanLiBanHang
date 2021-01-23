<div class="container body">
	<div class="main_container">			
			<!-- page content -->
		<div class="right_col" role="main">
			<div class="">
				<div class="row">
					<div class="col-md-12 col-sm-12 ">
						<div class="x_panel">
							<div class="x_title">
								<h2>Edit</h2>
								</div>
									<div class="x_content">
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="#" method="post">
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name </label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="name" class="form-control" value="<?php echo $profile['name'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="number">Number </label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="number" class="form-control" value="<?php echo $profile['number'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="price" class="col-form-label col-md-3 col-sm-3 label-align">Price </label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="price" class="form-control" value="<?php echo $profile['price'] ?>">
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<a href="admin.php?page=products" class="btn btn-primary ">Back</a>
												<button type="submit" name="saveProfile" class="btn btn-success pull-right">Submit</button>
											</div>
										</div>
									</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>