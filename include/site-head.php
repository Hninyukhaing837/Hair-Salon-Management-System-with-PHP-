<?php include "session.php"; ?>


</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-light bg-gradient-x-grey-blue">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="index.php">
              <img class="brand-logo" src="images/site/logo-30.png" style="width: 25px;">
              <h2 class="brand-text">HAIR SALON</h2>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block">
              <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a>
            </li>
          </ul>

          <ul class="nav navbar-nav float-right">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src="images/site/users.png" alt="avatar"><i></i></span>
                <span class="user-name"><?php echo $_SESSION['name']; ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="edit_profile.php">
                  <i class="ft-user"></i> Edit Profile
                </a>
                <a class="dropdown-item" href="http://mimsmyanmar.com:2095" target="_blink">
                  <i class="ft-mail"></i> Web Inbox
                </a>
                <a class="dropdown-item" href="http://mimsmyanmar.com" target="_blink">
                  <i class="ft-globe"></i> MIMBER
                </a>
                <a class="dropdown-item" href="http://kohtet.com" target="_blink">
                  <i class="ft-user"></i> MMS - IT
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.php"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="disabled navigation-header">
          <span>General</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
          data-original-title="General"></i>
        </li>

        <li class="nav-item" id="dashboard">
          <a href="index.php">
            <i class="ft-home primary"></i>
            <span class="menu-title" data-i18n="">Home</span>
          </a>
        </li>
        <?php

        if ($_SESSION["role"] == 1) { ?>

        <li class="nav-item" id="all-list">
          <a href="user_reg.php">
            <i class="ft-users primary"></i>
            <span class="menu-title" data-i18n="">Register</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="finance.php">
            <i class="ft-plus-circle primary"></i>
            <span class="menu-title" data-i18n="">Finance</span>
          </a>
        </li>


        <li class="nav-item">
          <a href="add_services.php">
            <i class="ft-plus-circle primary"></i>
            <span class="menu-title" data-i18n=""> Add Services</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="check_out.php">
            <i class="ft-check-square primary"></i>
            <span class="menu-title" data-i18n=""> Check Out</span>
          </a>
        </li>


      <?php }else if ($_SESSION['role'] == 3) { ?>
        <li class="nav-item">
          <a href="check_list.php">
            <i class="ft-list primary"></i>
            <span class="menu-title" data-i18n=""> List</span>
          </a>
        </li>

      <?php }else { ?>
        <li class="nav-item">
          <a href="check_out.php">
            <i class="ft-check-square primary"></i>
            <span class="menu-title" data-i18n=""> Check Out</span>
          </a>
        </li>
      <?php } ?>

        <li class="nav-item" id="settings">
          <a href="login.php">
            <i class="ft-unlock primary"></i>
            <span class="menu-title" data-i18n="">Logout</span>
          </a>
        </li>
      </ul>

    </div>
  </div>
  <div class="app-content content">
    <div class="content-wrapper" >
      <div class="content-header row"></div>
        <div class="content-body">
