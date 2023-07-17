<html>
    <head>
            <style>
        *{
    margin: 0;
    padding: 5;
    max-width: 10000px;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    background-image: url("background2.jpg");
    background-size: cover;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
.container{
   
   background-color: rgba(255, 255, 255, 0.8);
    margin: 40px 250px ;
    box-shadow: 0 15px 20px #ABB2B9;
}
h2{
    font-size: 26px;
    font-weight: 600;
    text-align: left;
     color: #000000;
    padding-bottom: 8px;
    border-bottom: 1px solid silver;
}

.content{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
    color: #000000;
}
.input-box{
    display: flex;
    flex-wrap: wrap;
    width: 50%;
    padding-bottom: 15px;
}
.input-box:nth-child(2n){
    justify-content: left;
}
.input-box input{
    height: 40px;
    width: 95%;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
}
.input-box input:is(:focus, :valid){
    box-shadow: 0 3px 6px rgba(0,0,0,0.2);
}
.button-container{
    margin: 15px 0;
}
.button-container button{
    
    margin-top: 20px;
    padding: 10px 258px;
    display: block;
    font-size: 20px;
    color: #fff;
    border: none;
    border-radius: 6px;
    background-image: linear-gradient(to right,#aa076b,#61045f);
}
.select{
   display: flex;
    flex-wrap: wrap;
    width: 50%;
    padding-bottom: 15px;
}    
.button-container
{   
    text-align: right;
    height: 0px;
    flex-wrap: wrap;
    width: 100%;
    padding-bottom: 15px;

}
.btn
{
	background-color:#61045f;
	color:white;
}     
</style>
 <title>registrationform jobprovider</title>
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
    
    
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <h2>Job Provider Registration</h2>
                <div class="content">
                <div class="content">
                
	
                    <div class="input-box">
                    
                        <label for="name">Full Name</label>
                        <input type="text" placeholder="Enter Full Name" name="name" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter email" name="email" required>
                    </div>
                    <div class="input-box">
                        <label for="contactnumber">Contact Number</label>
                        <input type="tel" placeholder="Enter contact number" name="contactnumber" required>
                    </div>
                    <div class="input-box">
                        <label for="adharno">Adharcard Number</label>
                        <input type="text" placeholder="Enter Adharcard no" name="adharno" required>
                    </div>
              
                    
                    <div class="input-box">
                        <label for="address">Address</label>
                        <input type="text" placeholder="Enter Address" name="address" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Enter password" name="password" required>
                    </div>
                    <div class="input-box">
                        <label for="Cpassword">Confirm Password</label>
                        <input type="password" placeholder="Enter Confirm password" name="Confirm password" required>
                    </div>
                    <div class="button-container">
                        <input type="submit" name="submit" value="register">
                    </div>
                </div>
                <?php 
                if(isset($_POST['submit']))
            	{
                	print_r($_POST);
                	/*Array ( [name] => asd [email] => sad@gmail.com [contactnumber] => 456 [adharno] => 312 [description] => asd [address] => 21122 [password] => askag [Confirm_password] => aksdg [submit] => register ) */
                	if($_POST['password']!=$_POST['Confirm_password'])
                	{
                		echo "Passwords doesn't match";
                        }
                        else
                        {
                        	/*create table user_r(name varchar(20),email varchar(40), mob varchar(20), adr_no varchar(20),password varchar(40),user_id SERIAL primary key);
                        */
                        $p=pg_connect("user=postgres dbname=pettyjobs password=Apuu@2002");
			if($p)
			{	
                        	$r="insert into user_r(name,email,mob,adr_no,password) values('".$_POST['name']."','".$_POST['email']."','".$_POST['contactnumber']."','".$_POST['adharno']."','".$_POST['password']."')";
                        	$e=pg_query($p,$r);
                        	if($e)
                        	{
                        		
                        		$r1="select user_id from user_r where name='".$_POST['name']."'";
                        		$e=pg_query($p,$r1);
                        		$array=pg_fetch_array($e);
                        			
                        		$r2="insert into j_login(userid, username,password,access) values(".$array[0].",'".$_POST['email']."','".$_POST['password']."','provider');";
                        		$e=pg_query($p,$r2);
                        		if($e)
                        		{
                        		echo "registered";
                        		echo "<script>window.location.href='login_p.php'</script>";
                        		}
                        	}
                        }
                
                	}
                }
                ?>
            </form>
        </div>
    </body>
</html>
