<!-- Projects reviews block -->
<div id="client_reviews" class="container-fluid">
    <div class="row reviews-holder-slider">
        <!-- Wrapper for Slides -->
        <div class="container" id="clientReviews">
            <div class="review-form-holder well">
                @if(Session::has('message_success'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-hide="alert">&times;</a>
                        <strong>Спосибо!</strong>
                        {{ Session::get('message_success') }}
                    </div>
                @elseif(Session::has('message'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-hide="alert">&times;</a>
                        <strong>Ошибка!</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!!Form::vertical_open()->id('form-guest-review')
                                ->method('POST')
                                ->action(action('ReviewsController@store'))//action('ReviewsController@store')
                                ->class('form-review form-horizontal')
                                ->files('true')
                                ->enctype('multipart/form-data')!!}
                {{--{!!Form::token()!!}--}}
                <div class="col-sm-12 error-holder">
                    <div class="alert alert-danger none">
                        <a href="#" class="close" data-hide="alert">&times;</a>
                        <strong>Ошибка!</strong>
                        <ul class="errors-list"></ul>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12">{!! Form::text('name')
                        ->label('')
                        ->required()
                        ->id('review_name')
                        ->class('form-control')
                        ->placeholder('Ваше имя')!!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group relative">
                                <a class="btn btn-primary" href='javascript:;'>
                                    Выберите картинку...
                                    <input type="file" name="image" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                                </a>
                                &nbsp;
                                <span class='label label-info' id="upload-file-info">{!! $errors->has('image') !!}</span>
                                <div class="error">{{ $errors->first('image') }}</div>
                            </div>
                            {{--{!! Form::file('photo')
                        ->label('')
                        ->calss('form-control')
                        ->placeholder(trans('user.user.placeholder.photo')) !!}--}}
                        </div>
                    </div>
                    <div class="row q-text">
                        <div class="col-sm-12">{!! Form::textarea('review', '')
                        ->label('')
                        ->required()
                        ->id('review')
                        ->class('form-control')
                        ->placeholder('Ваше мнение')!!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 q-action">
                    <div class="row">
                        <div class="col-sm-12">
                            {!! Form::button('Отправить')->type('submit')->class('btn app-btn btn-orange btn-block') !!}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>{{-- .review-form-holder--}}
            <div class="clearfix"></div>
            <div class="list-holder">
                @if($itemsList)
                @foreach ($itemsList as $item)
                <div class="item">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="row circles-holder">
                        <div class="col-sm-3 col-sm-offset-1 review-img-block">
                            <div class="circle-block">
                                <div class="circle-inner img-review">
                                    @if($item->image)
                                        <img src="{{$item->image}}" />
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 review-content-block">
                            <h1>{{$item->name}}</h1>
                            <div class="quoted"><p>{{$item->review}}</p></div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <div class="text-center">
                {{$itemsList->render()}}
            </div>
        </div><!-- .container -->
    </div>
</div><!-- end reviews slider block -->
<!-- Client question block -->
{!! Theme::partial('client_questions') !!}
<!-- Find us on map block-->
{!! Theme::partial('on_map') !!}