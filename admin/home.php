<!DOCTYPE html>
<?php
require_once 'validator.php';
require_once 'account.php';
?>
<html lang="eng">

<head>
	<title>Present Plus Admin</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/bootstrap.css" />
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<center>
					<h3><b>Present Plus Admin</b></h3>
				</center>

			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <?php echo htmlentities($admin_name) ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid" style="margin-top:70px;">
		<ul class="nav nav-pills"><br><br><br>
			<li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Accounts <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
					<li><a href="student.php"><span class="glyphicon glyphicon-user"></span> Student</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-book"></span> Record <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="record.php"><span class="glyphicon glyphicon-book"></span> IB Class</a></li>
					<li><a href="record2.php"><span class="glyphicon glyphicon-book"></span> BC Class</a></li>
					<li><a href="record3.php"><span class="glyphicon glyphicon-book"></span> BA Class</a></li>
					<li><a href="record4.php"><span class="glyphicon glyphicon-book"></span> BM Class</a></li>
					<li><a href="record5.php"><span class="glyphicon glyphicon-book"></span> History Class</a></li>
				</ul>
			</li><br />
		</ul>

		<br />
		<div class="alert alert-info"><b>Home</b></div>
		<div class="well col-lg-12">
			<center><img src="images/logo.jpg" width="300px" height="210px" /></center>
			<br /><br />
			<h4>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-plus"></span> Add Attendance <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="https://present-plus.cf/index_ad.php"><span class="glyphicon glyphicon-user"></span> 1st Class</a></li>
						<li><a href="https://present-plus.cf/index2_ad.php"><span class="glyphicon glyphicon-user"></span> 2nd Class</a></li>
						<li><a href="https://present-plus.cf/index3_ad.php"><span class="glyphicon glyphicon-user"></span> 3rd Class</a></li>
					</ul>
			</h4>
			</li>
			<br /> <br /><br /><br />
		</div>
	</div>
	<div class="navbar navbar-fixed-bottom alert-warning">
		<div class="container-fluid">
			<center><b>&copy; Present Plus 2020 | All Rights Reserved</b></center>
			<center><small>Powered by Shakij Mahamud</small></center>
		</div>
	</div>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</html>