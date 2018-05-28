<!DOCTYPE html>
<html lang="en">

<head>
  <title>ETH - BTCZ mining calculator</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta charset="utf-8">
  <meta name="author" content="Dmitry Volkov">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon" href="icon/favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Jura:600,700%7CRoboto:300,400,500,700" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="css/linearicons.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="css/base.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/main-color1.css">


  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.marquee.min.js"></script>
  <script src="js/smooth-scroll.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.parallax.min.js"></script>
  <script src="js/scrolla.jquery.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/main.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-resource.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bignumber.js/2.0.7/bignumber.js"></script>

  <script src="data/eth.json"></script>
  <script src="data/btcz.json"></script>



</head>

<body class="body" data-spy="scroll" data-target=".header" data-offset="60">

  <!-- about -->
  <section id="about" class="about about--arrow section--gradient">
    <div class="container">
      <div class="row">

        <div class="col-xs-12">

          <div class="about__text">

            <div class="row eth-calculator-row">
              <p><b>ETH</b> Caculate ETH mining profitability</p><br/>
              <?php include 'calculators/mining-calculator-alpha.php'; ?>
            </div>

          </div>

        </div>

      </div>
    </div>
  </section>
  <!-- end about -->

</body>

</html>
