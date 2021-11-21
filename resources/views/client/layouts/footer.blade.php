<footer class="footer footer-v1">
    <div class="content-block footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="footer-nav inline-nav">
                        <ul>
                            <li>
                                <a href="{{ route('kitchen') }}" data-title="Кухни"> Кухни </a>
                            </li>
                            <li>
                                <a href="{{ route('hall') }}" data-title="Шкафы/Прихожие"> Шкафы / Прихожие </a>
                            </li>
                            <li>
                                <a href="{{ route('commercial') }}" data-title="Офисная/Торговая мебель"> Офисная / Торговая мебель </a>
                            </li>
                            <li>
                                <a href="{{ route('wardrobe') }}" data-title="Гардеробы/Тумбы"> Гардеробы / Тумбы </a>
                            </li>
                            <li>
                                <a href="{{ route('children') }}" data-title="Детская мебель"> Детская мебель </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 text-right">
                    <ul class="social-network with-text">
                        <li><a target="_blank" href="https://www.facebook.com/Mebelnyymaster"><span class="icon-facebook"></span></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/mebelnyymaster"><span class="icon-instagram"></span> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <p>© Copyright <b>Мебельный Мастер {{ date('Y') }}</b>. All Rights Reserved - Built by Me </p>
        </div>
    </div>
</footer>
