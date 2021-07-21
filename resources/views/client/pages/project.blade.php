@extends('client.layouts.layout')

@section('client.pages.content')
    <main>

        <!-- visual/banner of the page -->
        <section class="visual">
            <div class="visual-inner hall-banner dark-overlay parallax"
{{--                 data-stellar-background-ratio="0.55"--}}
                 style="background-image: url({{ $project['backgroundImage']->getUrl() }}); background-position: center;">
                <div class="centered">
                    <div class="container">
                        <div class="visual-text visual-center">
                            <h1 class="visual-title visual-sub-title">О проекте</h1>
                            <div class="breadcrumb-block">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('landing') }}">Мебельный мастер</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route($categorySlug) }}"> {{ $categoryName }}</a></li>
                                    @if(isset($project['info']->name))
                                        <li class="breadcrumb-item active"> {{ $project['info']->name }}</li>
                                    @endif
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
                        @if(!empty($project['info']->description))
                            <div class="bottom-space-medium-only col-lg-6">
                                <div class="img-block">
                                    <a class="fancybox d-none d-md-block" rel="group" href="{{ $project['primaryImage']->getUrl() }}">
                                        <img src="{{ $project['primaryImage']->getUrl() }}" alt="images">
                                    </a>
                                    <img class="d-block d-sm-block d-md-none" src="{{ $project['primaryImage']->getUrl() }}" alt="images">
                                </div>
                                <div class="portfolio-des py-4">
                                    <h2 class="text-block-title">Описание проекта:</h2>
                                    {!! $project['info']->description !!}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row d-flex align-items-center">
                                    @foreach($project['secondaryImages'] as $project)
                                        <div class="col-small col-md-6">
                                            <a class="fancybox fancybox d-none d-md-block" rel="group" href="{{ $project->getUrl() }}">
                                                <img src="{{ $project->getUrl() }}" alt="images">
                                            </a>
                                            <img class="d-block d-sm-block d-md-none" src="{{ $project->getUrl() }}" alt="images">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="col-lg-12">
                                <div class="row d-flex align-items-center">
                                    <div class="col-small col-md-3">
                                        <a class="fancybox d-none d-md-block" rel="group" href="{{ $project['primaryImage']->getUrl() }}">
                                            <img src="{{ $project['primaryImage']->getUrl() }}" alt="images">
                                        </a>
                                        <img class="d-block d-sm-block d-md-none" src="{{ $project['primaryImage']->getUrl() }}" alt="images">
                                    </div>
                                    @foreach($project['secondaryImages'] as $project)
                                        <div class="col-small col-md-3">
                                            <a class="fancybox fancybox d-none d-md-block" rel="group" href="{{ $project->getUrl() }}">
                                                <img src="{{ $project->getUrl() }}" alt="images">
                                            </a>
                                            <img class="d-block d-sm-block d-md-none" src="{{ $project->getUrl() }}" alt="images">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </section>
        </div>
        <!--/main content wrapper -->
    </main>
@endsection
