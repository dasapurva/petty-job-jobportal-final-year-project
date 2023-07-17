<!DOCTYPE html>
<html lang="en">

<?session_start();
$_SESSION['job_id']=0;
?>
<head>
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
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

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


	
        <!-- Header start -->
        <div class="container-fluid p-0" style="background: #61045f">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/joblistmain1.jpg" alt="###">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                   <h1 class="display-3 text-white mb-3 animated slideInDown">Job List</h1>
               
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
               </div>
        
        

        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s" style='font-size:70px;color:#61045f'>Job Listing</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <?php
                        $p=pg_connect("user=postgres dbname=pettyjobs password=Apuu@2002");
			if($p)
			{
				
				$q="select * from post_job;";
				$r=pg_query($p,$q);
				if(!$r)
				{
					echo "error!!";
				}
				$num=pg_num_rows($r);
				echo $num;
				for($i=0;$i<$num;$i++)
				{
					$t=pg_fetch_row($r);
					
					echo "<form action='job-detail.php' method='POST'><div class='job-item p-4 mb-4'>
                            <div class='row g-4'>"
                                    ."<div class='col-sm-12 col-md-8 d-flex align-items-center'>"."
                                        <img class='flex-shrink-0 img-fluid border rounded' src='img/joblist3.jpeg' alt='' style='width: 80px; height: 80px;'>
                                        <div class='text-start ps-4'>
                                            <h5 class='mb-3'>".$t['1']."</h5>
                                            <span class='text-truncate me-3'><i class='text-primary me-4'>Descrption:-</i>".$t[7]."</span>
                                            <span class='text-truncate me-3'><i class='fa fa-map-marker-alt text-primary me-2'></i> ".$t[2]."</span>
                                            <span class='text-truncate me-3'><i class='far fa-clock text-primary me-2'></i>part time</span>
                                            <span class='text-truncate me-0'><i class='far fa-money-bill-alt text-primary me-2'></i>".$t[5]."</span>
                                        </div>
                                    </div>
                                    <div class='col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center'>
                                         <div class='d-grid gap-2 d-md-block'>
				<a href='#' style='background: white'>For Apply>></a>
				<input type='submit' name='id' value='".$t[0]."' class='btn btn-secondary py-md-2 px-md-3' style='background: #61045f'></a>
				</div>
                                        
                                    </div>
                                </div>
                            </div></form>";
				}
				
			}
                    ?>
                    
    <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    
                        
                  
                    <div class="col-lg-4 col-md-4">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="about.php">About Us</a>
                        <a class="btn btn-link text-white-50" href="contact.php">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="about.php">help</a>
                       
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <h6 class="text-white mb-4">Contact</h6>
                        <p class="mb-9" style= "font-size: 20px;"><i class="fa fa-map-marker-alt me-3"></i>Alandi, pune, maharashtra,india</p>
                        <p class="mb-9" style= "font-size: 20px;"><i class="fa fa-phone-alt me-3"></i>12345678</p>
                        <p class="mb-9"style= "font-size: 20px;"><i class="fa fa-envelope me-3"></i>pettyjob@gmail.com</p>
                        
                    </div>
                    <div class="col-lg-3 col-md-6">

                        <div class="position-relative mx-auto" style="max-width: 400px;">
                        <a> Have account? Sign up then....</a>
                        <a href="confirm.php" class="btn btn-primary py-3 position-absolute top-2 end-2 mt-2 me-3"style="background: #61045f">Sign up<i class="fa fa-arrow-right ms-3"></i></a>
                         
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom">Petty job</a>, All Right Reserved. 
							
							
			Designed By <a class="border-bottom"><ol><li>Apurva bhajankumar das</li>
							     <li>Sakshi shivaji sathe</li></ol>
							     Under the guidence of PRO.ANIKET NAGANE
							     
										
							
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
      

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
