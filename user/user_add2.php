<?php 
	require '../config/Database.php';
	use PointOfSale2\Database;

	$db = new Database();
	$data_users = $db->user_data();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>User | Point Os Sale</title>
		<!-- plugins:css -->
		<?php include '../tmp/link2.php'; ?>
	</head>
	<body>
		<div class="container-scroller">
			<!-- partial:partials/_navbar.html -->
			<?php include '../tmp/purpleAdmin/partials/_navbar.html'; ?>
			<!-- partial -->
			<div class="container-fluid page-body-wrapper">
				<!-- partial:partials/_sidebar.html -->
				<?php include '../tmp/purpleAdmin/partials/_sidebar.html'; ?>
				<!-- partial -->
				<div class="main-panel">
					<div class="content-wrapper">
						<div class="page-header">
							<h3 class="page-title">
								<span class="page-title-icon bg-gradient-success text-white mr-2">
									<i class="mdi mdi-account"></i>
								</span> Add New User </h3>
							<nav aria-label="breadcrumb">
								<ul class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">
										<span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
									</li>
								</ul>
							</nav>
						</div>
						<!-- CONTENT -->
							<div class="col-lg-12 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Add New User</h4>
										<form class="form-sample" method="POST" action="../config/proccess.php?action=user_add">
											<p class="card-description"> Complete this Form </p>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group row">
														<label class="col-sm-12 col-form-label">Name</label>
														<div class="col-sm-12">
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text">@</span>
																</div>
																<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name">
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group row">
														<label class="col-sm-12 col-form-label">Gender</label>
														<div class="col-sm-12">
															<select class="form-control" name="gender">
																<option>Male</option>
																<option>Female</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group row">
														<label class="col-sm-12 col-form-label">Age</label>
														<div class="col-sm-12">
															<input type="number" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="age">
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group row">
														<label class="col-sm-12 col-form-label">Email</label>
														<div class="col-sm-9">
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text"><i class="mdi mdi-email"></i></span>
																</div>
																<input type="email" class="form-control" placeholder="Email address" aria-label="Email" aria-describedby="basic-addon1" name="email">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group row">
														<label class="col-sm-12 col-form-label">Address</label>
														<div class="col-sm-12">
															<textarea class="form-control" rows="4" name="address"></textarea>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12 text-center">
													<a href="./user2.php" class="btn btn-md btn-gradient-warning"><i class="mdi mdi-chevron-left"></i> back</a>
													<button type="submit" class="btn btn-md btn-gradient-success">Submit <i class="mdi mdi-chevron-right"></i></button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						<!-- END CONTENT -->
					</div>
					<!-- content-wrapper ends -->
					<!-- partial:partials/_footer.html -->
					<?php include '../tmp/purpleAdmin/partials/_footer.html'; ?>
					<!-- partial -->
				</div>
				<!-- main-panel ends -->
			</div>
			<!-- page-body-wrapper ends -->
		</div>
		<!-- container-scroller -->
		<!-- plugins:js -->
	 <?php include '../tmp/script2.php'; ?>
		<!-- End custom js for this page -->
	</body>
</html>