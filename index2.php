<!DOCTYPE html>
<html lang="eng">

<head>
	<meta charset="utf-8" />
	<title>Present Plus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="cssxy/bootstrap.css" />
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
		}

		a:hover {

			text-decoration: none;
		}

		.notification {
			background: linear-gradient(to right, #3232a2, #731074);
			color: white;
			text-decoration: none;
			padding: 6px 12px;
			position: relative;
			display: inline-block;
			border-radius: 10px 0;
		}

		.notification:hover {
			background: linear-gradient(to left, #3232a2, #731074);
			color: white;
			border-radius: 0 10px;
			transition: .3s linear;


		}

		.notification .badge {
			position: absolute;
			top: -10px;
			right: -10px;
			padding: 4px 8px;
			border-radius: 50%;
			background-color: red;
			color: white;
		}


		.notificationx {
			background: linear-gradient(to right, #3232a2, #731074);
			color: white;
			text-decoration: none;
			margin-left: 16px;
			padding: 6px 12px;
			position: relative;
			display: inline-block;
			border-radius: 10px 0;

		}

		.notificationx:hover {
			background: linear-gradient(to right, #3232a2, #731074);
			color: white;
			border-radius: 0 10px;
			transition: .3s linear;

		}

		.notificationxx {
			background: linear-gradient(to right, #3232a2, #731074);
			color: white;
			text-decoration: none;
			margin-left: 16px;
			padding: 6px 12px;
			position: relative;
			display: inline-block;
			border-radius: 10px 0;

		}

		.notificationxx:hover {
			background: linear-gradient(to right, #3232a2, #731074);
			color: white;
			border-radius: 0 10px;
			transition: .3s linear;

		}
	</style>

</head>

<body class="alert-info">

	<div class="container-fluid">



	</div>
	</div>
	</nav>
	<div class="container-fluid">
		<br />
		<br />
		<br />

		<div class="col-lg-3"></div>
		<div class="col-lg-6 well">
			<center>
				<h2><b>Welcome to Present<sup> Plus</sup> </b></h2>
			</center><br>
			<center>
				<a href="https://www.notice-plus.cf/user_dashboard.php" class="notification"><span><b>Notice </b></span> </a>




				<a href="https://www.needblood.cf/index.php" class="notificationx"><span><b>Blood Bank </b></span> </a>


				<a href="https://i-assigned.cf/index.php" class="notificationxx"><span><b>I Assigned</b></span> </a>
			</center>

			<br><br>

			<center>
				<h5><b>
						<p style="color:#e40909e6">রোল সাবমিট করার পর ৫ সেকেন্ড অপেক্ষা করুন।আপনার রোল চেক করে এটেন্ডেন্স নিবে।
					</b></h5>
				</p>
				<p style="color:green"><small> দয়া করে কেউ ২/৩ বার রোল সাবমিট করবেন না </p></small>
			</center>

			<!-- <small>কেউ কারো প্রেজেন্ট দেওয়ার চেষ্টা করবেন না। আপনি যখন রোল সাবমিট করবেন আপনার <b>IP</b> সেট হয়ে থাকবে। এক <b>IP</b> থেকে ভিন্ন ভিন্ন রোল সাবমিট করলে এটেন্ডেন্স বাতিল হয়ে যাবে।
				 </small> -->

			<br />
			<center>
				<h4><b>You've Selected</b></h4>
			</center>
			<center>
				<h5><b>Business Communication Attendance <span class="glyphicon glyphicon-ok-sign"></span></b></h5>
			</center>
			<li class="dropdown">
				<h4> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-ok-sign"></span> Select Your Class <span class="caret"></span></a>
					<ul class="dropdown-menu">

						<h4>
							<li><a href="index.php"><span class="glyphicon glyphicon-education"></span> IB Attendance</a></li>
						</h4>
						<h4>
							<li><a href="index3.php"><span class="glyphicon glyphicon-education"></span> BA Attendance</a></li>
						</h4>

						<h4>
							<li><a href="index4.php"><span class="glyphicon glyphicon-education"></span> BM Attendance</a></li>
						</h4>
						
						<h4>
							<li><a href="index5.php"><span class="glyphicon glyphicon-education"></span> History Attendance</a></li>
						</h4>
				</h4>
				</ul>
			</li>
			</h4><br />
			<div id="result"></div>
			<br />
			<br />
			<form enctype="multipart/form-data">
				<div class="form-group">
					<label>Student Roll ID:</label>
					<input type="text" id="student" class="form-control" placeholder="Last 3 digit of your Roll ID" required="required" />
					<br />
					<br />
					<div id="error"></div>
					<br />
					<button type="button" id="login" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-login"></span><b>SUBMIT</b></button>
				</div>
				<center><small><a href="privacy-policy.php">Privacy Policy</a></small></center>


			</form>
		</div>
		<br><br><br><br><br><br>

		<center><b>&copy; Present Plus 2021 | All Rights Reserved</b></center>
		<center><small>Powered by Shakij Mahamud</small></center>
	</div>
	</div>
	</div>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/login2.js"></script>

</html>