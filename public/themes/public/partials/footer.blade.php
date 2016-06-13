<footer>
    <div class="footer2">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 platform-links">
                    <a class="footer-logo" href="http://www.lavalite.org/"><img src="{{ asset('img/logo/logo.png') }}" height="28" alt="Lavalite"></a>
                </div>
                <div class="col-sm-7 social">
                    <ul class="footer-links list-unstyled text-right">
                        <li class="ion-iphone"> +7 (926) 923-19-45</li>
                        <li class="ion-email"> <a href="mailto:info@SERG-STROY.ru"> info@SERG-STROY.ru</a></li>
                        <li class="copyright">&copy; SergStroy все права защищены.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 platform-links">
                    <ul class="footer-links">
                        <li><a href="{{URL::to('about-us.html')}}">About</a></li>
                        @if(Auth::check())
                            <li><a href="{{ trans_url('logout') }}" class="logout">Logout</a></li>
                        @else
                            <li><a href="{{ trans_url('login') }}" class="login"  target="_blank">Login</a></li>
                        @endif

                    </ul>
                </div>
                <div class="col-sm-2 logo">
                    <a href="http://www.lavalite.org/"><img src="{{ asset('img/logo/sm-default.png') }}" height="28" alt="Lavalite"></a>
                </div>
                <div class="col-sm-5 social">
                    <ul class="footer-links">
                        <li><a href="https://twitter.com/lavalitecms" target="_blank">Twitter</a></li>
                        <li><a href="https://github.com/LavaLite" target="_blank">GitHub</a></li>
                        <li><a href="https://www.facebook.com/lavalite/" target="_blank">Facebook</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 copyright"> &copy; 2016 Lavalite </div>
            </div>
        </div>
    </div>
</footer>
