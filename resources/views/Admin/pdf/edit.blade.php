@extends('layout')

@section('title', ('Edit Pdf'))

@section('content')
    <ol class="breadcrumb">
        <li><a href="#">{{('Home')}}</a></li>
        <li><a href="#">{{('pdf Management')}}</a></li>
        <li class="active">{{('Edit Pdf')}}</li>
    </ol>

    <div id="page-title">
        <h2 style="display:inline-block">{{('Edit Pdf')}}</h2>
    </div>

    @include('errors/error')
    <div class="panel panel-default">
        <div class="panel-body">
            {!!Form::model($data,['method'=>'PUT','url'=>'system/pdf/update/'.$data->id, 'class'=>'form-horizontal bordered-row','enctype'=>'multipart/form-data'])!!}
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="form-group" style="border-top: 0px;">
                <label class="col-sm-3 control-label require">{{'Title'}}</label>
                <div class="col-sm-6">
                    <input type="text" name="title" placeholder="" class="form-control" value="{{$data->title}}">
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Previous upload</label>
                <div class="col-sm-8">
                    <a href="{{url('/download/pdf', $data->id)}}">View Previous</a>
                </div>
            </div>


            <div class="form-group" >
                <label class="col-sm-3 control-label require">{{('File')}}</label>
                <div class="col-sm-6">
                    <input type="file" name="file" accept=".pdf" class="form-control" value="">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-7">
                    <a class="btn btn-default" href="{{URL::to('system/pdf')}}"><i
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
