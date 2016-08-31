@extends('admin::curd.index')
@section('heading')
<i class="fa fa-file-text-o"></i> {!! trans('Фото-галерея') !!} <small> {!! trans('Альбомы') !!}</small>
@stop

@section('title')
{!! trans('Список фотоальбомов') !!}
@stop

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{!! URL::to('admin') !!}"><i class="fa fa-dashboard"></i> {!! trans('Главная') !!} </a></li>
    <li class="active">{!! trans('Альбомы') !!}</li>
</ol>
@stop

@section('entry')
<div id='entry-album' class="box box-warning">
</div>
@stop

@section('tools')
@stop

@section('content')
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <th>{!! trans('ID')!!}</th>
        <th>{!! trans('Имя')!!}</th>
        <th>{!! trans('Привязон за')!!}</th>
        <th>{!! trans('Описание')!!}</th>
        <th>{!! trans('Дата Добавления')!!}</th>
        {{--<th>{!! trans('Количество')!!}</th>--}}
    </thead>
</table>

@stop
@section('script')
<script type="text/javascript">
var oTable;
$(document).ready(function(){
    $('#entry-album').load('{{URL::to('admin/album/album/0')}}');
    oTable = $('#main-list').dataTable( {
        "ajax": '{{ URL::to('/admin/album/album') }}',
        "columns": [
            {data :'id'},
            {data :'name'},
            {data :'user_name'},
            {data :'description'},
            {data :'created_at'},
        ]/*,
        "albumsLength": 50*/
    });

    $('#main-list tbody').on( 'click', 'tr', function () {
        $(this).toggleClass("selected").siblings(".selected").removeClass("selected");

        var d = $('#main-list').DataTable().row( this ).data();

        $('#entry-album').load('{{URL::to('admin/album/album')}}' + '/' + d.id);

    });
});
</script>
@stop

@section('style')
@stop