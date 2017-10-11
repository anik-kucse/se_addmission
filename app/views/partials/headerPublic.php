<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://localhost/se_addmission/vendors/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/se_addmission/vendors/css/site.css">
    <title><?php echo "$pageName"; ?></title>
    <script src="http://localhost/se_addmission/vendors/js/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="http://localhost/se_addmission/vendors/js/popper.min.js" charset="utf-8"></script>
    <script src="http://localhost/se_addmission/vendors/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
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
                <a class="nav-link" href="<?php echo BASE_URL?>/Registration">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL?>/Login">Login</a>
            </li>
        </ul>
        <!-- Navs Ends -->
    </div>
</nav>
<div class="container-fluid" id="content">
