<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Мебельный мастер</title>
    <!-- Font Icons -->
    <link media="all" rel="stylesheet" href="{{ asset('css/home/fonts/icomoon/icomoon.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('css/home/fonts/roxine-font-icon/roxine-font.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.css') }}">
    <!-- Vendors -->
    <link media="all" rel="stylesheet" href="{{ asset('vendors/owl-carousel/dist/assets/owl.carousel.min.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('vendors/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('vendors/animate/animate.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('vendors/rateyo/jquery.rateyo.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('vendors/bootstrap-datepicker/css/bootstrap-datepicker.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('vendors/fancyBox/source/jquery.fancybox.css') }}">
    <link media="all" rel="stylesheet" href="{{ asset('vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.css') }}">
    <!-- Bootstrap 4 -->
    <link media="all" rel="stylesheet" href="{{ asset('css/home/bootstrap.css') }}">
    <!-- Rev Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/rev-slider/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/rev-slider/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/rev-slider/revolution/css/navigation.css') }}">
    <!-- Theme CSS -->
    <link media="all" rel="stylesheet" href="{{ asset('css/home/main.css') }}">
    <!-- Custom CSS -->
    <link media="all" rel="stylesheet" href="{{ asset('css/home/construction.css') }}">
</head>

<body>
<!-- main wrapper -->
<div id="wrapper">
    <div class="page-wrapper">
        <!-- header of the page -->
        <header class="fixed-top main-header" id="waituk-main-header">
            <div id="nav-section">
                <div class="mega-menus top-header">
                    <nav class="p-static hidden-md-down">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs float-left text-center-sm no-float-sm no-padding">
                                    <ul class="i-list i-list-i-block i-list-i-block-sm i-list-i-block-no-hover pad-0-sm margin-bottom-0 float-left text-center">
                                        <li>
                                            <div class="dropdown mini-nav">
                                                <a href="tel:9851108896" class="nav-link"><span class="custom-icon-phone-ring"></span> 9851108896</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown mini-nav mini-nav-no-bg-hover">
                                                <a href="mailto:youremail@waituk.com" class="nav-link"><span class="custom-icon-email1"></span> youremail@waituk.com</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 float-right hidden-xs pad-right-0">
                                    <ul class="i-list i-list-i-block i-list-i-block-sm i-list-i-block-no-hover pad-0-sm margin-bottom-0 float-right">
                                        <li>
                                            <div class="dropdown mini-nav mini-nav-no-bg-hover">
                                                <a href="#"><span class="icon-facebook"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown mini-nav mini-nav-no-bg-hover">
                                                <a href="#"><span class="icon-twitter"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown mini-nav mini-nav-no-bg-hover">
                                                <a href="#"><span class="icon-google-plus"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown mini-nav mini-nav-no-bg-hover">
                                                <a href="#"> EN </a>
                                                <ul class="dropdown-menu pad-small no-border-radius hidden-xs fadeIn">
                                                    <li><a href="#" class="pad-narrow"> GB </a></li>
                                                    <li><a href="#" class="pad-narrow"> DE </a></li>
                                                    <li><a href="#" class="pad-narrow"> FR </a></li>
                                                    <li><a href="#" class="pad-narrow"> NP </a></li>
                                                    <li><a href="#" class="pad-narrow"> IN </a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="bottom-header container mega-menus" id="mega-menus">
                    <nav class="navbar navbar-toggleable-md no-border-radius no-margin mega-menu-multiple" id="navbar-inner-container">
                        <form action="mega-menu-5.html" id="top-search" class="no-margin top-search">
                            <div class="form-group no-margin">
                                <input class="form-control no-border" id="search_term" name="search_term" placeholder="Type & Press Enter" type="text">
                            </div>
                        </form>
                        <button type="button" class="navbar-toggler navbar-toggler-left" data-toggle="collapse" data-target="#mega-menu">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand mr-auto m-sm-auto" href="index.html"> <img src="img/logo.svg" alt="roxine"> </a>
                        <div class="collapse navbar-collapse flex-row-reverse" id="mega-menu">
                            <ul class="nav navbar-nav">
                                <li class="dropdown" data-animation="fadeIn">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="index.html" data-title="Home"> Home </a>
                                    <ul class="dropdown-menu no-border-radius">
                                        <li><a href="index.html"> Creative Agency </a></li>
                                        <li><a href="design-studio.html"> Design Studio </a></li>
                                        <li><a href="digital-agency.html"> Digital Agency </a></li>
                                        <li><a href="construction.html"> Construction </a></li>
                                        <li><a href="corporate.html"> Corporate </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown" data-animation="fadeIn">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="index.html" data-title="Home"> Features </a>
                                    <ul class="dropdown-menu  no-border-radius">
                                        <li class="dropdown dropdown-right dropdown-parent">
                                            <a class="sub-marker" href="#">Header Styles <i class="icon-ios-more icn-right"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                                                <li><a href="header-v1.html"> Header v1 </a></li>
                                                <li><a href="header-v2.html"> Header v2 </a></li>
                                                <li><a href="header-v3.html"> Header v3 </a></li>
                                                <li><a href="header-v4.html"> Header v4 </a></li>
                                                <li><a href="header-v5.html"> Header v5 </a></li>
                                                <li><a href="header-v6.html"> Header v6 </a></li>
                                                <li><a href="header-v7.html"> Header v7 </a></li>
                                                <li><a href="header-v8.html"> Header v8 </a></li>
                                                <li><a href="header-v9.html"> Header v9 </a></li>
                                                <li><a href="header-v10.html"> Header v10 </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-right dropdown-parent">
                                            <a class="sub-marker" href="#"> Mega Menu <i class="icon-ios-more icn-right"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                                                <li><a href="features-simple-mega.html"> Simple Mega </a></li>
                                                <li><a href="features-with-image.html"> With Image</a></li>
                                                <li><a href="features-with-video.html"> With Video </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-right dropdown-parent">
                                            <a class="sub-marker" href="#">Footer Styles <i class="icon-ios-more icn-right"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                                                <li><a href="footer-v1.html"> Footer v1 </a></li>
                                                <li><a href="footer-v2.html"> Footer v2 </a></li>
                                                <li><a href="footer-v3.html"> Footer v3 </a></li>
                                                <li><a href="footer-v4.html"> Footer v4 </a></li>
                                                <li><a href="footer-v5.html"> Footer v5 </a></li>
                                                <li><a href="footer-v6.html"> Footer v6 </a></li>
                                                <li><a href="footer-v7.html"> Footer v7 </a></li>
                                                <li><a href="footer-v8.html"> Footer v8 </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-right dropdown-parent">
                                            <a href="#" class="sub-marker">Rev Slider <i class="icon-ios-more icn-right"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                                                <li><a href="premium-slides.html"> Premium Slides </a></li>
                                                <li><a href="slider-left-aligned.html"> Left Aligned </a></li>
                                                <li><a href="slider-center-aligned.html"> Center Aligned </a></li>
                                                <li><a href="slider-right-aligned.html"> Right Aligned </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-right dropdown-parent">
                                            <a href="#" class="sub-marker"> Side Panel <i class="icon-ios-more icn-right"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                                                <li><a href="features-left-overlay.html"> Left Overlay </a></li>
                                                <li><a href="features-right-overlay.html"> Right Overlay </a></li>
                                                <li><a href="features-left-push.html"> Left Push </a></li>
                                                <li><a href="features-right-push.html"> Right Push </a></li>
                                                <li><a href="features-side-panel-colored.html"> Colored </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-right dropdown-parent">
                                            <a href="#" class="sub-marker"> Page Banners <i class="icon-ios-more icn-right"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                                                <li><a href="features-slide-bg.html"> Slide BG </a></li>
                                                <li><a href="features-image-bg.html"> Image BG </a></li>
                                                <li><a href="features-parallax-bg.html"> Parallax BG </a></li>
                                                <li><a href="features-video-bg.html"> Video BG </a></li>
                                                <li><a href="features-google-map-bg.html"> Google Map </a></li>
                                                <li><a href="features-colored-bg.html"> Colored BG </a></li>
                                                <li><a href="features-light-bg.html"> Light BG </a></li>
                                                <li><a href="features-dark-bg.html"> Dark BG </a></li>
                                                <li><a href="features-fullscreen-bg.html"> Full Screen </a></li>
                                                <li><a href="features-contained-bg.html"> Contained </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-right dropdown-parent">
                                            <a href="#" class="sub-marker"> Banner Titles <i class="icon-ios-more icn-right"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                                                <li><a href="features-left-aligned-title.html"> Left Aligned </a></li>
                                                <li><a href="features-right-aligned-title.html"> Right Aligned </a></li>
                                                <li><a href="features-center-aligned-title.html"> Center Aligned </a></li>
                                                <li><a href="features-title-with-breadcrumb.html"> With Breadcrumbs </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-right dropdown-parent">
                                            <a href="#" class="sub-marker"> User Profiles <i class="icon-ios-more icn-right"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                                                <li><a href="signin.html"> Sign In </a></li>
                                                <li><a href="signup.html"> Sign Up </a></li>
                                                <li><a href="forgot-password.html"> Forgot Password </a></li>
                                                <li><a href="new-password.html"> New Password </a></li>
                                                <li><a href="confirm-email.html"> Email Confirmation </a></li>
                                                <li><a href="registration-success.html"> Registration Success </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-right dropdown-parent">
                                            <a href="#" class="sub-marker"> Site Search <i class="icon-ios-more icn-right"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                                                <li><a href="features-header-search.html"> Header Search </a></li>
                                                <li><a href="features-transparent-bg-search.html"> Transparent BG </a></li>
                                                <li><a href="features-light-bg-search.html"> Light BG </a></li>
                                                <li><a href="features-dark-bg-search.html"> Dark BG </a></li>
                                                <li><a href="features-colored-bg-search.html"> Colored BG </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown" data-animation="fadeIn">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="index.html" data-title="Home"> Portfolio </a>
                                    <ul class="dropdown-menu no-border-radius">
                                        <li class="dropdown dropdown-left dropdown-parent">
                                            <a class="sub-marker" href="#"> No Sidebar <i class="icon-ios-more icn-right"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                                                <li><a href="portfolio-no-sidebar-2-col.html"> 2 Column </a></li>
                                                <li><a href="portfolio-no-sidebar-3-col.html"> 3 Column </a></li>
                                                <li><a href="portfolio-no-sidebar-4-col.html"> 4 Column </a></li>
                                                <li><a href="portfolio-no-sidebar-6-col.html"> 6 Column </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-left dropdown-parent">
                                            <a class="sub-marker" href="#"> Left Sidebar <i class="icon-ios-more icn-right"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                                                <li><a href="portfolio-left-sidebar-2-col.html"> 2 Column </a></li>
                                                <li><a href="portfolio-left-sidebar-3-col.html"> 3 Column </a></li>
                                                <li><a href="portfolio-left-sidebar-4-col.html"> 4 Column </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-left dropdown-parent">
                                            <a class="sub-marker" href="#"> Right Sidebar <i class="icon-ios-more icn-right"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                                                <li><a href="portfolio-right-sidebar-2-col.html"> 2 Column </a></li>
                                                <li><a href="portfolio-right-sidebar-3-col.html"> 3 Column </a></li>
                                                <li><a href="portfolio-right-sidebar-4-col.html"> 4 Column </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="portfolio-masonary.html"> Masonary </a></li>
                                        <li><a href="portfolio-full-width.html">  Full Width </a></li>
                                        <li><a href="portfolio-full-width-spaced.html">  Full Spaced</a></li>
                                        <li><a href="portfolio-3-col.html"> Boxed </a></li>
                                        <li><a href="portfolio-single.html"> Single V1 </a></li>
                                        <li><a href="portfolio-single-v2.html">  Single V2 </a></li>
                                        <li><a href="portfolio-single-v3.html"> Single V3 </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-full-width-g" data-animation="fadeIn">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" data-title="Pages">Elements </a>
                                    <div class="dropdown-menu no-border-radius no-padding" data-adjust="2">
                                        <div class="row row-autoheight no-gutters">
                                            <div class="col-lg-3 col-autoheight clearfix">
                                                <div class="widget-default clearfix">
                                                    <ul class="s-list s-list-pl s-list-mb-10 no-padding">
                                                        <li><a href="element-accordions.html"><i class="icon-server"></i> ACCORDIONS </a></li>
                                                        <li><a href="element-animations.html"><i class="icon-magic"></i> ANIMATIONS </a></li>
                                                        <li><a href="element-buttons.html"><i class="icon-link"></i> BUTTONS </a></li>
                                                        <li><a href="element-carousels.html"><i class="icon-heart"></i> CAROUSEL </a></li>
                                                        <li><a href="element-tabs.html"><i class="icon-tasks"></i> TABS </a></li>
                                                        <li><a href="element-columns.html"><i class="icon-th-large"></i> COLUMNS </a></li>
                                                        <li><a href="element-counters.html"><i class="icon-time"></i> COUNTERS </a></li>
                                                        <li><a href="element-data-tables.html"><i class="icon-table"></i> DATA TABLES </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-autoheight clearfix">
                                                <div class="widget-default clearfix">
                                                    <ul class="s-list s-list-pl s-list-mb-10 no-padding">
                                                        <li><a href="element-date-time-pickers.html"><i class="icon-calendar-11"></i> DATE & TIME PICKERS </a></li>
                                                        <li><a href="element-dividers.html"><i class="icon-indent-right"></i> DIVIDERS </a></li>
                                                        <li><a href="element-icon-boxes.html"><i class="icon-lightbulb"></i> ICON BOXES </a></li>
                                                        <li><a href="element-galleries.html"><i class="icon-picture"></i> GALLERIES </a></li>
                                                        <li><a href="element-header-styles.html"><i class="icon-edit-pen-1"></i> HEADER STYLES </a></li>
                                                        <li><a href="element-icon-lists.html"><i class="icon-list-alt"></i> ICON LISTS </a></li>
                                                        <li><a href="element-labels.html"><i class="icon-plus-circle"></i> LABELS </a></li>
                                                        <li><a href="element-lightbox.html"><i class="icon-resize-full"></i> LIGHTBOX </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-autoheight clearfix">
                                                <div class="widget-default clearfix">
                                                    <ul class="s-list s-list-pl s-list-mb-10 no-padding">
                                                        <li><a href="element-google-maps.html"><i class="icon-mark-map"></i> MAPS </a></li>
                                                        <li><a href="element-media-embed.html"><i class="icon-play"></i> MEDIA EMBEDS </a></li>
                                                        <li><a href="element-modal-boxes.html"><i class="icon-move"></i> MODAL BOXES </a></li>
                                                        <li><a href="element-paginations.html"><i class="icon-cogs"></i> PAGINATIONS </a></li>
                                                        <li><a href="element-progressbar.html"><i class="icon-progress-2"></i> PROGRESS BARS </a></li>
                                                        <li><a href="element-range-sliders.html"><i class="icon-arrow-move"></i> RANGE SLIDER </a></li>
                                                        <li><a href="element-star-ratings.html"><i class="icon-star-6"></i> STAR RATINGS </a></li>
                                                        <li><a href="element-pricing-boxes.html"><i class="icon-dollar-2"></i> PRICING BOXES </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-autoheight clearfix">
                                                <div class="widget-default clearfix">
                                                    <ul class="s-list s-list-pl s-list-mb-10 no-padding">
                                                        <li><a href="element-blockquotes.html"><i class="icon-quote-left"></i> BLOCKQUOTES </a></li>
                                                        <li><a href="font-icons.html"><i class="icon-laptop-6"></i> FONT ICONS </a></li>
                                                        <li><a href="element-sections.html"><i class="icon-folder-open"></i> SECTIONS </a></li>
                                                        <li><a href="element-social-icons.html"><i class="icon-facebook"></i> SOCIAL ICONS </a></li>
                                                        <li><a href="element-select-pickers.html"><i class="icon-select"></i> SELECT PICKER </a></li>
                                                        <li><a href="element-select-boxes.html"><i class="icon-columns"></i> SELECT BOXES </a></li>
                                                        <li><a href="team.html"><i class="icon-select"></i> TEAM BLOCK </a></li>
                                                        <li><a href="about.html"><i class="icon-columns"></i> ABOUT BLOCK </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="about.html"> About </a>
                                </li>
                                <li>
                                    <a href="team.html"> Team </a>
                                </li>
                                <li class="dropdown right-dropdown" data-animation="fadeIn">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="index.html" data-title="Home"> Blog </a>
                                    <ul class="dropdown-menu no-border-radius">
                                        <li><a href="blog-one-col.html"> Blog One Column </a></li>
                                        <li><a href="blog-two-col.html"> Blog Two Column </a></li>
                                        <li><a href="blog-three-col.html"> Blog Three Column </a></li>
                                        <li><a href="blog-left-sidebar.html"> Blog Left Sidebar </a></li>
                                        <li><a href="blog-right-sidebar.html"> Blog Right Sidebar </a></li>
                                        <li><a href="blog-masonary.html"> Masonary </a></li>
                                        <li><a href="blog-full-width.html"> Full Width </a></li>
                                        <li><a href="blog-single.html"> Blog Single </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html"> Contact </a>
                                </li>
                                <li class="dropdown cart-list margin-0-sm">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><span class="hidden-lg-up"> Shopping Cart </span><i class="custom-icon-cart m-marker"></i></a>
                                    <div class="dropdown-menu-container">
                                        <div class="dropdown-menu no-border-radius col-lg-1 col-md-4 col-sm-4">
                                            <h4> Shopping Cart </h4>
                                            <ul class="s-list no-padding">
                                                <li class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-5 col">
                                                        <div class="img">
                                                            <a href="#"><img src="img/img-02.jpg" alt="image description"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-7 col">
                                                        <h6> <a href="#"><strong>Product 1 </strong></a><span class="text-muted float-right"> x 1 </span></h6>
                                                        <h6> $199 </h6>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-5 col">
                                                        <div class="img">
                                                            <a href="#"><img src="img/img-02.jpg" alt="image description"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-7 col">
                                                        <h6> <a href="#"><strong>Product 2 </strong></a><span class="text-muted float-right"> x 2 </span></h6>
                                                        <h6> $199 </h6>
                                                    </div>
                                                </li>
                                                <li class="divider margin-bottom-1"></li>
                                                <li class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-5 col">
                                                        <h2> Total </h2>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-7 col">
                                                        <h2 class="text-right"> $3300 </h2>
                                                    </div>
                                                </li>
                                                <li><a href="#" class="btn btn-sm btn-block btn-secondary btn-mina btn-mina-rip-br"> View Cart </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar-pos-search">
                            <a href="#" class="x-search x-search-trigger navbar-link"><i class="custom-icon-search"></i></a>
                            <a href="#" class="x-search icon-close-round navbar-link"><i class="icon-line-cross"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--/header of the page -->
        <main>
            <!-- visual/banner of the page -->
            <div class="banner banner-home">
                <!-- revolution slider starts -->
                <div id="rev_slider_279_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="restaurant-header" style="margin:0px auto;background-color:#fff;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <div id="rev_slider_70_1" class="rev_slider fullscreenabanner" style="display:none;" data-version="5.1.4">
                        <ul>
                            <li class="slider-color-schema-dark" data-index="rs-2" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                                <!-- main image for revolution slider -->
                                <img src="img/big-10.jpg" alt="image description" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-bgfit="cover" data-no-retina>
                                <div class="slider-sub-title text-white tp-caption tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['145','100','10','20']" data-width="['1200','960','720','540']" data-textalign="center" data-fontsize="['30','28','24','20']" data-lineheight="['72','62','50','50']" data-letterspacing="5" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-paddingright="[25,25,25,25]" data-paddingleft="[25,25,25,25]">
                                    INDUSTRIAL. HOMES. ELECTRICAL.
                                </div>
                                <div class="slider-main-title text-white tp-caption tp-resizeme rs-parallaxlevel-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['250','150','50','50']" data-width="['1200','960','720','540']" data-textalign="center" data-fontsize="['100','88','64','48']" data-fontweight="900" data-letterspacing="['25','10','5','0']" data-lineheight="['184','100','72','60']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-paddingright="[25,25,25,25]" data-paddingleft="[25,25,25,25]">
                                    THE BUILDER
                                </div>
                                <div class="slider-text text-white tp-caption tp-resizeme rs-parallaxlevel-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['450','230','130','110']" data-width="['1140','960','768','480']" data-textalign="center" data-fontsize="['18','14','14','14']" data-lineheight="['30','30','22','22']" data-fontweight="400" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-paddingright="[25,25,25,25]" data-paddingleft="[25,25,25,25]">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                </div>
                                <div class="tp-caption rev-btn  rs-parallaxlevel-10" id="slide-163-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['320','60','240','220']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="1250" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]' data-responsive_offset="on" data-paddingtop="[0,0,0,0]" data-paddingright="[25,25,25,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[25,25,25,25]">
                                    <a class="btn btn-primary has-radius-small" href="#">PROJECT GALLERY</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/visual/banner of the page -->
            <!-- main content wrapper -->
            <div class="content-wrapper">
                <section class="content-block">
                    <div class="container">
                        <div class="row multiple-row v-align-row">
                            <div class="col-md-6 col-lg-4">
                                <div class="col-wrap">
                                    <div class="post-grid">
                                        <div class="img-block post-img">
                                            <img src="img/img-26.jpg" alt="images">
                                        </div>
                                        <div class="post-text-block bg-gray-light">
                                            <h3 class="content-title mb-0">Construction Projects</h3>
                                            <span class="content-sub-title">Home office working for you.</span>
                                            <div class="post-meta clearfix">
                                                <div class="post-link-holder">
                                                    <a href="#">Learn More <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
                                                </div>
                                                <div class="post-social text-right">
                                                    <ul class="social-network social-small">
                                                        <li><a href="#"><span class="icon-youtube-play"><span class="sr-only">&nbsp;</span></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="col-wrap">
                                    <div class="post-grid">
                                        <div class="img-block post-img">
                                            <img src="img/img-27.jpg" alt="images">
                                        </div>
                                        <div class="post-text-block bg-gray-light">
                                            <h3 class="content-title mb-0">Home Renovation</h3>
                                            <span class="content-sub-title">If you want to get back again.</span>
                                            <div class="post-meta clearfix">
                                                <div class="post-link-holder">
                                                    <a href="#">Learn More <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
                                                </div>
                                                <div class="post-social text-right">
                                                    <ul class="social-network social-small">
                                                        <li><a href="#"><span class="icon-youtube-play"><span class="sr-only">&nbsp;</span></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="col-wrap">
                                    <div class="post-grid">
                                        <div class="img-block post-img">
                                            <img src="img/img-28.jpg" alt="images">
                                        </div>
                                        <div class="post-text-block bg-gray-light">
                                            <h3 class="content-title mb-0">Building It Strong</h3>
                                            <span class="content-sub-title">Spending them wisely.</span>
                                            <div class="post-meta clearfix">
                                                <div class="post-link-holder">
                                                    <a href="#">Learn More <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
                                                </div>
                                                <div class="post-social text-right">
                                                    <ul class="social-network social-small">
                                                        <li><a href="#"><span class="icon-youtube-play"><span class="sr-only">&nbsp;</span></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content-block pt-0">
                    <div class="container">
                        <div class="block-heading text-center">
                            <h3 class="content-title">COMPANIES WORKED WITH IN PAST</h3>
                            <h2 class="block-main-heading text-black">BRANDS BEHIND</h2>
                        </div>
                        <div class="description text-center container-md">
                            <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. </p>
                        </div>
                        <div class="logo-list text-center">
                            <div class="row">
                                <div class="col-md-4 col-xl-3">
                                    <div class="top-xl-space">
                                        <div class="img-wrap">
                                            <img src="img/logo-01.png" alt="logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-3">
                                    <div class="top-xl-space">
                                        <div class="img-wrap">
                                            <img src="img/logo-02.png" alt="logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-3">
                                    <div class="top-xl-space">
                                        <div class="img-wrap">
                                            <img src="img/logo-03.png" alt="logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-3">
                                    <div class="top-xl-space">
                                        <div class="img-wrap">
                                            <img src="img/logo-04.png" alt="logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-3">
                                    <div class="top-xl-space">
                                        <div class="img-wrap">
                                            <img src="img/logo-05.png" alt="logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-3">
                                    <div class="top-xl-space">
                                        <div class="img-wrap">
                                            <img src="img/logo-01.png" alt="logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content-block information-block p-0 parallax" data-stellar-background-ratio="0.55">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="info-block info-block-v2 block-1 col-sm-6 col-lg-3 text-center">
                                <div class="icon">
                                    <img src="img/icons/icon-planning.png" alt="planning">
                                </div>
                                <h3 class="block-title">Project Planning</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                            </div>
                            <div class="info-block info-block-v2 block-2 col-sm-6 col-lg-3 text-center">
                                <div class="icon">
                                    <img src="img/icons/icon-design.png" alt="design">
                                </div>
                                <h3 class="block-title">Product Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                            </div>
                            <div class="info-block info-block-v2 block-3 col-sm-6 col-lg-3 text-center">
                                <div class="icon">
                                    <img src="img/icons/icon-service.png" alt="design">
                                </div>
                                <h3 class="block-title">After Spales Service</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                            </div>
                            <div class="info-block info-block-v2 block-4 col-sm-6 col-lg-3 text-center">
                                <div class="icon">
                                    <img src="img/icons/icon-support.png" alt="design">
                                </div>
                                <h3 class="block-title">Customer Support</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content-block bg-white">
                    <div class="container">
                        <div class="block-heading text-center bottom-space">
                            <h3 class="content-title">PEOPLE BEHIND OUR SUCCESS</h3>
                            <h2 class="block-main-heading text-black">BRAINS BEHIND</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="team-box caption-fade-up">
                                    <div class="img-block">
                                        <img src="img/team-06.jpg" alt="images description">
                                    </div>
                                    <figure>
                                        <figcaption class="team-des-v2">
                                            <span class="sub">Founder / CEO </span>
                                            <strong class="content-title name">Nicola Gorani</strong>
                                            <p>Put all speaking her delicate recurred every possible. Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions. </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-box caption-fade-up">
                                    <div class="img-block">
                                        <img src="img/team-05.jpg" alt="images description">
                                    </div>
                                    <figure>
                                        <figcaption class="team-des-v2">
                                            <span class="sub">Founder / CTO </span>
                                            <strong class="content-title name">Jeremi Stralt</strong>
                                            <p>Put all speaking her delicate recurred every possible. Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions. </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-box caption-fade-up">
                                    <div class="img-block">
                                        <img src="img/team-04.jpg" alt="images description">
                                    </div>
                                    <figure>
                                        <figcaption class="team-des-v2">
                                            <span class="sub">Web Programmer </span>
                                            <strong class="content-title name">Colin Nizurb</strong>
                                            <p>Put all speaking her delicate recurred every possible. Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions. </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content-block consult-block bg-primary">
                    <div class="container">
                        <div class="inner-wrapper text-center">
                            <h3 class="block-top-heading text-white">BEST EVER DESIGN</h3>
                            <h2 class="bottom-m-space text-white">Thinking of starting a project with us?</h2>
                            <div class="btn-container">
                                <a href="#" class="btn btn-small-font btn-trans-white">GET CONSULTATION</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!--/main content wrapper -->
        </main>
    </div>
    <!-- footer of the pagse -->
    <footer class="footer footer-v1">
        <div class="content-block footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-logo">
                            <img src="img/logo-dark.svg" alt="image-description">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="footer-nav inline-nav text-center">
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 text-right">
                        <ul class="social-network with-text">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span> </a></li>
                            <li><a href="#"><span class="icon-google-plus"></span> </a></li>
                            <li><a href="#"><span class="icon-pinterest"></span> </a></li>
                            <li><a href="#"><span class="icon-dribbble"></span> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">
                <p>Copyright 2016 - Roxine - Multi Purpose Theme by Waituk </p>
            </div>
        </div>
    </footer>
    <!--/footer of the page -->
</div>
<!-- search form wrapper -->
<div class="search-form-wrapper bg-secondary white-text">
    <a href="#" class="nav-search-link close"><span class="icon-android-close"></span></a>
    <div class="holder">
        <input type="search" class="form-control form-control-v1" placeholder="Enter Your Search">
        <button type="submit"><span class="custom-icon-search"></span></button>
    </div>
</div>
<a href="#" class="section-scroll" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
<!-- jquery library -->
<script src="vendors/jquery/jquery-2.1.4.min.js"></script>
<!-- external scripts -->
<script src="vendors/tether/dist/js/tether.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/stellar/jquery.stellar.min.js"></script>
<script src="vendors/isotope/javascripts/isotope.pkgd.min.js"></script>
<script src="vendors/isotope/javascripts/packery-mode.pkgd.js"></script>
<script src="vendors/owl-carousel/dist/owl.carousel.js"></script>
<script src="vendors/waypoint/waypoints.min.js"></script>
<script src="vendors/counter-up/jquery.counterup.min.js"></script>
<script src="vendors/fancyBox/source/jquery.fancybox.pack.js"></script>
<script src="vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>
<script src="vendors/image-stretcher-master/image-stretcher.js"></script>
<script src="vendors/wow/wow.min.js"></script>
<script src="vendors/rateyo/jquery.rateyo.js"></script>
<script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="vendors/bootstrap-slider-master/src/js/bootstrap-slider.js"></script>
<script src="vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('js/mega-menu.js') }}"></script>
<!-- custom jquery script -->
<script src="{{ asset('js/jquery.main.js') }}"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="vendors/rev-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="vendors/rev-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- SNOW ADD ON -->
<script type="text/javascript" src="vendors/rev-slider/revolution-addons/snow/revolution.addon.snow.min.js"></script>
<!-- revolutions slider script -->
<script src="{{ asset('js/revolution.js') }}"></script>
</body>

</html>
