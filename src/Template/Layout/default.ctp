<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title -->
    <title>Rwf Nibourg</title>

    <!-- Meta -->
    <?= $this->Html->charset()?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Moje. - Responsive One-Page Bootstrap vCard Template.">
    <meta name="keywords" content="moje, responsive, one page, resume, bootstrap, vCard, personal page, html5, css3, retina">
    <meta name="author" content="Suelo">
    <?= $this->Html->meta(array(
        'rel' => 'shortcut icon',
        'link' => '/img/favicon.png',
    ))
    ?>
    <?=
    $this->Html->meta(array(
        'rel' => 'apple-touch-icon',
        'link' => '/img/apple-touch-icon',
    ))
    ?>
    <?=
    $this->Html->meta(array(
        'rel' => 'apple-touch-icon',
        'sizes' => '144x144',
        'link' => '/img/apple-touch-icon-114x114.png',
    ))
    ?>
    <?=
    $this->Html->meta(array(
        'rel' => 'apple-touch-icon',
        'sizes' => '72x72',
        'link' => '/img/apple-touch-icon-72x72.png',
    ))
    ?>

    <!--[if lt IE 9]>
    <?= $this->Html->script('http_html5shim.googlecode.com_svn_trunk_html5.js') ?>
    <![endif]-->

    <!-- Retina Images -->
    <script>if((window.devicePixelRatio===undefined?1:window.devicePixelRatio)>1)
            document.cookie='HTTP_IS_RETINA=1;path=/';</script>
    <!-- End Retina Images -->

    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,700,500' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('animations.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('flaticon.css') ?>
    <?= $this->Html->css('owl.carousel.css') ?>
    <?= $this->Html->css('owl.theme.css') ?>
    <?= $this->Html->css('style.min.css') ?>
    <?= $this->Html->css('colors/green.css',array('id' => 'colors')) ?>

</head>

<body>

<!-- Facebook Source -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Loader -->
<div id="page-loader">	</div>
<!-- Loader / End -->

<!-- Header  -->
<header id="nav-content" class="vertical-nav nav-black">

    <!-- Logo -->
    <div class="me-logo">
        <a href="#profile">
            <div class="logo-content">
                <h4 class="short">RWF <strong>Nibourg</strong></h4>
                <span class="logo-caption">Amateur programmer</span>
            </div>
        </a>
    </div>

    <!-- Navigation -->
    <ul class="menu nav me-nav">
        <li class="menu-item active"><a href="#profile"><span>Profile</span><i class="fa fa-user"></i></a></li>
        <li class="menu-item"><a href="#resume"><span>Resume</span><i class="fa fa-pencil"></i></a></li>
        <li class="menu-item"><a href="#portfolio"><span>Portfolio</span><i class="fa fa-desktop"></i></a></li>
        <li class="menu-item"><a href="#blog"><span>Latest Posts</span><i class="fa fa-comment"></i></a></li>
        <li class="menu-item"><a href="#contact"><span>Contact</span><i class="fa fa-phone"></i></a></li>
    </ul>

    <!-- Copyright -->
    <span class="copyright hidden-md">© 2016 <b>Rob Nibourg</b>.</span>

</header>
<!-- Header / End -->

<?= $this->fetch('content') ?>

<!-- Scripts -->
<?= $this->Html->script('jquery-1.10.2.min.js') ?>
<?= $this->Html->script('bootstrap.js') ?>
<?= $this->Html->script('jquery.easing.js') ?>
<?= $this->Html->script('page-loader.js') ?>
<?= $this->Html->script('jquery.validate.min.js') ?>
<?= $this->Html->script('jquery.localscroll-1.2.7-min.js') ?>
<?= $this->Html->script('jquery.scrollTo-1.4.3.1-min.js') ?>
<?= $this->Html->script('jquery.fitvids.js') ?>
<?= $this->Html->script('jquery.appear.js') ?>
<?= $this->Html->script('waypoints.min.js') ?>
<?= $this->Html->script('owl.carousel.min.js') ?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<!-- Custom Script -->
<?= $this->Html->script('custom.js') ?>
<?= $this->Html->script('GoogleMap-dark.js') ?>


</body>

</html>
