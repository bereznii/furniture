@extends('client.layouts.layout')

@section('client.pages.content')
    <main>
        <!-- visual/banner of the page -->
        <section class="visual">
            <div class="visual-inner wardrobe-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                <div class="centered">
                    <div class="container">
                        <div class="visual-text-large text-right visual-center">
                            <h1 class="visual-title visual-sub-title">Гардеробы</h1>
                            <p class="float-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit porro laudantium sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
                        <h2>Dream. <span>Create.</span> Deliver</h2>
                    </div>
                    <div class="description">
                        <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. </p>
                    </div>
                </div>
            </section>
            <section class="content-block p-0">
                <div class="container-fluid">
                    <div class="content-slot alternate-block">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInLeft">
                                    <img src="img/img-09.jpg" alt="images">
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="text-wrap">
                                    <h3>Digital experts working for you.</h3>
                                    <p>Chapter too parties its letters nor. Cheerful but whatever ladyship disposed yet judgment. Lasted answer oppose to ye months no esteem.</p>
                                    <p>Branched is on an ecstatic directly it. Put off continue you denoting returned juvenile. Looked person sister result mr to. Replied demands charmed do viewing ye colonel to so.</p>
                                    <p>Decisively inquietude he advantages insensible at oh continuing unaffected of. </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInRight">
                                    <img src="img/img-10.jpg" alt="images">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-wrap">
                                    <h3>Bring a perfectionist.</h3>
                                    <p>New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. </p>
                                    <p>See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating.</p>
                                    <p>Decisively inquietude he advantages insensible at oh continuing unaffected of. </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInLeft">
                                    <img src="img/img-11.jpg" alt="images">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-wrap">
                                    <h3>Leave no stone unterned.</h3>
                                    <p>New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. </p>
                                    <p>See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating.</p>
                                    <p>Decisively inquietude he advantages insensible at oh continuing unaffected of. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include('client.layouts.gallery')

            <div class="content-wrapper">
                <section class="content-block quotation-block wardrobe-bottom-block black-overlay-6 parallax" data-stellar-background-ratio="0.55">
                    @include('client.layouts.cta')
                </section>
            </div>

        </div>
        <!--/main content wrapper -->
    </main>
@endsection
