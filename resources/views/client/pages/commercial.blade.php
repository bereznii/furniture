@extends('client.layouts.layout')

@section('client.pages.content')
    <main>
        <!-- visual/banner of the page -->
        <section class="visual">
            <div class="visual-inner commercial-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                <div class="centered">
                    <div class="container">
                        <div class="visual-text-large text-left visual-center">
                            <h1 class="visual-title visual-sub-title">Офисная и торговая мебель</h1>
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
                    <div class="heading bottom-space">
                        <h2>Индивидуальность. <span>Сервис.</span> Качество.</h2>
                    </div>
                    <div class="description">
                        <p>
                            Стильный современный офис с комфортном всегда украшает качественно продуманная мебель. В торговых точках важно на каких полках лежит товар, в каком стиле все продуманно, что клиенту было удобно выбрать и остаться довольным.
                        </p>
                    </div>
                </div>
            </section>
            <section class="content-block p-0 steps-block">
                <div class="container-fluid">
                    <div class="content-slot alternate-block">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInLeft">
                                    <img src="{{ asset('img/steps/step1-1.jpg') }}" alt="images">
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="text-wrap">
                                    <h3>Первый шаг.</h3>
                                    <ul>
                                        <li>
                                            Замер
                                        </li>
                                        <li>
                                            Консультация и выбор фасадов и корпуса
                                        </li>
                                        <li>
                                            Рекомендации по фурнитуре
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInRight">
                                    <img src="{{ asset('img/steps/step2-commercial.jpg') }}" alt="images">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-wrap">
                                    <h3>Второй шаг.</h3>
                                    <ul>
                                        <li>
                                            Расчет стоимости
                                        </li>
                                        <li>
                                            Разработка проекта
                                        </li>
                                        <li>
                                            3D визуализации
                                        </li>
                                        <li>
                                            Согласование всех деталей
                                        </li>
                                        <li>
                                            Подписание договора
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInLeft">
                                    <img src="{{ asset('img/steps/step3-commercial.jpg') }}" alt="images">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-wrap">
                                    <h3>Третий шаг.</h3>
                                    <ul>
                                        <li>
                                            Доставка
                                        </li>
                                        <li>
                                            Сборка
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
                <section class="content-block quotation-block commercial-bottom-block black-overlay-6 parallax" data-stellar-background-ratio="0.55">
                    @include('client.layouts.cta')
                </section>
            </div>

        </div>
        <!--/main content wrapper -->
    </main>
@endsection
