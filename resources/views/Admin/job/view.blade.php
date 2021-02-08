@extends('layout')
@section('title') View of Job @endsection
@section('content')

    <div class="panel panel-flat border-top-info">
        <div class="breadcrumb-line"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active">Job <span class="badge badge-info"></span></li>
            </ul>
        </div>
        <div class="panel-heading">

        </div>

        <br>
        <div class="table-responsive">
            <table class="table table-hover">
                <tr>
                    <th>{{('S.N.')}}</th>
                    <th>{{('Name') }}</th>
                    <th>{{('Email')}} </th>
                    <th>{{('Phone No')}} </th>


                    <th>{{('Action')}}</th>

                </tr>

                <tbody>

                @if($datas->isEmpty())
                    <tr>
                        <td class="no-data" colspan="6">
                            <b>{{('No data to display!')}}</b>
                        </td>
                    </tr>
                @else

                    @foreach($datas as $datum)
                        @php $a=1;@endphp
                        <tr>
                            <td>{{ $a++ }}</td>
                            <td>{{$datum->name}}</td>
                            <td>{{$datum->email}}</td>
                            <td>{{$datum->phone}}</td>
                            <td>

                                <a class="btn btn-sm btn-info btn_glyph"
                                   href="{{URL::to('/download/resume', $datum->id)}}"><i
                                            class="glyphicon glyphicon-search"></i> {{('Download  Cv ')}}</a>

                            </td>

                        </tr>
                    @endforeach
                @endif
                </tbody>

            </table>
        </div>
    </div>


@endsection
