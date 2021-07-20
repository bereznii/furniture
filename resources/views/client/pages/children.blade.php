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
        "name": "Мебельный мастер"
        }
      },
      {
       "@type": "ListItem",
      "position": 2,
      "item":
       {
         "@id": "https://mebelnyymaster.com.ua/children",
         "name": "Детская мебель"
       }
      }
     ]
    }
    </script>

    <main>

        <!-- visual/banner of the page -->
        <section class="visual">
            <div class="visual-inner children-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                <div class="centered">
                    <div class="container">
                        <div class="visual-text-large text-center visual-center">
                            <h1 class="visual-title visual-sub-title">Детская мебель</h1>
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
                        <h2>Индивидуальность. <span>Сервис.</span> Качество.</h2>
                    </div>
                    <div class="description">
                        <h5>
                            Конструктор, игрушки, любимый мишка, шведская стенка, мягкая подушка и звездное небо на потолке.<br>
                            Вечерние игры с мамой и папой.<br>
                            Как же классно быть маленьким, а еще лучше иметь свою комнату, в которой все продумано до мелочей. Стеллаж, шкаф для вещей, а еще много удобных полочек, ну и конечно же стол для творчества.
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
                                    <img src="{{ asset('img/steps/step1-children.jpg') }}" loading="lazy" alt="images">
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
                                    <img src="{{ asset('img/steps/step2-children.jpg') }}" loading="lazy" alt="images">
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
                                    <img src="{{ asset('img/steps/step3-children.jpeg') }}" loading="lazy" alt="images">
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
                <section class="content-block quotation-block children-bottom-block black-overlay-6 parallax" data-stellar-background-ratio="0.55">
                    @include('client.layouts.cta')
                </section>
            </div>

        </div>
        <!--/main content wrapper -->

    </main>
@endsection
