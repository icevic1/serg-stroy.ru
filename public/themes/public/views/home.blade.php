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
                                <li class="login-btn"><a href="#client_login" onclick=""><img src="{{asset('img/key-icon.jpg')}}" class="img-responsive" /></a></li>
                                <li class="collapse-btn"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"><img src="{{asset('img/toggle-menu-icon.jpg')}}" class="img-responsive" /></button></li>
                            </ul>
                            <div class="collapse navbar-collapse" id="navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="">О компании</a></li>
                                    <li><a href="">Цены</a></li>
                                    <li><a href="">Фотогалерея</a></li>
                                    <li><a href="">Отзывы</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>
        </div>{{--end overlay--}}
    </div> {{--end head block--}}
    {{-- we can use class img-circle and width&height on img instead of my scripts--}}
    <div class="container">
        <div class="row circles-holder">
            <div class="col-md-4 text-center">
                <div class="circle-block">
                    <div class="circle-inner img-terms"></div>
                </div>
                <div class="title-circle">
                    <h2>Сроки</h2>
                    <h4>Сдача работы без задержек</h4>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="circle-block">
                    <div class="circle-inner img-quality"></div>
                </div>
                <div class="title-circle">
                    <h2>Качество</h2>
                    <h4>Соблюдение технологий</h4>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="circle-block">
                    <div class="circle-inner img-result"></div>
                </div>
                <div class="title-circle">
                    <h2>Результат</h2>
                    <h4>Удовлетворенность клиента</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row design-holder">
            <div class="col-sm-12 title text-center">
                <h1>Состав дизайн проекта</h1>
            </div>
        </div>
        <div class="row design-holder-blue">
            <div class="row-md-height">
                <div class="col-xs-12 col-md-5 col-md-height col-middle">
                    <div class="inside">
                        <div class="content question-block text-center">
                            <h1 class="bonuses">+ Бонус</h1>
                            <p>2 выезда дизайнера во время работы!</p>
                            <a href="" class="app-btn btn-orange">Задать вопрос</a>
                        </div>
                    </div>
                </div><!--
            --><div class="col-xs-12 col-md-7 col-md-height col-top">
                    <div class="inside">
                        <div class="content facility-block">
                            <ul class="services-list">
                                <li>Обмерный чертеж помещения</li>
                                <li>План после перепланировки с экспликацией помещений</li>
                                <li>План после перепланировки с размерами, уровнем пола и высотами</li>
                                <li>План демонтажа перегородок</li>
                                <li>Монтажный план перегородок</li>
                                <li>План с расстоновкой мебели</li>
                                <li>План пола с указанием типов покрытий</li>
                                <li>План потолка</li>
                                <li>Разрезы потолка с указанием высот</li>
                                <li>План привязки приборов освещения</li>
                                <li>План привязки приборов освещения и выключателей по группам</li>
                                <li>План привязки элетротехнических изделий, совмещенный с мебелью</li>
                                <li>План теплых полов</li>
                                <li>Ведомость отделки по помещениям с указанием площадей, примеров, объемов</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects slider block -->
    <div class="container-fluid">
        <div class="row projects-holder">
            <div class="col-sm-12 title text-center">
                <h1>Проекты</h1>
            </div>
        </div>
        <div class="row projects-holder-slider">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for Slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <!-- Set the first background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('{{asset('img/project_1.png')}}');"><img src="{{asset('img/project_1.png')}}" /></div>
                        {{--<div class="carousel-caption"><h2>Caption 1</h2></div>--}}
                    </div>
                    <div class="item">
                        <!-- Set the second background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('{{asset('img/project_1.png')}}"><img src="{{asset('img/project_1.png')}}" /></div>
                    </div>
                    <div class="item">
                        <!-- Set the third background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('{{asset('img/project_1.png')}}');"><img src="{{asset('img/project_1.png')}}" /></div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="ionicons ion-ios-arrow-back"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="ionicons ion-ios-arrow-forward"></span>
                </a>

            </div><!-- end of carusel-->



        </div>
    </div><!-- end Projects slider block -->

    <!-- Prices block -->
    <div class="container-fluid">
        <div class="row preices-holder">
            <div class="col-sm-12 title text-center">
                <h1>Цэны</h1>
            </div>
        </div>
        <div class="row preices-holder-content">
            <div class="col-md-12">
                <div class="container price-pack-holder">
                    <div class="row">
                        <div class="col-sm-8">
                            <ul class="services-list">
                                <li>Обмерный чертеж помещения</li>
                                <li>План после перепланировки с экспликацией помещений</li>
                                <li>План после перепланировки с размерами, уровнем пола и высотами</li>
                                <li>План демонтажа перегородок</li>
                            </ul>
                        </div>
                        <div class="col-sm-4 text-right">
                            <h1>800 <span>руб./м<sup>2</sup></span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <ul class="services-list">
                                <li>Обмерный чертеж помещения</li>
                                <li>План после перепланировки с экспликацией помещений</li>
                                <li>План после перепланировки с размерами, уровнем пола и высотами</li>
                                <li>План демонтажа перегородок</li>
                            </ul>
                        </div>
                        <div class="col-sm-4 text-right">
                            <h1>1500 <span>руб.</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <ul class="services-list">
                                <li>Регулярные выезды автора проекта на объект.</li>
                                <li>Регулярные выезды автора проекта в магазины.</li>
                                <li>Консультации строителей и поставщиков.</li>
                                <li>Своевременное внесение в проект изменений с согласия заказчика.</li>
                                <li>Консультация заказчика по выбору декоративных и отделочных материалов.</li>
                            </ul>
                        </div>
                        <div class="col-sm-4 text-right">
                            <h1>1500 <span>руб.</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 price-list text-right">
                            <a class="app-btn btn-orange" href="">Прай-лист</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end Projects prices block -->
    <!-- Projects feedback block -->
    <div class="container-fluid">
        <div class="row reviews-holder">
            <div class="col-sm-12 title text-center">
                <h1 class="color-orange">Отзывы</h1>
            </div>
        </div>
        <div class="row reviews-holder-slider">
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for Slides -->
                <div class="container">
                    <div class="carousel-inner">
                        <div class="item active">
                            <!-- Set the first background image using inline CSS below. -->
                            <div class="row circles-holder">
                                <div class="col-sm-3 col-sm-offset-1 review-img-block">
                                    <div class="circle-block">
                                        <div class="circle-inner img-review"></div>
                                    </div>
                                </div>
                                <div class="col-sm-7 review-content-block">
                                    <h1>Юля Студеникина</h1>
                                    <div class="quoted"><p>Для меня было истинным удовольствие работать с Екатериной Петровой. Она талантливый, креативный, яркий человек. Энергичная и жизнерадостная! Каждая ее работа не похожа на предыдущую, стили неповторимы. Она тонко чувствует Ваши потребности и предпочтения. Результат превосходит все ожидания!<br />Всем рекомендую!</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <!-- Set the first background image using inline CSS below. -->
                            <div class="row circles-holder">
                                <div class="col-sm-3 col-sm-offset-1 review-img-block">
                                    <div class="circle-block">
                                        <div class="circle-inner img-review"></div>
                                    </div>
                                </div>
                                <div class="col-sm-7 review-content-block">
                                    <h1>Юля Студеникина</h1>
                                    <div class="quoted"><p>Для меня было истинным удовольствие работать с Екатериной Петровой. Она талантливый, креативный, яркий человек. Энергичная и жизнерадостная! Каждая ее работа не похожа на предыдущую, стили неповторимы. Она тонко чувствует Ваши потребности и предпочтения. Результат превосходит все ожидания!<br />Всем рекомендую!</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                    <span class="ionicons ion-ios-arrow-back"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                    <span class="ionicons ion-ios-arrow-forward"></span>
                </a>
            </div><!-- end of carusel-->
            <div class="container text-right">
                <a href="" class="app-btn btn-orange">Отзывы клиентов</a>
            </div>
        </div>
    </div><!-- end Projects slider block -->
    <!-- Projects video feedback block -->
    <div class="container-fluid bg-gray">
        <div class="row reviews-holder">
            <div class="col-sm-12 title text-center">
                <h1 class="color-orange">Видео Отзывы</h1>
            </div>
        </div>
        <div class="row vreviews-holder-slider">
            <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for Slides -->
                <div class="container">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row circles-holder">
                                <div class="col-sm-3 col-sm-offset-1 review-img-block">
                                    <div class="circle-block">
                                        <div class="circle-inner img-vreview"></div>
                                    </div>
                                </div>
                                <div class="col-sm-7 review-content-block">
                                    <h1>Уолтер Брюс Уиллис</h1>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <!-- Set the first background image using inline CSS below. -->
                            <div class="row circles-holder">
                                <div class="col-sm-3 col-sm-offset-1 review-img-block">
                                    <div class="circle-block">
                                        <div class="circle-inner img-review"></div>
                                    </div>
                                </div>
                                <div class="col-sm-7 review-content-block">
                                    <h1>Юля Студеникина</h1>
                                </div>
                            </div>
                            {{--<div class="carousel-caption"><h2>Caption 1</h2></div>--}}
                        </div>
                    </div><!-- end carousel-inner -->
                </div><!-- end container -->
                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel3" data-slide="prev">
                    <span class="ionicons ion-ios-arrow-back"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel3" data-slide="next">
                    <span class="ionicons ion-ios-arrow-forward"></span>
                </a>
            </div><!-- end of carusel-->
            <div class="container text-right">
                <a href="" class="app-btn btn-orange">Отзывы клиентов</a>
            </div>
        </div>
    </div><!-- end Projects slider block -->
    <!-- Question block -->
    <div class="container-fluid question-holder">
        <div class="row">
            <div class="col-sm-12 title text-center">
                <h1>Вопросы</h1>
            </div>
        </div>
        <div class="row question-holder-content">
            <div class="col-md-12">
                <div class="container price-pack-holder">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="q-title">Остались вопросы?</h2>
                            <span class="sub-qtitle">Задать их нашему специалисту</span>
                        </div>
                    </div>
                    <div class="row q-form">
                        {!!Form::vertical_open()->id('form-guest-question')
                                ->method('POST')
                                ->action("/leave-question")/*ClientQuestionController@create*/
                                ->class('form-guest-question form-horizontal')!!}
                            <div class="col-sm-12 error-holder">
                                <div class="alert alert-danger none">
                                    <a href="#" class="close" data-hide="alert">&times;</a>
                                    <strong>Ошибка!</strong>
                                    <ul class="errors-list"></ul>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        {{--{!! Form::text('name','')->id('q_name')->class('form-control')->placeholder('Ваше имя')!!}--}}
                                        <input type="text" name="name" class="form-control" id="q_name" placeholder="Ваше имя" />
                                    </div>
                                    <div class="col-sm-6">
                                        {{--{!! Form::text('phone','')->id('q_phone')->class('form-control')->placeholder('Номер телефона')!!}--}}
                                        <input type="text" name="phone" class="form-control" id="q_phone" placeholder="Номер телефона">
                                    </div>
                                </div>
                                <div class="row q-text">
                                    <div class="col-sm-12">
                                        <textarea name="question" class="form-control" rows="3" placeholder="Ваш вопрос"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 q-action">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn app-btn btn-orange btn-block">Задать вопрос</button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end Projects slider block -->
    <!-- Question block -->
    <div class="container-fluid map-holder">
        <div class="row">
            <div class="col-sm-12 title text-center">
                <h1>Где мы находимся</h1>
            </div>
        </div>
        <div class="row map-content">
            <div class="col-md-12">
                <div id="map" style="width: 100%; height: 400px"></div>
            </div>
        </div>
    </div><!-- end Projects slider block -->
    <!-- Question block -->
    <div id="client_login" class="container-fluid stages-holder">
        <div class="row">
            <div class="col-sm-12 title text-center">
                <h1>Этапы работ</h1>
            </div>
        </div>
        <div class="row u-form">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        {!!Form::vertical_open()->id('client_login_form')
                                ->method('POST')
                                ->action('login')
                                ->class('form-horizontal')!!}
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        {!! Form::email('email','')-> placeholder(trans('user.user.placeholder.client_email'))!!}
                                    </div>
                                    <div class="col-sm-6">
                                        {!! Form::password('password','')->placeholder(trans('user.user.placeholder.client_password'))!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 q-action">
                                <div class="row">
                                    <div class="col-sm-12">
                                        @if(Auth::check())
                                            <a href="{{ trans_url('logout') }}" class="logout btn app-btn btn-orange btn-block">{!! trans('user.user.label.logout')!!}</a>
                                        @else
                                            {!! Form::submit(trans('user.user.label.login'), null, array('class' => 'btn app-btn btn-orange btn-block'))!!}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        @if(Auth::check())
        <div class="row stages-content">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Responsive calendar - START -->
                                    <div class="responsive-calendar">
                                        <div class="controls">
                                            <a class="pull-left" data-go="prev"><span class="ionicons ion-ios-arrow-back"></span></a>
                                            <h4><span data-head-year></span> <span data-head-month></span></h4>
                                            <a class="pull-right" data-go="next"><span class="ionicons ion-ios-arrow-forward"></span></a>
                                        </div><div class="clearfix"></div>
                                        <div class="day-headers">
                                            <div class="day header">П</div>
                                            <div class="day header">В</div>
                                            <div class="day header">С</div>
                                            <div class="day header">Ч</div>
                                            <div class="day header">П</div>
                                            <div class="day header">С</div>
                                            <div class="day header">В</div>
                                        </div>
                                        <div class="days" data-group="days">

                                        </div>
                                    </div>
                                    <!-- Responsive calendar - END -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 u-details">
                                    <h2 class="color-orange">Валерий</h2>
                                    <div class="text-muted">Графский переулок, дом 14, корпус 2, 4 этаж</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <a href="#" class="stage-img center-block"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div><!-- end Projects slider block -->