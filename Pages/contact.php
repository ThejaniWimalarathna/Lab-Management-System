  <!D0CTYPE html>
<html>
	<head>
	
		<link rel="stylesheet" href="styles/contact2.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
      
	  <script type="text/javascript"src="contact.js"></script>
		
		
	</head>
	
	<body>
		<!--- Section 1 - Background cover --->
		<div class="banner">
			<div class="navbar">
			<a href="Homeenew.php"><img src="Images/11.PNG" class="logo">
				<ul>
					<li><a href="Homeenew.php">HOME</a></li>
					<li><a href="register.php">REGISTER</a></li>
					<li><a href="view_n.html">LAB REPORTS</a></li>
					<li><a href="services.php">SERVICES</a></li>
					<li><a href="payment.php">PAYMENT PORTAL</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
					<li><a href="#">CONTACT US</a></li>
					<li><a href="about1.php">ABOUT US</a></li>
					
					
				</ul>
			</div>		
		</div>
	
	<!--- Section 2 - Form --->
	<div class="text">
		<h1>Contact Us</h1>
		<div id="error_message"></div>
		
		<div class="view-form">
			<form id="view-form" method="post" action="" onsubmit="return validation()">
			
				<input name="name" type="text" class="form-c" placeholder=" Name" id="name" required>
				<br>
				<input name="subject" type="text" class="form-c" placeholder=" Subject" id="subject" required>
				<br>
				
				<input name="phone" type="numbers" class="form-c" placeholder="Phone" id="phone" required>
				<br>
				<input name="email" type="text" class="form-c" placeholder="Email" id="email" required>
				<br>
				
				
				 <textarea name="message" id="message" placeholder="Type Your message"rows="5" cols="20"></textarea><br><br><br>
				
				<button type="submit" name="ok">SUBMIT</button>
			</form>
			 <?php 
            if(isset($_POST['ok'])){
                include_once 'conn.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                }else{
                    echo "<script>alert('Something Went wrong!!')</script>";
                }
            }
            ?>
			
		</div>
		
	</div>
	     
	<!--- Section 3 - Footer --->
	<div class="footer">
		<p class="privacy">CEYLON MED LABORATORY | PRIVACY POLICY</p>
		<P class="create">Created by <b><a href="" class="link">SLIIT KGL_01</a><b></p>
	</div>
	</body>
	</html>

