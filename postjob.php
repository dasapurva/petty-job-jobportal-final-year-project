<?php
session_start();
?>

<html>
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
        <style>
        *{
    margin: 0;
    padding: 5;
    max-width: 10000px;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    
    align-items: center;
    justify-content: center;
    height: 100vh;
}
.container{
   
    
    margin: 40px 250px ;
    box-shadow: 0 15px 20px #ABB2B9;
}
h2{
    font-size: 26px;
    font-weight: 600;
    text-align: left;
    color: #2f4f4f;
    padding-bottom: 8px;
    border-bottom: 1px solid silver;
}
.alert{
    font-size: 26px;
    font-family: Cursive,sans-serif;
    max-width:9000px;
    height: 10vh;
    padding: 10px;
    margin: 10px;
    box-shadow: 0px 15px 20px #ABB2B9;
	
}

.content{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
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
        
        <title>posting job</title>
        
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
                <a href="login/postjob.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"style="background: #61045f">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
    
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <h2><b>Post Job</b></h2>
                <div class="content">
                    <div class="input-box">
                        <label for="title">Job Title</label>
                        <input type="text" placeholder="Enter Job Title" name="title" required>
                    </div>
                    <div class="input-box">
                        <label for="location">Location</label>
                        <input type="location" placeholder="Enter location" name="location" required>
                    </div>
                    <div class="input-box">
                        <label for="spendit">Mobile number</label>
                        <input type="tel" placeholder="enter mobile number" name="mobile" required>
                    </div>
                    <div class="select">
                           
                          <label for="categories">Categories</label>
                      	
                       	  
                       	  <select class="form-select border-3" name="cat">
                                <option selected>Category</option>
                                    <option value="1">plumber</option>
                                    <option value="2">electrician</option>
                                    <option value="3">painter</option>
                                     <option value="4">labour work</option>
                                    <option value="5">household</option>
                                     <option value="6">carpenter</option>
                                     <option value="7">pet worker</option>
                                     <option value="8">others</option>
                          </select>
                          </div>
                   
                    <div class="input-box">
                        <label for="spendit">Spendit</label>
                        <input type="tel" placeholder="amount" name="spendit" required>
                    </div>
                    <div class="input-box">
                        <label for="time_duration">Time Duration</label>
                        <input type="text" placeholder="Enter time duration" name="time_duration" required>
                    </div>
                    <div class="input-box">
                        <label for="jobdiscription">Job Discription</label>
                        <textarea rows="5" cols="37"  placeholder="Enter work experience" name="jobdiscription" required></textarea>
                     
                    </div>
                    <div class="button-container">
                        <input type="submit" class="btn "name="submit" value="submit">
                        
                    </div>
                </div>
            </form>
            <?php
            if(isset($_POST['submit']))
            {
            	
            	/*Array ( [title] => carpenter [location] => lacknow [mobile] => 85946232 [cat] => carpenter [spendit] => 1500 [time_duration] => 12hr [jobdiscription] => sofa kharab hua hai [submit] => submit )  */
            	$p=pg_connect("user=postgres dbname=pettyjobs password=Apuu@2002");
		if($p)
		{
			
			$q="insert into post_job(job_title, location,mob,category,stipend,time,job_d,userid,remarks) values('".$_POST['title']."','".$_POST['location']."','".$_POST['mobile']."','".$_POST['cat']."','".$_POST['spendit']."','".$_POST['time_duration']."','".$_POST['jobdiscription']."',".$_SESSION['userid'].",0);";
			$r=pg_query($p,$q);
			if($r)
			{
				echo "Post ".$_POST['title']." job!!";
				echo "<script>window.location.href='job-list.php'</script>";
			}
		
		}
            }
            
            ?>
        </div>
    </body>
</html>
