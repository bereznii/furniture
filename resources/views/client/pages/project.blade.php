@extends('client.layouts.layout')

@section('client.pages.content')
    <main>

        <!-- visual/banner of the page -->
        <section class="visual">
            <div class="visual-inner hall-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                <div class="centered">
                    <div class="container">
                        <div class="visual-text visual-center">
                            <h1 class="visual-title visual-sub-title">О проекте</h1>
                            <div class="breadcrumb-block">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('landing') }}">Мебельный мастер</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('hall') }}"> Шкафы и прихожие</a></li>
                                    <li class="breadcrumb-item active"> Название проекта</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/visual/banner of the page -->

        <!-- main content wrapper -->
        <div class="content-wrapper">
            <section class="content-block">
                <div class="container">
                    <div class="row portfolio-gallery">
                        <div class="bottom-space-medium-only col-lg-6">
                            <div class="img-block">
                                <img src="{{ asset('storage/projects/14.jpg') }}" alt="images">
                            </div>
                            <div class="portfolio-des py-4">
                                <h2 class="text-block-title">Описание проекта:</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-small col-md-6">
                                    <div class="img-block">
                                        <img src="{{ asset('storage/projects/1-1.jpg') }}" alt="images">
                                    </div>
                                </div>
                                <div class="col-small col-md-6">
                                    <div class="img-block">
                                        <img src="{{ asset('storage/projects/1-2.jpg') }}" alt="images">
                                    </div>
                                </div>
                                <div class="col-small col-md-6">
                                    <div class="img-block">
                                        <img src="{{ asset('storage/projects/1-3.jpg') }}" alt="images">
                                    </div>
                                </div>
                                <div class="col-small col-md-6">
                                    <div class="img-block">
                                        <img src="{{ asset('storage/projects/1-4.jpg') }}" alt="images">
                                    </div>
                                </div>
                                <div class="col-small col-md-6">
                                    <div class="img-block">
                                        <img src="{{ asset('storage/projects/1-5.jpg') }}" alt="images">
                                    </div>
                                </div>
                                <div class="col-small col-md-6">
                                    <div class="img-block">
                                        <img src="{{ asset('storage/projects/1-6.jpg') }}" alt="images">
                                    </div>
                                </div>
                                <div class="col-small col-md-6">
                                    <div class="img-block">
                                        <img src="{{ asset('storage/projects/1-7.jpg') }}" alt="images">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--/main content wrapper -->
    </main>
@endsection
