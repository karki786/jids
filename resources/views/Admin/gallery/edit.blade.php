@extends('layout')

@section('title', ('Edit Gallery '))

@section('content')
    <ol class="breadcrumb">
        <li><a href="#">{{('Home')}}</a></li>
        <li><a href="#">{{('Gallery Management')}}</a></li>
        <li class="active">{{('Edit Gallery')}}</li>
    </ol>

    <div id="page-title">
        <h2 style="display:inline-block">{{('Edit Gallery')}}</h2>
    </div>

    @include('errors/error')
    <div class="panel panel-default">
        <div class="panel-body">
            {!!Form::model($data,['method'=>'PUT','url'=>'system/gallery/update/'.$data->id, 'class'=>'form-horizontal bordered-row','enctype'=>'multipart/form-data'])!!}
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="form-group" style="border-top: 0px;">
                <label class="col-sm-3 control-label require">{{'Title'}}</label>
                <div class="col-sm-6">
                    <input type="text" name="title" placeholder="" class="form-control" value="{{$data->title}}">
                </div>
            </div>

            <div class="form-group ">

                {!! Form::label('image', ' Image:', ['class' => 'col-sm-3 control-label require']) !!}


                <div class="form-group">
                    <div class="col-sm-9">

                        <img src="{{asset('/uploads/gallery/'.$data->image)}}"
                             alt="{{ $data->image }}" style="height:170px;width:200px;">

                        <br>
                        {!! Form::file('image') !!}

                    </div>
                </div>

            </div>


            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-7">
                    <a class="btn btn-default" href="{{URL::to('system/gallery')}}"><i
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

@stop
