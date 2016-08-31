<div class="row">
    <div class='col-md-4 col-sm-6'>
        {!! Form::text('name')
        -> label(trans('Название'))
        -> placeholder(trans('Название'))!!}
    </div>
    <div class='col-md-4 col-sm-6'>
        {!! Form::text('user_id')
        -> label(trans('Привязать за'))
        -> placeholder(trans('Привязать за'))!!}
    </div>
</div>
<div class="row">
    <div class='col-md-8 col-sm-12'>
        {!! Form::textarea('description')
        -> label(trans('Описание'))
        -> placeholder(trans('Описание альбома'))!!}
    </div>
</div>