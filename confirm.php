<?php

?>
<html>
<head><title>Which user</title>
    <meta charset="utf-8">
    <title>Petty job</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style2.css" rel="stylesheet">
   
   <style>
   .table1
   {
   	color:yellow;
   	margin-top:300px;
   	margin-left:90px;
   	font-size:40px;
   	-webkit-box-shadow: 5px 5px 15px 5px #000000; 
box-shadow: 5px 5px 15px 5px #000000;
	
   }
	th,td
	{
		padding:100px;
		background-color:#61045f;
	}
	
	th:hover
	{
		-webkit-box-shadow: 5px 5px 15px 5px #000000; 
		box-shadow: 5px 5px 15px 5px #000000;
		font-size:42px;
	}
	body{
		
	}
	a
	{
		font-style:none;
		color:yellow;
	}
	a:hover
	{
		color:yellow;
	}
   </style>
</head>
<body>



<!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="text" style= "color: #61045f; font-size: 55px;">Petty Job</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#####" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.php" class="dropdown-item">Job List</a>
                            <a href="category.php" class="dropdown-item">Job Category</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="login/login_a.php" class="dropdown-item">Admin</a>
                            <a href="testimonial.php" class="dropdown-item">feedback_reviews</a>
                           
                        </div>
                    </div>
                     <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="confirm.php" class="nav-item nav-link">LOGIN/REGISTER</a>
                </div>
                <a href="login/p_login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"style="background: #61045f">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
        
        
        <div class="container">
<table class="table1" border=2px;>
	<tr>
		<th><a href="login/login_a.php">Admin</a></th>
		<th><a href="login/login_s.php">Job Seeker</a></th>
		<th><a href="login/login_p.php">Job Provider</a></th>
	</tr>
</table>
</div>
</body>
</html>
