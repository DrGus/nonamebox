<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>TMP Home</title>

    <?php/* STYLES CSS */ ?>
    <link rel="stylesheet" href="<?=public_url()?>res/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?=public_url()?>res/bootstrap/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="<?=public_url()?>css/nnb-frontstyle.css"/>
    <?php/* STYLES CSS */ ?>
  </head>
  <body>
    <nav id="nnb-preheader" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="row">
            <div class="col-xs-6">
              <span class="nnb-linkcontainer"><a href="#">ES</a> / <a href="#">EN</a></span>
            </div>
            <div class="col-xs-6 nnb-right">
              <span class="nnb-linkcontainer"><a href="#">Login</a></span>
            </div>
            <div class="clearfix"></div>
          </div>
      </div><!-- nav/.container -->
    </nav><!-- #nnb-preheader -->
    <nav id="nnb-header" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">NoNameBox</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!-- nav/.container/.navbar-collapse -->
      </div><!-- nav/.container -->
    </nav>

    <div class="container nnb-page-content">
      <div class="starter-template">
        <h1>Hello World!</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum facilisis aliquet sodales. Nulla massa lacus, scelerisque sodales consectetur et, vestibulum non diam. Nulla ullamcorper eros non sem auctor mattis. Nullam faucibus lacinia lectus, ac consectetur est sagittis quis. Nullam sit amet sapien justo. In in lacinia quam, at aliquet ligula. Proin turpis lectus, finibus viverra nunc mollis, dignissim venenatis quam. Nulla et scelerisque ipsum. Donec aliquam aliquet elit eu ullamcorper. Nulla facilisi. Vestibulum mollis lacus ipsum, non accumsan arcu consectetur nec. Cras ante erat, consequat consequat mattis eget, aliquam sed dui. Ut sollicitudin tempus orci sed consequat. </p>
      </div>

    </div><!-- /.container -->


    <footer class="footer">
      <div class="container">\
      </div><!-- footer/.container -->
    </footer>

      <?php/* SCRIPTS JS */ ?>
      <script src="<?=public_url()?>res/jquery/jquery-3.1.1.min.js" type="text/javascript"></script>
      <script src="<?=public_url()?>res/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <?php/* SCRIPTS JS */ ?>
  </body>
</html>
