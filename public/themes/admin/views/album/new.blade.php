<div class="box-header with-border">
    <h3 class="box-title">  {{ trans('Фотоальбом') }}</h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" data-action='NEW' data-load-to='#entry-album' data-href='{{Trans::to('admin/album/album/create')}}'><i class="fa fa-times-circle"></i> {{ trans('cms.new') }}</button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" style="min-height:100px">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h1 class="text-center">
            <small>
                <button type="button" class="btn btn-app" data-toggle="tooltip" data-placement="top" title=""  id="btn-new-permission-icn">
                    <span class="badge bg-purple">{{ \App\Models\Album::count() }}</span>
                    <i class="fa fa-plus-circle  fa-3x"></i>
                    Создать Альбом
                </button><br .>
                Нажмите на ссылки ниже для просмотра деталей
            </small>
            </h1>
        </div>
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('#btn-new-permission, #btn-new-permission-icn').click(function(){
        $('#entry-album').load('{{URL::to('admin/album/album/create')}}');
    });
});
</script>