
<!Doctype HTML>
<html>
<head>
<!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<title></title>
<style>

body{
margin:0px;
padding: 0px;
background-color: #e8cae7;;
overflow: hidden;
font-family: system-ui;
}
.clearfix{
clear: both;
}
.logo{
margin: 0px;
font-size: 50px;
margin-left: 28px;
font-weight: bold;
color: white;
margin-bottom: 30px;
}
.logo span{
color: #f7403b;
}
.sidenav {
height: 100%;
width: 300px;
position: fixed;
z-index: 1;
top: 0;
left: 0;
background-color: #61045f;
overflow: hidden;
transition: 0.5s;
padding-top: 30px;
}
.sidenav a {
padding: 15px 8px 15px 32px;
text-decoration: none;
font-size: 20px;
color: #818181;
display: block;
transition: 0.3s;
}
.sidenav a:hover {
color: #f1f1f1;
background-color:#1b203d;
}
.sidenav{
position: absolute;
top: 0;
right: 25px;
font-size: 36px;
}
#main {
transition: margin-left .5s;
padding: 16px;
margin-left: 300px;
}
.head{
padding:20px;
}


.profile{
display: inline-block;
float: right;
width: 160px;
}

.profile p{
color: white;
font-weight: 500;
margin-left: 55px;
margin-top: 10px;
font-size: 13.5px;
}
.profile p span{
font-weight: 400;
font-size: 12px;
display: block;
color: #8e8b8b;
}
.col-div-3{
width: 25%;
float: left;
}
.box{
width: 85%;
height: 100px;
background-color: #272c4a;
margin-left: 10px;
padding:10px;
}
.box p{
font-size: 35px;
color: white;
font-weight: bold;
line-height: 30px;
padding-left: 10px;
margin-top: 20px;
display: inline-block;
}
.box p span{
font-size: 20px;
font-weight: 400;
color: #818181;
}
.box-icon{
font-size: 40px!important;
float: right;
margin-top: 35px!important;
color: #818181;
padding-right: 10px;
}


  </style>
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
</head>
<body>
<?php
                        $p=pg_connect("user=postgres dbname=pettyjobs password=Apuu@2002");
			if($p)
			{}
?>
<div id="mySidenav" class="sidenav">
<p class="logo">Petty Job</p>
<a href="admin.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
<a href="job_seeker.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Jobseekers</a>
<a href="job_pro.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Job providers</a>
<a href="post_job.php"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Post Jobs</a>
<a href="applied.php"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Applied jobs</a>
<a href="index.php"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Home Page</a>
<hr>
</div>
<div id="main">
<div class="head">
<div class="col-div-6">
	<h1>Job Providers</h1>
	<br>
	<table border=2px class="table table-hover">
	<tr>
	
	<th>Name</th>
	<th>Email</th>
	<th>Mobile Number</th>
	<th>Addhar Number</th>
	<th>Password</th>
	<th>User_id</th>
	
	</tr>
	<?php
		$r2="select * from j_login where access like 'provider';";
		$t2=pg_query($p,$r2);
		$num=pg_num_rows($t2);
		for($i=0;$i<$num;$i++)
		{
			echo "<tr>";
			$t22=pg_fetch_array($t2);
			$id=$t22[0];
			$r3="select * from user_r where user_id=".$id.";";
			$t3=pg_query($p,$r3);
			$t32=pg_fetch_array($t3);
			
			/*Array ( [0] => Apurva12 [1] => apurva@gmail.com [2] => 9864513 [3] => 852963741 [4] => akshay [5] => 3261 ) */
			if(isset($t32[3]))
			{
			for($j=0;$j<6;$j++)
			{
				echo "<td>".$t32[$j]."</td>";
			}
			echo "</tr>";
			}
		}
	
	?>
	</table>

</div>
</div>
</div>


</body>
</html>
