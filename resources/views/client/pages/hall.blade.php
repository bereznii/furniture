@extends('client.layouts.layout')

@section('client.pages.content')

    <script type="application/ld+json">
    {
     "@context": "http://schema.org",
     "@type": "BreadcrumbList",
     "itemListElement":
     [
      {
       "@type": "ListItem",
       "position": 1,
       "item":
       {
        "@id": "https://mebelnyymaster.com.ua/",
        "name": "Меблевий майстер"
        }
      },
      {
       "@type": "ListItem",
      "position": 2,
      "item":
       {
         "@id": "https://mebelnyymaster.com.ua/hall",
         "name": "Шафи та передпокій"
       }
      }
     ]
    }
    </script>

    <main>
        <!-- visual/banner of the page -->
        <section class="visual">
            <div class="visual-inner hall-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                <div class="centered">
                    <div class="container">
                        <div class="visual-text-large text-center visual-center">
                            <h1 class="visual-title visual-sub-title">Шафи та передпокій</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/visual/banner of the page -->

        <!-- main content wrapper -->
        <div class="content-wrapper">
            <section class="content-block">
                <div class="container text-center">
                    <div class="heading bottom-space mb-4">
                        <h2>Індивідуальність. <span>Сервіс.</span> Якість.</h2>
                    </div>
                    <div class="description">
                        <h5>
                            Що може тішити як порядок у домі. Шафи – це те, що робить наш будинок у повному порядку.
                            Замовивши шафу на свій смак і комфорт, ви будете радіти, як все компактно та продумано.<br>
                            Передпокій нас щодня проводить посмішкою в дзеркалі і зустрічає ввечері з теплом і запахом улюбленого будинку.
                        </h5>
                    </div>
                </div>
            </section>
            <section class="content-block p-0 steps-block">
                <div class="container-fluid">
                    <div class="content-slot alternate-block">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInLeft">
                                    <img src="{{ asset('img/steps/step1-hall.jpg') }}" loading="lazy" alt="images">
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="text-wrap">
                                    <h3>Перший крок.</h3>
                                    <ul>
                                        <li>
                                            Замір
                                        </li>
                                        <li>
                                            Консультація та вибір фасадів, корпусу
                                        </li>
                                        <li>
                                            Рекомендації щодо фурнітури
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInRight">
                                    <img src="{{ asset('img/steps/step2-hall.jpg') }}" loading="lazy" alt="images">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-wrap">
                                    <h3>Другий крок.</h3>
                                    <ul>
                                        <li>
                                            Розрахунок вартості
                                        </li>
                                        <li>
                                            Розробка проекту
                                        </li>
                                        <li>
                                            3D візуалізації
                                        </li>
                                        <li>
                                            Погодження всіх деталей
                                        </li>
                                        <li>
                                            Підписання договору
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInLeft">
                                    <img src="{{ asset('img/steps/step3-hall.jpg') }}" loading="lazy" alt="images">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-wrap">
                                    <h3>Третій крок.</h3>
                                    <ul>
                                        <li>
                                            Доставка
                                        </li>
                                        <li>
                                            Збирання
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include('client.layouts.gallery')

            <div class="content-wrapper">
                <section class="content-block quotation-block hall-bottom-block black-overlay-6 parallax" data-stellar-background-ratio="0.55">
                    @include('client.layouts.cta')
                </section>
            </div>

        </div>
        <!--/main content wrapper -->

    </main>
@endsection
