<div id="clientQuestion" class="container-fluid question-holder">
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
</div><!-- end .question-holder -->