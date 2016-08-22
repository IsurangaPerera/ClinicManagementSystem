<?php
$nic = $_SESSION['nic'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Central Chest Clinic</title>
  <meta name="robots" content="noindex">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

  <link href="../css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="../css/ionicons.css" rel="stylesheet" type="text/css" />
  <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.11/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/alertify.min.css"/>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/default.min.css"/>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  
  <script src="//cdn.jsdelivr.net/alertifyjs/1.8.0/alertify.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
  <script src="../css/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>    
  <script src="../js/app.js" type="text/javascript"></script>
  <script src="../js/date.js" type="text/javascript"></script>

</head>

<body class="skin-blue">
  <!-- header logo: style can be found in header.less -->
  <script language="javascript">
  setTimeout(function timeru(){$('.alert').fadeOut(1000)}, 3000);
  </script> 
  <header class="header" style="background: url('../images/header_bar.jpg') repeat-x; background-size: 100% 100%; border-bottom:1px solid #CCC">
    <a href="#" class="logo">
      <!-- Add the class icon to your logo image or logo icon to add the margining -->
      <div class="logo-pms"><img src="../images/logo.png" height="40"></div>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation" style="background: url('../images/header_bar_02.jpg') repeat-x; background-size: 100% 100%; border-bottom:1px solid #CCC">
      <!-- Sidebar toggle button-->
      <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="logo2"> Healthcare Management System</div>
      <div class="navbar-right">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li id="headc" class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-user"></i>
              <span><?php echo $_SESSION['user_name']; ?><i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header bg-light-blue">
               <img src="<?php echo "../images/$nic"; ?>" class="img-circle" alt="User Image" />
               <p id="usrname">
                <?php echo $_SESSION['user_name']; ?> <br /> <?php echo $_SESSION['user_type']; ?> 
              </p>                                   </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="config/logout.php" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>        
<div class="wrapper row-offcanvas row-offcanvas-left">
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="left-side sidebar-offcanvas">                
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo "../images/$nic"; ?>" class="img-rounded" alt="User Image" />

        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['user_name']; ?></p>

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>