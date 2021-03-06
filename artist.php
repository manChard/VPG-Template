<?php defined('C5_EXECUTE') or die("Access Denied.");?>
<!DOCTYPE html>
<html lang="en">
  <!--Header starts-->
  <?php
    Loader::element('header_required');
    $this->addHeaderItem('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
    $this->addHeaderItem('<meta name="viewport" content="width=device-width, initial-scale=1">');
    // Bootstrap
    $this->addHeaderItem('<link href="' . $view->getThemePath() . '/css/bootstrap.css" rel="stylesheet" type="text/css">');
    $this->addHeaderItem('<link href="' . $view->getThemePath() . '/css/bootstrap-social.css" rel="stylesheet" type="text/css">');
    $this->addHeaderItem('<link href="' . $view->getThemePath() . '/css/font-awesome.css" rel="stylesheet" type="text/css">');
    // Custom styles/js for this template.
    $this->addHeaderItem('<link href="' . $view->getThemePath() . '/css/vpg-stylesheet.css" rel="stylesheet" type="text/css">');
  ?>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!--Header ends-->
  <body>
    <div class="<?php print $c->getPageWrapperClass() ?>">
    <div class="navbar-wrapper">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-lg-2">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php print $this->url(''); ?>" style="height:auto;">
                <img class="logo" src="<?php print $view->getThemePath() ?>/images/logo.png" alt="Victor Pasmore Gallery" title="Victor Pasmore Gallery" />
                </a>
              </div>
            </div>
            <div class="col-sm-9 col-lg-10">
              <div id="navbar" class="navbar-collapse collapse" aria-expanded="true">
                <?php 
                  $a = new GlobalArea('Main Menu');
                  $a->display($c);
                ?>
                <div class="col-xs-12 col-md-9 col-lg-4">
                  <form action="<?php echo View::url(''); ?>" method="get" class="navbar-left" role="search">
                    <div class="input-group">
                      <input name="search_paths[]" type="hidden" value="">
                      <input name="query" type="text" value="" class="form-control" placeholder="Search..." id="srch-term">
                      <span class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            </div>
          </div>
        <!--/.nav-collapse -->
      </nav>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12"> 
          <img class="img-responsive" src="<?php print $view->getThemePath() ?>/images/the-artist/victor-pasmore-with-his-wife.png" alt="" title="" />
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <p>
            Born in Chesham, Surrey, Victor Pasmore (1908-1998) is known to be one of the leading protagonists of the twentieth-century abstract art movement, and who fuelled what is described by historian Herbert Read as “the most revolutionary event in post-war British art.” As from an early age, Victor Pasmore showed unmistakable promise in the art of landscape painting – a practice which he developed further through his enrolment at Harrow School and his studies on the French Impressionists.
          </p>
        </div>
        <div class="col-lg-5">
          <img class="img-responsive" src="<?php print $view->getThemePath() ?>/images/the-artist/children-playing-on-the-shore.png" alt="" title="" />
        </div>
      </div>
      </div>
      <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <img class="img-responsive" src="<?php print $view->getThemePath() ?>/images/the-artist/wendy-combing-her-hair.png" alt="" title="" />
        </div>
        <div class="col-lg-9">
          <img class="img-responsive" src="<?php print $view->getThemePath() ?>/images/the-artist/the-reopening-of-the-apollo.png" alt="" title="" />
        </div>
      </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <p>“Whereas before with the aid of the mirror, the painter approached the obective world form outside, graudually peeling off successive skins until he reached the subjective centre; in abstract form he must begin with an objective core and build outwards until he finds a subjective circumference.” - Victor Pasmore, What is Abstract Art? The Sunday Times, 1961</p>
          </div>
          <div class="col-lg-5">
            <img class="img-responsive" src="<?php print $view->getThemePath() ?>/images/the-artist/vp-tate-1965-john-pasmore.png" alt="" title="" />
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="artist-vp img-responsive" src="<?php print $view->getThemePath() ?>/images/the-artist/victor-pasmore.png" alt="" title="" />
          </div>
          <div class="col-lg-8">
            <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <img class="artist-ge img-responsive" src="<?php print $view->getThemePath() ?>/images/the-artist/the-green-earth.png" alt="" title="" />
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <p>“What I have done is not the process of abstraction from nature but a method of constructing from within.”– Victor Pasmore, The Artist Speaks documentary, 1951</p>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="footer-sponsors text-center">
              <ul class="list-inline">
                <li>
                  <a href="#">
                  <img style="max-width:90px;" class="" src="<?php print $view->getThemePath() ?>/images/footer/kim/fpm-logo.png" />
                  </a>
                </li>
                <li>
                  <a href="#">
                  <img style="max-width:130px;" class="" src="<?php print $view->getThemePath() ?>/images/footer/kim/cbm-logo.png" />
                  </a>
                </li>
                <li>
                  <a href="#">
                  <img style="max-width:130px;" class="" src="<?php print $view->getThemePath() ?>/images/footer/kim/vpf-logo.png" />
                  </a>
                </li>
                <li>
                  <a href="#">
                  <img style="max-width:50px;" class="" src="<?php print $view->getThemePath() ?>/images/footer/kim/fp-logo.png" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer-links text-center">
              <ul class="list-inline list-links">
                <li>
                  <a href="#">
                  Latest News
                  </a>
                </li>
                <li>
                  <a href="#">
                  Contact Us
                  </a>
                </li>
                <li>
                  <a href="#">
                  Terms and Conditions
                  </a>
                </li>
              </ul>
              <ul class="list-inline list-social">
                <li>
                  <a class="btn btn-social-icon btn-facebook">
                  <span class="fa fa-facebook"></span>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/vpgallery/" target="_blank" class="btn btn-social-icon btn-instagram">
                  <span class="fa fa-instagram"></span>
                  </a>
                </li>
                <li>
                  <a class="btn btn-social-icon btn-youtube">
                  <span class="fa fa-youtube"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    </div><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php print $view->getThemePath() ?>/js/bootstrap.min.js"  type="text/javascript"></script>
    <script src="<?php print $view->getThemePath() ?>/js/vpgallery.js" type="text/javascript"></script>
    <!-- <script src="<?php print $view->getThemePath() ?>/js/jquery.min.js" type="text/javascript"></script> -->
    <?php  Loader::element('footer_required'); ?>
  </body>
</html>