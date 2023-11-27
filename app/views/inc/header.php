<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin.css">
  <title><?php echo SITENAME; ?></title>
  <style>
    .thumb{
      align-self:center; 
       
      width:407px;
      display: block;
      align-items: center;
      /* height:60px; */
    }
    .myPub-thumb{
      align-self:center; 
       
      width: 241px;
      display: block;
      align-items: center;
      /* height:60px; */
    }

  </style>
</head>
<nav class="navbar-container">
    <div class="left">
      <h2 class="logo">Hachami_Avito </h2>
    </div>
    <div class="right">
      <?php if(isset($_SESSION['user_id'])) : ?>
      <a href="<?php echo URLROOT; ?>/users/profile/<?php echo $_SESSION['user_id'];?>"><img src="<?php echo URLROOT . "/img/" . $_SESSION['user_img']; ?>" alt="" srcset="" class="profile-img"></a>
          <a class="login-btn" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
      <?php else : ?>
      <a class="sign-btn" href="<?php echo URLROOT; ?>/users/register">Sign In</a>
      <a class="login-btn" href="<?php echo URLROOT; ?>/users/login">Login In</a>
      <?php endif; ?>
    </div>
    
</nav>
<body>
  
