<div class="content-wrapper">
    <section class="content-block pt-0 pb-5">
        <div class="container">
            <div class="contact-container">
                <div class="demo-wrapper content-block text-center py-0">
                    <h3>Свяжитесь со мной</h3>
                    <div class="divider-v2"></div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- contact form -->
                        <form action="{{ route('callback') }}" method="post" id="contact_form" class="waituk_contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Как я могу к Вам обращаться? *" id="con_fname" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" placeholder="Номер телефона *" id="con_phone" name="phone" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Комментарий" id="con_message" name="message"></textarea>
                            </div>
                            <div class="btn-container">
                                <button id="btn_sent" class="btn btn-secondary btn-arrow">Связаться</button>
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
</div>
