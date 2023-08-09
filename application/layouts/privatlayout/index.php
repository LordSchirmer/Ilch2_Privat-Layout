<?php /** @var $this \Ilch\Layout\Frontend */ ?>
<!DOCTYPE html>
<html lang="de">
    <!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
    <!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
    <!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
    <!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <?=$this->getHeader() ?>
        <link href="<?=$this->getVendorUrl('twbs/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?=$this->getLayoutUrl('css/normalize.css') ?>" rel="stylesheet">
        <link href="<?=$this->getLayoutUrl('css/flexslider.css') ?>" rel="stylesheet">
        <link href="<?=$this->getLayoutUrl('css/style.css') ?>" rel="stylesheet">
        <?=$this->getCustomCSS() ?>
        <script src="<?=$this->getVendorUrl('twbs/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
        <script src="<?=$this->getLayoutUrl('js/modernizr.min.js') ?>"></script>
    </head>
    <body id="top">
        <!-- top bar -->
        <div class="topbar">
            <div class="userpanel">
                <?=$this->getBox('user', 'login', 'userpanel'); ?>
            </div>
        </div>
        <!-- header area -->
        <header class="wrapper clearfix">
            <div id="banner">
                <?php include('box/siteLogo.php'); ?>
            </div>
            <!-- navigation area -->
            <nav id="topnav" role="navigation">
                <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i> <?=$this->getTrans('menu') ?></div>
                <ul class="srt-menu" id="menu-main-navigation">
                    <?=$this->getMenu(1, '<li><a href="#" title="%s">%s</a>%c</li>', [
                            'menus' => [
                                'ul-class-root' => '',
                                'ul-class-child' => '',
                                'allow-nesting' => false
                            ],
                            'boxes' => [
                                'render' => false
                            ],
                        ]) ?>
                    ?>
                </ul>
            </nav><!-- end navigation -->
        </header><!-- end header -->
        <!-- slider area -->
        <section id="slider" class="clearfix">
            <div class="wrapper">
                <div class="row">
                    <div class="grid_5">
                        <?php include('box/siteTitle.php'); ?>
                        <?php include('box/siteInfo.php'); ?>
                    </div>
                    <div class="grid_7 rightfloat">
                        <?php include('box/siteSlider.php'); ?>
                    </div>
                </div>
            </div>
        </section><!-- end slider -->
        <!-- main area -->
        <div id="main" class="wrapper">
            <!-- content area -->
            <section id="content">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?=$this->getHmenu() ?>
                    </div>
                    <div class="panel-body">
                        <?=$this->getContent() ?>
                    </div>
                  </div>
            </section><!-- end content -->
            <!-- sidebar area -->
            <aside>
                <?=$this->getMenu(2, '<div class="panel panel-default">
                    <div class="box-header">%s</div>
                    <div class="box-body">%c</div>
                </div>') ?>
            </aside><!-- end sidebar -->
        </div><!-- end main  -->
        <!-- footer area -->
        <footer>
            <div class="wrapper clearfix">
                <div class="grid_6 left">
                    <ul>
                      <li>&copy; Ilch 2</li>
                      <li>Free Private Layout</li>
                      <li>CMS by <a href="https://www.ilch.de/">Ilch</a></li>
                    </ul>
                </div>
                <div class="grid_6 right">
                    <ul>
                        <li><a href="<?=$this->getUrl() ?>"><?=$this->getTrans('home') ?></a></li>
                        <li><a href="<?=$this->getUrl(['module' => 'contact', 'controller' => 'index', 'action' => 'index']) ?>"><?=$this->getTrans('contact') ?></a></li>
                        <li><a href="<?=$this->getUrl(['module' => 'imprint', 'controller' => 'index', 'action' => 'index']) ?>"><?=$this->getTrans('impress') ?></a></li>
                        <li><a href="<?=$this->getUrl(['module' => 'privacy', 'controller' => 'index', 'action' => 'index']) ?>"><?=$this->getTrans('disclaimer') ?></a></li>
                    </ul>
                </div>
                <a href="#top" class="totop"><div class="innertop"></div></a>
            </div>
        </footer><!-- end footer area -->
        <?=$this->getFooter() ?>
        <script>window.jQuery || document.write('<script src="<?=$this->getLayoutUrl('js/jquery.min.js') ?>">\x3C/script>')</script>
        <script src="<?=$this->getLayoutUrl('js/jquery.flexslider.min.js') ?>" defer></script>
        <!-- settings -->
        <script src="<?=$this->getLayoutUrl('js/main.js') ?>"></script>
    </body>
</html>
