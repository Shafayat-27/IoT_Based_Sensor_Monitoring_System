<?php
require 'include/dbcon.php';
global $conn;
$page = !empty($_GET['page']) ? $_GET['page'] : "";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Table with database</title>
</head>
<body>
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark h2">
                <a class="navbar-brand" href="index.php">Sensor Monitoring System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>   
            <div class="row mb-5">
                <div class="col-2">

                    <div class="vertical-nav bg-white" id="sidebar">

                        <p class="text-gray font-weight-bold text-uppercase text-center my-5">Dashboard</p>

                        <ul class="nav flex-column bg-white mb-0">
                            <li class="nav-item">
                            <a href="index.php" class="nav-link text-dark bg-light">
                                        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                                        <span class="sr-only">(current)</span>
                                        Home
                                </a>
                        </li>
                        <li class="nav-item">
                        <a href="index.php?page=about" class="nav-link text-dark">
                                    <i class="mr-3 text-primary fas fa-info-circle"></i>
                                    <span class="sr-only">(current)</span>
                                    About
                                </a>
                        </li>
                        <li class="nav-item">
                        <a href="index.php?page=temp_log" class="nav-link text-dark">
                                    <i class="mr-3 text-primary fas fa-thermometer-half"></i>
                                    Temp Log
                                </a>
                        </li>
                        <li class="nav-item">
                        <a href="index.php?page=alarm_log" class="nav-link text-dark">
                                <i class="mr-3 text-primary fa fa-ban" aria-hidden="true"></i>
                                    Alarm Log
                                </a>
                        </li>
                        </ul>
                    </div>

                </div>
                <div class="col-10">
                <?php
                if($page=="temp_log"){
                    include "pages/temp_log.php";
                }else if($page=="alarm_log"){
                    include "pages/alarm_log.php";
                }else if($page=="about"){
                    include "pages/about.php";
                }else{
                    echo "  <div class='row'>
                                <div class='col-12 text-center my-5'>
                                    <p class='h3'>Welcome to Sensor Monitoring System</p>
                                </div>
                            </div>
                            <div class='row justify-content-center'>
                                <img style='height: 400px; width: 400px;' src='temp.jpg' alt='image'>
                            </div> ";   
                    
                }             
                
                ?>
                </div>
            </div>
            <footer>
                <div class="row alert alert-primary my-0">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <h4>Sensor Monitoring System</h4>
                        <p>
                        Sensor monitoring system is a technology that uses various types of sensors to monitor and collect data from different physical environments. 
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <h4>Contact Us</h4>
                        <ul class="list-unstyled">
                        <li><i class="fa fa-map-marker"></i> 1234 Main Street, Uttara, Dhaka</li>
                        <li><i class="fa fa-phone"></i> 555-123-4567</li>
                        <li><i class="fa fa-envelope"></i> info@example.com</li>
                        </ul>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <h4>Follow Us</h4>
                        <ul class="list-unstyled">
                        <li><a href="#"><i class="fab fa-facebook"></i></a> facebook</li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a> twitter</li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a> instagram</li>
                        </ul>
                    </div>
                </div> 
                <div class="row alert alert-primary my-0">
                    <div class="col-md-12">
                        <p class="text-center">&copy; 2023 Sensor Monitoring System. All Rights Reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>