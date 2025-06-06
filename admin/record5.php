<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>02-03-2021 Rajib Sir Attendance List</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		<link rel = "stylesheet" href = "css/jquery.dataTables.css" />
        
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
				<center><h3><b>Present Plus Admin</b></h3></center>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo htmlentities($admin_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills"><br>
            <!--   <center><h3>Attendance List </h3>
                    <h5>Date- 01-11-2020 </h5>
               Sub- Computer & Information Technology (2nd sem. Sec B)<br/>
                          Host- Hasan Sir </h5></center>
                          <center>--------------------------------------------------------------------------------------------</center> -->
                 <!-- <center><h3>Attendance List </h3>
                     <h5>Date- 30-11-2020 </h5>
               Sub- Sub- Principles of Management (2nd sem. Sec B)<br/>
                          Host- Fatema Mam </h5></center>
                          <center>--------------------------------------------------------------------------------------------</center> -->

               <center><h3>Attendance List </h3>
                     <h5>Date- 02-03-2021</h5>
               Sub- Taxation in Bangladesh (2nd sem. Sec B)<br/>
                          Host- Rajib Sir </h5></center>
                          <center>--------------------------------------------------------------------------------------------</center>  

                          <!-- <center><h3>Attendance List </h3>
                     <h5>Date- 30-11-2020 </h5>
               Sub- Theory and Practices of Banking (2nd sem. Sec B)<br/>
                          Host- Humaira Mam </h5></center>
                          <center>--------------------------------------------------------------------------------------------</center> -->

                 <!--         <center><h3>Attendance List </h3>
                     <h5>Date- 27-02-2021 </h5>
               Sub- Micro Economics (2nd sem. Sec B)<br/>
                          Host- Kamrul Sir </h5></center>
                          <center>--------------------------------------------------------------------------------------------</center>  -->
				<li><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li class = "dropdown">
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-cog"></span> Accounts <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li><a href = "admin.php"><span class = "glyphicon glyphicon-user"></span> Admin</a></li>
						<li><a href = "student.php"><span class = "glyphicon glyphicon-user"></span> Student</a></li>
					</ul>
				

				<li class = "dropdown">
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-book"></span> Record <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
					<li><a href="record.php"><span class="glyphicon glyphicon-book"></span> IB Class</a></li>
					<li><a href="record2.php"><span class="glyphicon glyphicon-book"></span> BC Class</a></li>
					<li><a href="record3.php"><span class="glyphicon glyphicon-book"></span> BA Class</a></li>
					<li><a href="record4.php"><span class="glyphicon glyphicon-book"></span> BM Class</a></li>
					<li><a href="record5.php"><span class="glyphicon glyphicon-book"></span> History Class</a></li>
					</ul>
				</li><br/>
			</ul>
			<br/>
			<div class = "alert alert-info"><b> History Class Record </b></div>
            
			<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content ">
						<div class = "modal-body">
							<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
							<br />
							<center><a class = "btn btn-danger remove_id" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
						</div>
					</div>
				</div>
			</div>

            <button onClick="window.print()"><span class = "glyphicon glyphicon-print"></span> Print</button><br><br>
			<div class = "well col-lg-12">
				<table id = "table" class = "table table-bordered">
					<thead class = "alert-info">
						<tr>
							<th>Student Roll ID</th>
							<th>Student Name</th>
							<!-- <th>Time</th> -->
							<th>Date</th>
						<!--	<th>Action</th> -->
						</tr>
					</thead>
					<tbody>
					<?php
						$q_time = $conn->query("SELECT * FROM `time5`") or die(mysqli_error());
						while($f_time = $q_time->fetch_array()){
							
					?>	
						<tr>
							<td><?php echo $f_time['student_no']?></td>
							<td><?php echo htmlentities($f_time['student_name'])?></td>
							<!-- <td><?php echo date("h:i a", strtotime($f_time['time']))?></td> -->
							<td><?php echo date("d-m-Y", strtotime($f_time['date']))?></td>
							<!--<td><button name = "<?php echo $f_time['time_id']?>" class = "btn btn-danger rtime_id" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "glyphicon glyphicon-remove"></span></button></td> -->
						</tr>
					<?php
						}
					?>	
					</tbody>
				</table>
			<br />
			<br />	
			<br />	
            <center><b>&copy; Present Plus 2021 | All Rights Reserved</b></center>
			<center><small>Powered by Shakij Mahamud</small></center>
			</div>
		</div>
	
			
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('.rtime_id').click(function(){
				$time_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_time.php?time_id=' + $time_id;
				});
                
			});
		});

	</script>
</html>