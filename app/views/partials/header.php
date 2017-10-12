<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://localhost/se_addmission/vendors/css/bootstrap.min.css">
    <title><?php echo "$pageName"; ?></title>
    <script src="http://localhost/se_addmission/vendors/js/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="http://localhost/se_addmission/vendors/js/popper.min.js" charset="utf-8"></script>
    <script src="http://localhost/se_addmission/vendors/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="http://localhost/se_addmission/vendors/js/jquery.dataTables-1.10.16.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="http://localhost/se_addmission/vendors/css/jquery.dataTables-1.10.16.min.css" />
    <link rel="stylesheet" href="http://localhost/se_addmission/vendors/css/site.css">
</head>
<body>
    <nav class="container-fluid navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admission Registration</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navs start -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL?>/Login/logout">Log out</a>
                </li>
            </ul>
            <!-- Navs Ends -->
        </div>
    </nav>
<div class="container-fluid" id="content" >
    <div class="row">
        <div class="col-3" id="sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link active">University</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Unit</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Session</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Subject</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Subject type</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Board</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Student quota</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Form sell</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Procedure list</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Unit procedure list</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Unit procedure status</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Cost</a>
                </li>
            </ul>
        </div>
