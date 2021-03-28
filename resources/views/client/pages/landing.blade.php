@extends('client.layouts.layout')

@section('client.pages.content')
    <main>
        <!-- visual/banner of the page -->
        <div class="banner banner-home">
            <!-- revolution slider starts -->
            <div id="rev_slider_279_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="restaurant-header" style="margin:0px auto;background-color:#fff;padding:0px;margin-top:0px;margin-bottom:0px;">
                <div id="rev_slider_70_1" class="rev_slider fullscreenabanner" style="display:none;" data-version="5.1.4">
                    <ul>
                        <li class="slider-color-schema-dark" data-index="rs-2" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                            <!-- main image for revolution slider -->
                            <img src="{{ asset('img/family.jpg') }}" alt="image description" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-bgfit="cover" data-no-retina>
                            <div class="slider-sub-title text-white tp-caption tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['145','100','10','20']" data-width="['1200','960','720','540']" data-textalign="center" data-fontsize="['30','28','24','20']" data-lineheight="['72','62','50','50']" data-letterspacing="5" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-paddingright="[25,25,25,25]" data-paddingleft="[25,25,25,25]">
                                INDUSTRIAL. HOMES. ELECTRICAL.
                            </div>
                            <div class="slider-main-title text-white tp-caption tp-resizeme rs-parallaxlevel-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['250','150','50','50']" data-width="['1200','960','720','540']" data-textalign="center" data-fontsize="['100','88','64','48']" data-fontweight="900" data-letterspacing="['25','10','5','0']" data-lineheight="['184','100','72','60']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-paddingright="[25,25,25,25]" data-paddingleft="[25,25,25,25]">
                                THE BUILDER
                            </div>
                            <div class="slider-text text-white tp-caption tp-resizeme rs-parallaxlevel-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','middle','middle']" data-voffset="['450','230','130','110']" data-width="['1140','960','768','480']" data-textalign="center" data-fontsize="['18','14','14','14']" data-lineheight="['30','30','22','22']" data-fontweight="400" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-paddingright="[25,25,25,25]" data-paddingleft="[25,25,25,25]">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
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
                    <div class="block-heading text-center">
                        <h3 class="content-title">Создаю пространство мечты для Жизни и Бизнеса!</h3>
                        <h2 class="block-main-heading text-black">Мебельный мастер</h2>
                    </div>
                    <div class="description text-center container-md">
                        <p>Проектирую и изготавливаю корпусную мебель по индивидуальным заказам для дома, офиса и
                            торговых точек. Превращаю Ваши идеи в реальность, от эскиза до результата. Способствую
                            созданию комфорта, уюта и максимального удобства для Вашего Дома и Бизнеса!</p>
                    </div>
                    <div class="content-block pb-0 pt-5">
                        <div class="row multiple-row icon-v1 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="col-wrap">
                                    <div class="ico-box">
                                        <div class="icon-title">
                                            <div class="icon">
                                                <span class="icon-design-pencil-rule-streamline"><span class="sr-only">&amp;</span></span>
                                            </div>
                                            <h4 class="content-title"><a href="#">Замер</a></h4>
                                        </div>
                                        <div class="icon-desc">
                                            <div class="des">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="col-wrap">
                                    <div class="ico-box">
                                        <div class="icon-title">
                                            <div class="icon">
                                                <span class="icon-eye"><span class="sr-only">&amp;</span></span>
                                            </div>
                                            <h4 class="content-title"><a href="#">Выбор материала по образцам</a></h4>
                                        </div>
                                        <div class="icon-desc">
                                            <div class="des">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="col-wrap">
                                    <div class="ico-box">
                                        <div class="icon-title">
                                            <div class="icon">
                                                <span class="icon-design-graphic-tablet-streamline-tablet"><span class="sr-only">&amp;</span></span>
                                            </div>
                                            <h4 class="content-title"><a href="#">Эскиз</a></h4>
                                        </div>
                                        <div class="icon-desc">
                                            <div class="des">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="col-wrap">
                                    <div class="ico-box">
                                        <div class="icon-title">
                                            <div class="icon">
                                                <span class="icon-calculator"><span class="sr-only">&amp;</span></span>
                                            </div>
                                            <h4 class="content-title"><a href="#">Расчет стоимости</a></h4>
                                        </div>
                                        <div class="icon-desc">
                                            <div class="des">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="col-wrap">
                                    <div class="ico-box">
                                        <div class="icon-title">
                                            <div class="icon">
                                                <span class="custom-icon-layers"><span class="sr-only">&amp;</span></span>
                                            </div>
                                            <h4 class="content-title"><a href="#">3D визуализация</a></h4>
                                        </div>
                                        <div class="icon-desc">
                                            <div class="des">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="col-wrap">
                                    <div class="ico-box">
                                        <div class="icon-title">
                                            <div class="icon">
                                                <span class="icon-truck"><span class="sr-only">&amp;</span></span>
                                            </div>
                                            <h4 class="content-title"><a href="#">Доставка</a></h4>
                                        </div>
                                        <div class="icon-desc">
                                            <div class="des">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="col-wrap">
                                    <div class="ico-box">
                                        <div class="icon-title">
                                            <div class="icon">
                                                <span class="icon-tools"><span class="sr-only">&amp;</span></span>
                                            </div>
                                            <h4 class="content-title"><a href="#">Сборка</a></h4>
                                        </div>
                                        <div class="icon-desc">
                                            <div class="des">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
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
                        <a href="{{ route('kitchen') }}" class="info-block info-block-v2 block-1 text-center col-sm-6 col-lg-3">
                            <div class="icon">
                                <img src="img/icons/icon-planning.png" alt="planning">
                            </div>
                            <h3 class="block-title">Кухни</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                        </a>
                        <a href="{{ route('hall') }}" class="info-block info-block-v2 block-2 text-center col-sm-6 col-lg-3">
                            <div class="icon">
                                <img src="img/icons/icon-design.png" alt="design">
                            </div>
                            <h3 class="block-title">Шкафы и прихожие</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                        </a>
                        <a href="{{ route('commercial') }}" class="info-block info-block-v2 block-3 text-center col-sm-6 col-lg-3">
                            <div class="icon">
                                <img src="img/icons/icon-service.png" alt="design">
                            </div>
                            <h3 class="block-title">Офисная и торговая мебель</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                        </a>
                        <a href="{{ route('wardrobe') }}" class="info-block info-block-v2 block-4 text-center col-sm-6 col-lg-3">
                            <div class="icon">
                                <img src="img/icons/icon-support.png" alt="design">
                            </div>
                            <h3 class="block-title">Гардеробы</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                        </a>
                    </div>
                </div>
            </section>

            <section class="content-block">
                <div class="container">
                        <div class="contact-container">
                            <div class="demo-wrapper content-block text-center py-0">
                                <h3>Свяжитесь с мной</h3>
                                <div class="divider-v2"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- contact form -->
                                    <form action="#" method="post" id="contact_form" class="waituk_contact-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Как я могу к Вам обращаться?*" id="con_fname" name="con_fname" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="tel" placeholder="Номер телефона*" id="con_phone" name="con_phone" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Комментарий" id="con_message" name="con_message"></textarea>
                                        </div>
                                        <div class="btn-container">
                                            <button id="btn_sent" class="btn btn-primary btn-arrow">Связаться</button>
                                            <p id="error_message"> </p>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 col-xl-5 offset-xl-1">
                                    <div class="info-slot mb-2">
                                        <div class="icon"><span class="custom-icon-map-marker"></span></div>
                                        <div class="text">
                                            <address>Киев, Украина</address>
                                        </div>
                                    </div>
                                    <div class="info-slot mb-2">
                                        <div class="icon"><span class="custom-icon-headset"></span></div>
                                        <div class="text">
                                            <ul class="content-list contact-list">
                                                <li><a href="tel:02078777777">(020) 7877 7777</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info-slot">
                                        <div class="icon"><span class="custom-icon-message"></span></div>
                                        <div class="text">
                                            <ul class="content-list contact-list">
                                                <li><a href="mailto:help@roxine-online.com">help@roxine-online.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <div class="map-holder embed-responsive-21by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325518.68780316407!2d30.252511957059642!3d50.4016990487754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1616951269047!5m2!1sru!2sua" height="450" style="border:0;" loading="lazy"></iframe>
            </div>

            <aside class="content-block">
                <div class="container">
                    <div class="logo-container">
                        <div class="owl-carousel logo-slide" id="waituk-owl-slide-4">
                            <div class="slide-item">
                                <img src="img/logo-01.png" alt="images description">
                            </div>
                            <div class="slide-item">
                                <img src="img/logo-02.png" alt="images description">
                            </div>
                            <div class="slide-item">
                                <img src="img/logo-03.png" alt="images description">
                            </div>
                            <div class="slide-item">
                                <img src="img/logo-04.png" alt="images description">
                            </div>
                            <div class="slide-item">
                                <img src="img/logo-03.png" alt="images description">
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <!--/main content wrapper -->
    </main>
@endsection