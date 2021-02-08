@extends('layout')

@section('title', ('Edit About English management'))

@section('content')
    <ol class="breadcrumb">
        <li><a href="#">{{('Home')}}</a></li>
        <li><a href="#" >{{('About English management')}}</a></li>
        <li class="active">{{(' Edit About English management')}}</li>
    </ol>

    <div id="page-title">
        <h2 style="display:inline-block">{{('AboutEnglish management')}}</h2>
    </div>

    @include('errors/error')
    <div class="panel panel-default">
        <div class="panel-body">
            {!!Form::model($data,['method'=>'PUT','url'=>'system/aboutEnglish/update/'.$data->id, 'class'=>'form-horizontal bordered-row','enctype'=>'multipart/form-data'])!!}
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    {!! Form::label('title', 'Title', ['class' => 'col-lg-3 control-label require']) !!}
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            {!! Form::text('title', $value = null, ['id'=>'title','placeholder'=>'','class'=>'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="row clearfix">--}}
                {{--<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">--}}
                    {{--{!! Form::label('slug', 'Slug', ['class' => 'col-lg-3 control-label']) !!}--}}
                {{--</div>--}}
                {{--<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">--}}
                    {{--<div class="form-group">--}}
                        {{--<div class="form-line">--}}
                            {{--{!! Form::text('slug', $value = null, ['id'=>'slug','placeholder'=>'','class'=>'form-control' ,'readonly'=>'readonly']) !!}--}}
                            {{--<span class="text-danger">{{ $errors->first('slug') }}</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    {!! Form::label('into_text', 'Intro Text', ['class' => 'col-lg-3 control-label']) !!}
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            {!! Form::text('into_text', $value = null, ['id'=>'intro_text','placeholder'=>'','class'=>'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('intro_text') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    {!! Form::label('details', 'Description', ['class' => 'col-lg-3 control-label']) !!}
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            {!! Form::textarea('details',$value = null, ['id'=>'texteditor','placeholder'=>'','class'=>'form-control texteditor']) !!}

                            <span class="text-danger">{{ $errors->first('details') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group ">

                {!! Form::label('cover_image', ' Image:', ['class' => 'col-sm-3 control-label ']) !!}


                <div class="form-group">
                    <div class="col-sm-9">
@if($data->cover_image)
                        <img src="{{asset('/uploads/page/'.$data->cover_image)}}"
                             alt="{{ $data->cover_image }}" style="height:170px;width:200px;">
@endif
                        <br>
                        {!! Form::file('cover_image') !!}

                    </div>
                </div>

            </div>


            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-7">
                    <a class="btn btn-default" href="{{URL::to('system/aboutEnglish')}}"><i
                                class="glyphicon glyphicon-chevron-left" style="margin-right:10px;"></i>{{('Back')}}</a>
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"
                                                                     style="margin-right:10px;"></i>{{('Update')}}
                    </button>
                </div>
            </div>
            {!!Form::close() !!}
            <div class="clearfix"></div>

        </div>
    </div>


@stop

@section('scripts')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#fileinput-preview-thumbnail').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script src="{{asset('admin/js/slugfy.js')}}"></script>


@stop
