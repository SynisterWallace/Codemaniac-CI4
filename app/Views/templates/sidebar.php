<!doctype html>
<html lang="en">
  <head>
  	<title>Code Maniac</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= base_url('css/sidebar.css') ?>">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>	
  <div class="wrapper d-flex align-items-stretch">
    
	<nav id="sidebar">
	    <div class="p-2 pt-5  position-fixed">
		  	<h1><a href="index" class="logo ml-3"><img src="<?= base_url("images/logocodemaniac.svg")?>"style="max-width:250px; width:100%"></a></h1>
            <div class="d-flex justify-content-center" >
                <ul class="navigation" style=" margin-top:4em;">
                    <li>
                        <a class="nav-link active" href="<?= site_url().'/MainController/index';?>" >Dashboard</a>
                    </li>
                    <li>
                        <a  class="nav-link" href="<?= site_url().'/MainController/courses';?>">Courses</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= site_url().'/MainController/friends';?>" >Friends</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Exercises</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Achievement</a>
                    </li>
                </ul>
            </div>
            <div class="sticky-bottom position-absolute d-flex justify-content-xl-center" style="margin-top:10rem; margin-left:50px; padding:0;" >
                <div class="row">
                    <div class="col-sm-4">
                        <a href="index.html" class="logo"><img src="<?php echo base_url("images/profile.jpg")?>"style="max-width:50px; width:100%; border-radius:50%"></a>
                    </div>
                    <div class="col">
                        <h2 class="h6">Makhdoum T.</h3>
                        <h2 class="h6">Level 1</h3>
                    </div>
                </div> 
            </div>   
	    </div>
        
    </nav>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>