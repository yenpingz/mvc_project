<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>frontpage</title>

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/parallax.min.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/myscript.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style3.css'); ?>">

  </head>
  <body>
    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('assets/images/halloween-banner.jpg'); ?>">
      <div class="container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top mynav">
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
            <ul class="nav navbar-nav navbar-right" style="margin-right:20px;">
              <li><a href="#">frist page</a></li>
              <li><a href="#">products</a></li>
              <li><a href="#">contect-us</a></li>
              <li><a href="#">about-us</a></li>
            </ul>
          </div>
        </nav>
      </div>
        <div  class="text-left">
          <h1 style="color:white; font-weight:bloder;">萬聖節</h1>
          <h1 style="color:white; font-weight:bloder;">HALLOWEEN</h1>
          <a href="#" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </div>

    <div class="window-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo base_url('assets/images/fire.png'); ?>" width="100%" alt="">
          </div>
          <div class="col-md-6 text-center" style="color:white">
            <h2>456</h2>
            <p>123</p>
          </div>
        </div>
      </div>
    </div>

    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('assets/images/halloween-section.png'); ?>">
      <div  class="text-right">
        <h1 style="color:white; font-weight:bloder;">萬聖節</h1>
        <h1 style="color:white; font-weight:bloder;">HALLOWEEN</h1>
        <a href="#" class="btn btn-primary btn-lg">Learn More</a>
      </div>
    </div>

    <div class="window-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                member name list
              </a>
              <?php foreach ($records as $row) {?>
              <a href="#" class="list-group-item"><?php echo $row->name; ?></a>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                Cras justo odio
              </a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                Cras justo odio
              </a>
              <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('assets/images/ice.jpg'); ?>"></div>
    <div class="window-wrapper">
      <div class="container text-center">
        <div class="jumbotron">
          <h1 class="display-3">Hello, world!</h1>
          <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <hr class="my-4">
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
          </p>
        </div>
      </div>
    </div>

    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('assets/images/section.jpg'); ?>"></div>
    <div class="window-wrapper">
      <div class="container text-center" id="footer">
          <p>Copyright &copy; 2017 by test demo </p>
      </div>
    </div>


  </body>
</html>
