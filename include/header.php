<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Central Chest Clinic</title>
  <meta name="robots" content="noindex">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

  <link rel="stylesheet"href="../css/bootstrap/dist/css/bootstrap.min.css" type="text/css"/>
  <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../css/ionicons.css" type="text/css" />
  <link rel="stylesheet" href="../css/AdminLTE.css" type="text/css" />
  <link rel="stylesheet" href="../css/style.css" type="text/css" />
  <link rel="stylesheet" href="../css/dataTables.bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="../css/alertify.min.css"/>
  <link rel="stylesheet" href="../css/default.min.css"/>
  <link rel="stylesheet" href="../css/morris.css"/>
  <link rel="stylesheet" href="../css/jquery-ui.css"/>
  <link rel="stylesheet" href="../css/jasny.min.css"/>
  
  <script type="text/javascript" src="../jquery/alertify.min.js"></script>
  <script type="text/javascript" src="../js/barcode.min.js"></script>
  <script type="text/javascript" src="../jquery/jquery.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../css/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../jquery/raphael-min.js"></script>
  <script type="text/javascript" src="../jquery/morris.min.js"></script>    
  <script type="text/javascript" src="../js/app.js"></script>
  <script type="text/javascript" src="../js/date.js"></script>
  <script type="text/javascript" src="../js/mouseover_popup.js"></script>
  <script type="text/javascript" src="../jquery/jquery-ui.js"></script>
  <script type="text/javascript" src="../js/jasny.min.js"></script>
  <script type="text/javascript" src="../js/jspdf-debug.js"></script>
  <script type="text/javascript" src="../js/fileSaver.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $.ajax({
        type: "GET",
        url: "../user/header/data",
        success: function( data, textStatus, jQxhr ){
          data = JSON.parse(data);
          name = data[0]['firstname']+"  "+data[0]['lastname'];
          nameall = name + "<br/>" + data[0]['type'];
          namea = name + '<i class="caret"></i>';
          $("#usrname").html(nameall);
          $("#huname").html(namea);
          $("#huname2").html(name);
          $("#nicc").html(data[0]['nic']);
          if(data[0]['pic_path']){
            $("#profimage").prop('src', '../'+data[0]['pic_path']);
            $("#proffimage").prop('src', '../'+data[0]['pic_path']);
          }
        },
        error: function( jqXhr, textStatus, errorThrown ){
        }
      });
    });
  </script>

</head>

<body class="skin-blue">

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
      
      <!-- START OF INFORMATION BOX-->
      <div class="navbar-right">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li id="headc" class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-user"></i>
              <span id="huname"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header bg-light-blue">
               <img id="profimage" src="../images/noavatar.png" class="img-circle" alt="User Image" />
               <p id="usrname">
                
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="../login/delete/" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- END OF NAVIGATION BOX -->
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
          <div style="display: none; position: absolute; z-index: 110; left: 400; top: 100; width: 15; height: 15" id="preview_div"></div>

          <img id="proffimage" src="../images/noavatar.png" class="img-rounded" onmouseover="showtrail('../images/noavatar.png','',400,400)" onmouseout="hidetrail()"/>

        </div>
        <div class="pull-left info">
          <p id="huname2"></p>
	  <p hidden id="nicc"></p>

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
