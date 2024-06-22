<div class="content-wrapper">
    <section class="content-block portfolio-block eighty-percent">
        <div class="container-fluid">
            <div class="demo-wrapper content-block text-center pt-0 pb-2">
                <h2>Мої роботи</h2>
                <div class="dotted-border"></div>
            </div>
            <div class="row d-flex align-items-center">
                @foreach($projects as $project)
                    <div class="gallery-item col-md-6 col-lg-3 col-xl-3">
                        <a href="{{ route('project', ['category' => $category, 'slug' => $project->slug]) }}">
                            <figure class="caption-hover-full">
                                <div class="image-wrapper">
                                    <img src="{{ $project->getMedia('primaryImage')[0]->getUrl() }}"
                                         style="object-fit: cover;"
                                         alt="images description">
                                </div>
                                <div class="overlay-gallery">
                                    Детальніше
                                </div>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
