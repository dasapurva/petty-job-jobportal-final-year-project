<?php
session_start();
$_SESSION['userid']='q';
?>
<html>
  <head>
    <title>Login</title>
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
      body {
        background-image: url("background1.jpg");
        background-size: cover;				/*to fit image in whole screen otherwise , it shows multiple images(9)*/
        font-family: Arial, sans-serif;
      }
       .login-box {
        background-color: rgba(255, 255, 255, 0.8);	/*it gives whole block of login color */
        border-radius: 10px;				/*gives curves to corners of border*/
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.3);
        padding: 20px;
        margin: auto;
        margin-top: 85px;				/*changes in height can be done from here */
        width: 400px;
        height:500px;					/*change in weidth can be done from here */
        text-align: center;				/*center*/
      }
      .form-group {					/*here grouping is done of username and text box*/
        margin-bottom: 10px;
      }
      .form-group label {
       display: block;
       font-size: 16px;					/*font reduces to 16 pixcels*/
       font-weight: bold;				/*font widthness*/
        margin-bottom: 5px;
        text-align: left;
      }
     .form-group input[type="text"],
        .form-group input[type="password"] {		/*grouping of text box and password done to make same changes*/
        width: 100%;					/*textbox widthness*/
        padding: 10px;
        border: none;  					/*removes unwanted border of text box*/
        border-radius: 3px;				/*textbox curves*/
        box-sizing: border-box;
        background-color: #f2f2f2;
        margin-bottom: 10px;
        font-size: 16px;
        color: #444;
      }
      .form-group button[type="submit"] {	
        background-color: #007bff;
        border: none;  
        border-radius: 3px;
        color: #fff;
        cursor: pointer;  
        font-size: 16px;
        padding: 10px;
        width: 100%;
        margin-top: 10px;
      }
      .register-link {
        font-size: 14px;
        margin-top: 10px;
        text-align: center;
        color: #bc5a45;
      }
      .register-link a {
        color: #34A853; 				/*color for the link*/
        text-decoration: none;
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
                    <a href="../index.php" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#####" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="../job-list.php" class="dropdown-item">Job List</a>
                            <a href="../category.php" class="dropdown-item">Job Category</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="login_a.php" class="dropdown-item">Admin</a>
                            <a href="../testimonial.php" class="dropdown-item">feedback_reviews</a>
                            
                        </div>
                    </div>
                     <a href="../about.php" class="nav-item nav-link">About</a>
                    <a href="../contact.php" class="nav-item nav-link">Contact</a>
                    <a href="../confirm.php" class="nav-item nav-link">LOGIN/REGISTER</a>
                </div>
                <a href="../login/p_login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"style="background: #61045f">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
  
  
    <div class="login-box">			
      <h2>Login As Provider</h2>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <button type="submit" name="login">Login</button>
        </div>
        <?php 
        if(isset($_POST['login']))
		{
		
		$p=pg_connect("user=postgres dbname=pettyjobs password=Apuu@2002");
		
		
		if($p)
		{
			
			$q="select password from j_login where username='".$_POST['username']."';";
			$r=pg_query($p,$q);
			if(!$r)
			{
				echo "error!!";
			}
			$r1=pg_fetch_array($r);
			
			
			
			if(pg_num_rows($r)>0)
			{
				
				
				if($_POST['password']==$r1[0])
				{
					echo "yess";
					$r1="select userid from j_login where username='".$_POST['username']."'";
                        		$e=pg_query($p,$r1);
                        		$array=pg_fetch_array($e);
                        		$_SESSION['userid']=$array[0];
                        		echo $_SESSION['userid'];
                        		$_SESSION['type']='p';
					echo "<script>window.location.href='../admin.php'".$_SESSION['self']."'</script>";
					echo "<script>window.location.href='../admin.php'</script>";
				}
				else
				{
					echo "Invalid Password";
				}
			}
			else
			{
				echo "invalid UserName";
			}
		}
		else
		{
			echo "not connected";
		}
		}
        ?>
      </form>
      <div class="register-link">
        Don't have an account? <a href="r_jbp.php">Register now</a>
      </div>
    </div>
  </body>
</html>

