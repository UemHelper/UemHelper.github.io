<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>feedback</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>

<!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- add fixed-top to keep nav bar in place -->
  <a class="navbar-brand" href="../index.php"><b>T h e &nbsp;U E M &nbsp;h e l p e r</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="attendancerecord.php">Attendace Record</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="classnote.php">Class Notes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://drive.google.com/drive/folders/1nLzbbFZ6KfLnAnlViYDILBbdnO3sNFH2">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="questionpaper.php">Previous Year Question Papers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contacts</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="feedback.php">Feedback</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-1 pt-2">
	<div class="row d-flex justify-content-center">
		<div class="col-lg-8 bg-dark px-5 rounded z-depth-4 mt-5">
			<div class="row">
				<div class="card-header bg-dark mt-4">
					<h1 class="text-white">Write US</h1>
					<div class="col-sm-12 border border-bottom border-primary"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 border-right">
					<form action="feedback.php" method="POST">
						<div class="col-md-12">
							<div class="md-form from-group">
								<input type="text" id="name" name="name" class="from-control text-white" style="margin-top: 10px" required="">
								<label for="name">name</label>
							</div>
						</div>
						<div class="col-md-12">
							<div class="md-form from-group">
								<input type="email" id="email" name="email" class="from-control text-white" style="margin-top: 10px" required="">
								<label for="email">E-mail</label>
							</div>
						</div>
						<div class="col-md-12">
							<div class="md-form from-group">
								<input type="number" id="phno" name="phno" class="from-control text-white" style="margin-top: 10px" required="">
								<label for="phno">phone number</label>
							</div>
						</div>
					</div>
                    <div class="col-md-7 mt-2">
						<div class="md-form">
							<textarea type="text" id="message" name="message" rows="4" cols="40" class="from-control md-textarea text-white" required=""></textarea>
							<label for="message">Your Message</label>
							
						</div>
						
					</div>
					<div class="col-md-6 pt-2">
							<div class="form-check">
								<input type="checkbox" id="check" name="check" class="form-check-input" required="">
								<label for="check" class="form-check-label text-white">I am not a Robot</label>
							</div>
						</div>
					</div>
					
                    <div class="col-md-15 mt-2">
						<div class="md-form">
                            <button type="submit" name="feedbacksubmit" class="btn btn-primary btn-block">Send Message</button>
						</div>
					</div>
                    
				</form>

				<?php
					include '../scripts/connect.php';

					// ALTER TABLE suppliers AUTO_INCREMENT = 1;

					if(isset($_POST['feedbacksubmit'])){
						$name = $_POST['name'];
						$email = $_POST['email'];
						$phno = $_POST['phno'];
						$message = $_POST['message'];
						$check = $_POST['check'];

						$sql = "INSERT INTO `feedback` (`name`,`email`,`phno`,`message`) values ('$name','$email','$phno','$message')";
						$result = mysqli_query($connect,$sql);

						if($result=1)
							echo '<script>alert("Feedback sent");</script>';
						
						else
							echo '<script>alert("ALERT!! Feedback not sent");</script>';
						
					}
				?>
			</div>
		</div>
		
	</div>
</div>



<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>