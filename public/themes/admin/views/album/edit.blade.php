<div class="box-header with-border">
    <h3 class="box-title">{{ trans('Просмотр Альбома') }} [{!!$album->name!!}] </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#edit-album'  data-load-to='#entry-album' data-datatable='#main-list'><i class="fa fa-floppy-o"></i> {{ trans('Сохранить') }}</button>
        <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#entry-album' data-href='{{Trans::to('admin/album/album')}}/{{$album->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('Отмена') }}</button>
       <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#album" data-toggle="tab">{{ trans('user.permission.tab.name') }}</a></li>
        </ul>
        {!!Form::vertical_open()
        ->id('edit-album')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(URL::to('admin/album/album/'.$album->getRouteKey()))!!}
        <div class="tab-content">
            <div class="tab-pane active" id="album">
                @include('admin::album.entry')
            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
