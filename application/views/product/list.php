<?php
  /*foreach ($records as $row) {
    echo $row->memberID."  ".$row->account."   ".$row->name;
  }*/

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>halloween</title>

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style3.css'); ?>">
  </head>
  <body>
      <div class="container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="navbar-header" >
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar "></span>
              <span class="icon-bar "></span>
              <span class="icon-bar "></span>
            </button>
            <a class="navbar-brand" href="#">HALLOWEEN</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">frist page</a></li>
              <li><a href="#">products</a></li>
              <li><a href="#">contect-us</a></li>
              <li><a href="#">about-us</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <section class="container-fluid banner" >
        <img src="<?php echo base_url('assets/images/halloween-banner.jpg'); ?>" style="position:relative; top:0;left:0;" width="100%" alt="">
        <h1 style="position:relative; top:200px;">萬聖節</h1>
      </section>
      <section class="container-fluid">

          <div class="col-md-4">
            <img src="<?php echo base_url('assets/images/halloween-banner.jpg'); ?>" width="100%" alt="">
            <p>射擊遊戲</p>
          </div>
          <div class="col-md-4">
            <img src="<?php echo base_url('assets/images/halloween-banner.jpg'); ?>" width="100%" alt="">
          </div>
          <div class="col-md-4">
            <img src="<?php echo base_url('assets/images/halloween-banner.jpg'); ?>" width="100%" alt="">
          </div>



      </section>


  </body>
</html>
