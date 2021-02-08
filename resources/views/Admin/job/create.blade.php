@extends('layout')

@section('title', ('Add New JOb'))

@section('content')
    <ol class="breadcrumb">
        <li><a href="#">{{('Home')}}</a></li>
        <li><a href="#">{{('JOb')}}</a></li>
        <li class="active">{{('Add JOb')}}</li>
    </ol>

    <div id="page-title">
        <h2 style="display:inline-block">{{('Add JOb')}}</h2>
    </div>

    @include('errors/error')

    <div class="panel panel-default">
        <div class="panel-body">
            {!!Form::open(['method'=>'post','url'=>'system/job/store', 'class'=>'form-horizontal bordered-row','enctype'=>'multipart/form-data'])!!}
            <div class="form-group" style="border-top: 0px;">
                <label class="col-sm-3 control-label require">{{('Title')}}</label>
                <div class="col-sm-6">
                    <input type="text" name="title" placeholder="" required="required" class="form-control" value="">
                </div>
            </div>
            <div class="form-group" style="border-top: 0px;">
                <label class="col-sm-3 control-label">{{('Date Deadline')}}</label>
                <div class="col-sm-6">
                    {!! Form::text('dead_line',$value = null, ['id'=>'','class'=>'form-control datepicker']) !!}
                </div>
            </div>
            <div class="form-group" style="border-top: 0px;">
                <label class="col-sm-3 control-label ">{{('Opening')}}</label>
                <div class="col-sm-6">
                    <input type="text" name="opening" placeholder="" required="" class="form-control" value="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label require">{{('Description')}}</label>
                <div class="col-sm-9">
                    {{ Form::textarea('detail',null,['class'=>' texteditor','rows'=>'10','placeholder'=>'Description']) }}

                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-7">
                    <a class="btn btn-default" href="{{URL::to('/system/job')}}"><i
                                class="glyphicon glyphicon-chevron-left" style="margin-right:10px;"></i>{{('Back')}}</a>
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"
                                                                     style="margin-right:10px;"></i>{{('Save')}}
                    </button>
                </div>
            </div>

            {!!Form::close() !!}
            <div class="clearfix"></div>

        </div>
    </div>

@stop

@section('scripts')

@stop
