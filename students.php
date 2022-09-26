<!DOCTYPE html>
<html>
<?php
   require_once('includes/links.php');
?>
<body>
	

	<?php
      require_once('includes/header.php');
      require_once('includes/sidebar.php');
    ?>  
	
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-lg-12">
					<div class="card">
                        <div class="card-header bg-dark text-white text-centre">
						      <span>Enrolled Students</span>
                              <span class="float-right">
                                <a href="addStudents.php" class="btn btn-secondary btn-sm">add student</a>
                              </span>
					    </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Reg Number</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Course</th>
                                        <th>Enrolled On</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>Churchill</td>
                                    <td>IN22/20269/22</td>
                                    <td>+254798592877</td>
                                    <td>churkakk@gmail.com</td>
                                    <td>Web Design & Development</td>
                                    <td>6th May 2022</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-success btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
				</div>
				
				
			</div>

			
		</div>

	</div>
	<!-- All our code. write here   -->

	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>