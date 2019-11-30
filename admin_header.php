<?php
include 'db.php';
session_start();
if(empty($_SESSION["user_name"])){
  header("Location:admin_login.php");
}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title></title>

    <style type="text/css">
      @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);body{background:lightgray}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-default .navbar-nav #user-profile{height:50px;padding-top:15px;padding-left:58px}.navbar-default .navbar-nav #user-profile img{height:45px;width:45px;position:absolute;top:2px;left:8px;padding:1px}#wrapper{padding-top:50px;padding-left:0;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease}@media (min-width:992px){#wrapper{padding-left:225px}}@media (min-width:992px){#wrapper #sidebar-wrapper{width:225px}}#sidebar-wrapper{border-right:1px solid #e7e7e7}#sidebar-wrapper{z-index:1000;position:fixed;left:225px;width:0;height:100%;margin-left:-225px;overflow-y:auto;background:#f8f8f8;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease}#sidebar-wrapper .sidebar-nav{position:absolute;top:0;width:225px;font-size:14px;margin:0;padding:0;list-style:none}#sidebar-wrapper .sidebar-nav li{text-indent:0;line-height:45px}#sidebar-wrapper .sidebar-nav li a{display:block;text-decoration:none;color:#428bca}.sidebar-nav li:first-child a{background:#92bce0!important;color:#fff!important}#sidebar-wrapper .sidebar-nav li a .sidebar-icon{width:45px;height:45px;font-size:14px;padding:0 2px;display:inline-block;text-indent:7px;margin-right:10px;color:#fff;float:left}#sidebar-wrapper .sidebar-nav li a .caret{position:absolute;right:23px;top:auto;margin-top:20px}#sidebar-wrapper .sidebar-nav li ul.panel-collapse{list-style:none;-moz-padding-start:0;-webkit-padding-start:0;-khtml-padding-start:0;-o-padding-start:0;padding-start:0;padding:0}#sidebar-wrapper .sidebar-nav li ul.panel-collapse li i{margin-right:10px}#sidebar-wrapper .sidebar-nav li ul.panel-collapse li{text-indent:15px}@media (max-width:992px){#wrapper #sidebar-wrapper{width:45px}#wrapper #sidebar-wrapper #sidebar #sidemenu li ul{position:fixed;left:45px;margin-top:-45px;z-index:1000;width:200px;height:0}}.sidebar-nav li:first-child a{background:#92bce0!important;color:#fff!important}.sidebar-nav li:nth-child(2) a{background:#6aa3d5!important;color:#fff!important}.sidebar-nav li:nth-child(3) a{background:#428bca!important;color:#fff!important}.sidebar-nav li:nth-child(4) a{background:#3071a9!important;color:#fff!important}.sidebar-nav li:nth-child(5) a{background:#245682!important;color:#fff!important}
    </style>
  </head>
  <body>
    <div id="navbar-wrapper">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Admin</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Admin-panel</a>
                    </div>
                    <div id="navbar-collapse" class="collapse navbar-collapse">

                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown">
                                <a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/avt.jpg" class="img-responsive img-thumbnail img-circle"><?php echo $_SESSION["user_name"];?></a>
                                <ul class="dropdown-menu dropdown-block" role="menu">

                                    <li><a href="admin_logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                            <span class="sidebar-title">Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="all_users.php">
                            <span class="sidebar-icon"><i class="fa fa-user"></i></span>
                            <span class="sidebar-title">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="all_advisors.php">
                            <span class="sidebar-icon"><i class="fa fa-male"></i></span>
                            <span class="sidebar-title">Advisors</span>
                        </a>
                    </li>
                    <?php if( $_SESSION["is_super_admin"]==1){ ?>
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Admins</span>
                        </a>
                    </li>
                  <?php }?>
                </ul>
            </aside>
        </div>
        <main role="main">