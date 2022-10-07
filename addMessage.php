<!DOCTYPE html>
<html>
<?php
   require_once('includes/links.php');
?>
<body>
	

	<?php
      require_once('includes/header.php');
      require_once('includes/sidebar.php');

      //Submit user data to database
      //1. db connection
      require_once('dbconnection.php');
      if(isset($_POST{'submitMessage'})){
        //2. fetch form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        //3.SQL: Query to insert data to database
        $queryData = mysqli_query($conn, "INSERT INTO messages(name,email,phone,subject,message) 
        VALUES('$name','$email','$phone','$subject','$message') ");
        //4. check if data inserted
        if($queryData){
            echo "Data submitted successfully";
        }
        else{
            echo "Error";
        }
      }
    ?>  
	
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-lg-12">
					<div class="card">
                        <div class="card-header bg-dark text-white text-centre">
						      <span>Add Message</span>
					    </div>
                        <div class="card-body">
                            <form action="addMessage.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="tel" class="form-control" name="phone" id="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" name="subject" id="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <input type="text" class="form-control" name="message" id="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3" >
                                        <div class="form-group">
                                            <button type="submit" name="submitMessage" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                            </form>  
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