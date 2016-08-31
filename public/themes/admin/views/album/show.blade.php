<div class="box-header with-border">
    <h3 class="box-title">Просмотр Альбома [{{ $album->name }}]</h3>
    <div class="box-tools pull-right">
       <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#entry-album' data-href='{{Trans::to('admin/album/album/create')}}'><i class="fa fa-times-circle"></i> {{ trans('Добавить') }}</button>
        @if($album->id)
        <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#entry-album' data-href='{{ trans_url('/admin/album/album') }}/{{$album->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('Изменить') }}</button>
        <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#entry-album' data-datatable='#main-list' data-href='{{ trans_url('/admin/album/album') }}/{{$album->getRouteKey()}}' >
            <i class="fa fa-times-circle"></i> {{ trans('Удалить') }}
        </button>
        @endif
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab"> {{ trans('Альбом') }}</a></li>
        </ul>
        {!!Form::vertical_open()
        ->id('user-album-show')
        ->method('PUT')
        ->action(trans_url('admin/album/album/'. $album->getRouteKey()))!!}
        {!!Form::token()!!}
            <div class="tab-content">
                <div class="tab-pane active" id="details">
                    @include('admin::album.entry')
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>