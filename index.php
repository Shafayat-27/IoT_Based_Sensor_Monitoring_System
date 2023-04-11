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
    <title>Table with database</title>
</head>
<body>
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark h2">
                <a class="navbar-brand" href="index.php">Temperature Monitoring System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="index.php?page=temp_log">Temp Log</a>
                    <a class="nav-link" href="index.php?page=alerm_log">Alerm Log</a>
                    </div>
                </div> -->
            </nav>   
            <div class="row mb-5">
                <div class="col-2">

                    <div class="vertical-nav bg-white" id="sidebar">

                        <p class="text-gray font-weight-bold text-uppercase text-center my-5">Dashboard</p>

                        <ul class="nav flex-column bg-white mb-0">
                            <li class="nav-item">
                            <a href="index.php" class="nav-link text-dark bg-light">
                                        <i class="mr-3 text-primary fa-fw"></i>
                                        <span class="sr-only">(current)</span>
                                        Home
                                </a>
                        </li>
                        <li class="nav-item">
                        <a href="index.php" class="nav-link text-dark">
                                    <i class="mr-3 text-primary fa-fw"></i>
                                    <span class="sr-only">(current)</span>
                                    About
                                </a>
                        </li>
                        <li class="nav-item">
                        <a href="index.php?page=temp_log" class="nav-link text-dark">
                                    <i class="mr-3 text-primary fa-fw"></i>
                                    Temp Log
                                </a>
                        </li>
                        <li class="nav-item">
                        <a href="index.php?page=alarm_log" class="nav-link text-dark">
                                    <i class="mr-3 text-primary fa-fw"></i>
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
                }else{
                    echo "  <div class='row'>
                                <div class='col-12 text-center my-5'>
                                    <p class='h3'>Welcome to Temperature Sensor Monitoring System</p>
                                </div>
                            </div>
                            <div class='row justify-content-center'>
                                <img style='height: 400px; width: 400px;' src='temp.jpg' alt='image'>
                            </div> ";   
                    
                }             
                
                ?>
                </div>
            </div>
            <div class="row" style="background-color: #EAF7F8; height: 25em;">
                <div class="col-6 h2 p-5 justify-content-center">
                    <p class="">
                        Temperature Monitoring System
                    </p>
                </div>
                <div class="col-2"></div>
                <div class="col-4 p-5 justify-content-start">
                    <p>Contatct Us</p>
                    <p>Email: example@gmail.com</p>
                    <p>Mobile: 01928378276784</p>
                    <p>Address: 11/A Motijheel,Dhaka</p>
                </div>
            </div>
             
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>