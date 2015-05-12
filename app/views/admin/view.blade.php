@extends('layout')


@section('title')
    {{$title}}
    @stop

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h2>
                {{$contentTitle}}
            </h2>
        </div>
    </div>

    <div class="container">
        <table class="table table-striped">
            <th>
                @foreach($columns as $column)
                    <td>{{$column}} </td>
                @endforeach
                <td>@lang('admin.action') </td>
            </th>
           {{-- @foreach($data as $item)
                <tr>
                    @foreach($item as $key=>$value)
                        <td>{{$value}}</td>
                    @endforeach
                </tr>
                <td>+ / *</td>
            @endforeach--}}
        </table>
    </div>
@stop
