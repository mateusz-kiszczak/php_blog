<?php include 'config/config.php'; ?>
<?php include 'libraries/Database.php'; ?>
<?php include 'helpers/format_helper.php'; ?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">

    <title>Blog made with PHP, MySQL and Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="style/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/custom.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Home</a>
          <a class="blog-nav-item" href="posts.php">All Posts</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <div class="blog-header__logo">
          <img src="images/php-logo.png" alt="PHP Logo">
        </div>
        <div class="blog-header__title-wrapper">
          <h1 class="blog-title">PHP Blog</h1>
          <p class="lead blog-description">PHP news, tutorials, videos and more</p>
        </div>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
          