<div class="head">
    <div class="overlay force-height-full">
        <div class="main-overlay">{{--this container will trik fix the scale div container like background image--}}
            <nav class="navbar navbar-default navbar-static-top nav-social">
                <div class="container">
                    <ul class="nav navbar-nav navbar-right social-buttons">
                        <li class="evaluate"><a href=""></a><input type="search" name="evaluate-input" class="evaluate-input" placeholder="Оцени работу" value="" /></li>
                        <li class="fb"><a href=""></a></li>
                        <li class="ok"><a href=""></a></li>
                        <li class="vk"><a href=""></a></li>
                        <li class="btn-google"><a href=""></a></li>
                        <li class="btn-twitter"><a href=""></a></li>
                    </ul>
                </div>
            </nav>
            <div style="clear:both;"></div>
            <div class="container">
                <h1 class="contact-phone text-right" title="Контактный телефон">+7 (926) 923-19-45</h1>
            </div>
            <nav class="navbar navbar-default navbar-static-top navbar-custom-menu">
                <div class="container">
                    <div class="navbar-header">
                        <div class="row no-gutter">
                            <div class="col-xs-9 col-sm-12 brand-wrapper"><a class="navbar-brand block" href="{{trans_url('/')}}"><img src="{{asset('img/logo/logo.png')}}" alt="Lavalite" class="img-responsive" /></a></div>
                            <div class="col-xs-3 visible-xs toggle-menu-wrapper">
                                <a href="#client_login"><img src="{{asset('img/key-icon.jpg')}}" class="img-responsive" /></a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"><img src="{{asset('img/toggle-menu-icon.jpg')}}" class="img-responsive" /></button>
                            </div>

                        </div>
                    </div>
                    <div class="menu-wrapper">
                        <ul class="nav navbar-nav navbar-right nav-login hidden-xs">
                            <li class="login-btn"><a href="/#client_login" onclick=""><img src="{{asset('img/key-icon.jpg')}}" class="img-responsive" /></a></li>
                            <li class="collapse-btn"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"><img src="{{asset('img/toggle-menu-icon.jpg')}}" class="img-responsive" /></button></li>
                        </ul>
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="">О компании</a></li>
                                <li><a href="/#priceBlock">Цены</a></li>
                                <li><a href="">Фотогалерея</a></li>
                                <li><a href="#clientReviews">Отзывы</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

        </div>
    </div>{{--end overlay--}}
</div> {{--end head block--}}
 {{--<div id="wrap">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div id="navbar">
                    <ul class="nav navbar-links pull-right" id="js-buttons">
                        @if(Auth::check())
                            <li><a href="{{ trans_url('home') }}" class="login">{{ get_users('name') }}</a></li>
                            <li><a href="{{ trans_url('logout') }}" class="logout">LOGOUT</a></li>
                        @else
                            <li><a href="{{ trans_url('login') }}" class="login">LOGIN</a></li>
                        @endif
                    </ul>
                </div>
                <div class="navbar-header">
                 <a class="navbar-brand" href="{{ trans_url('/') }}"> <img src="{{ asset('img/logo/default.png') }}" alt="Lavalite"> </a>
                </div>
            </div>
        </nav>
</div>--}}