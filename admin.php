
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
background-color: #FFFFFF;
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
                        $p=pg_connect("user=postgres dbname=pettyjobs password=Apuu@2002");
			if($p)
			{
				
			}
?>
<div id="mySidenav" class="sidenav">
<p class="logo">Petty Job</p>
<a href="admin.php" class="icon-a"><i class="fa fa-dashboard icons "></i> &nbsp;&nbsp;Dashboard</a>
<a href="job_seeker.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Jobseekers</a>
<a href="job_pro.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Job providers</a>
<a href="post_job.php"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Post Jobs</a>
<a href="applied.php"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Applied jobs</a>
<a href="index.php"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp; HomePage</a>
<hr>
</div>

<div id="main">
<div class="head">
<div class="col-div-6">

<span  class="text" style= "font-size:40px;cursor:pointer;color: #61045f;" class="nav" >&#9776; Dashboard</span>
</div>
<div class="col-div-6">
<br/>
<div class="col-div-3">
<div class="box">
<p>
<?php 
	$r="select count(name) from user_r;";
	$p1=pg_query($p,$r);
	$t1=pg_fetch_row($p1);
	echo $t1[0];
?>
<br/><span>USERS</span></p>
<i class="fa fa-users box-icon"></i>
</div>
</div>
<div class="col-div-3">
<div class="box">
<p><?php 
	$r="select count(job_title) from post_job";
	$p1=pg_query($p,$r);
	$t1=pg_fetch_row($p1);
	echo $t1[0];
?>
<br/><span>POST</span></p>
<i class="fa fa-list box-icon"></i>
</div>
</div>
<div class="col-div-3">
<div class="box">
<p>
<?php 
	$r="select count(job_title) from post_job where a_u_id is not null;";
	$p1=pg_query($p,$r);
	$t1=pg_fetch_row($p1);
	echo $t1[0];
?>

<br/><span>APPLIED FOR JOB</span></p>
<i class="fa fa-shopping-bag box-icon"></i>
</div>
</div>
<div class="col-div-3">
<div class="box">
<p>
<?php 
	$r="select count(job_title) from post_job where a_u_id is null;";
	$p1=pg_query($p,$r);
	$t1=pg_fetch_row($p1);
	echo $t1[0];
?>
<br/><span>UNAPPLIED JOBS</span></p>
<i class="fa fa-tasks box-icon"></i>
</div>
</div>
<div class="clearfix"></div>
<br/><br/>
<div class="col-div-8">
<div class="box-8">
<div class="content-box">


</body>
</html>
