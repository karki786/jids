@extends('layout')

@section('title', ('Add Banner'))

@section('content')
    <ol class="breadcrumb">
        <li><a href="#">{{('Home')}}</a></li>
        <li><a href="#" >{{('Banner Management')}}</a></li>
        <li class="active">{{('Add Banner')}}</li>
    </ol>

    <div id="page-title">
        <h2 style="display:inline-block">{{('Add Banner')}}</h2>
    </div>

    @include('errors/error')

    <div class="panel panel-default">
        <div class="panel-body">
            {!!Form::open(['method'=>'post','url'=>'system/banner/store', 'class'=>'form-horizontal bordered-row','enctype'=>'multipart/form-data'])!!}
            <div class="form-group" style="border-top: 0px;">
                <label class="col-sm-3 control-label require">{{('Title')}}</label>
                <div class="col-sm-6">
                    <input type="text" name="title" placeholder="" required="required" class="form-control" value="">
                </div>
            </div>

            <div class="form-group" style="border-top: 0px;">
                <label class="col-sm-3 control-label require">{{('Intro Text')}}</label>
                <div class="col-sm-6">
                    <input type="text" name="intro_text" placeholder="" required="required" class="form-control" value="">
                </div>
            </div>

            <div class="form-group" >
                <label class="col-sm-3 control-label require">{{('Image')}}</label>
                <div class="col-sm-6">
                    <input type="file" name="image"  class="form-control" value="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-7">
                    <a class="btn btn-default" href="{{URL::to('/system/banner')}}"><i class="glyphicon glyphicon-chevron-left" style="margin-right:10px;"></i>{{('Back')}}</a>
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok" style="margin-right:10px;"></i>{{('Save')}}</button>
                </div>
            </div>

            {!!Form::close() !!}
            <div class="clearfix"></div>

        </div>
    </div>

@stop

@section('scripts')

@stop
