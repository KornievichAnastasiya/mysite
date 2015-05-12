@extends('layout')

@section('title')

    @lang('planet.title_index')


@stop

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>@lang('planet.title_index')</h1>

            <p>@lang('admin.count_in_database.sectors'):
                <a href="/admin/sectors">{{ $sectors }}</a>
                <a href="admin/sectors/add" type="button" class="btn btn-default btn-xs btn-success"
                   style="border-radius: 10px;">
                    <span class="glyphicon-plus"></span>
                </a>
            </p>

            <p>@lang('admin.count_in_database.stars'):<a href={{ URL::action('admin\StarController@index') }}> {{ $stars}}</a>
                <a href="admin/stars/add" type="button" class="btn btn-default btn-xs btn-success"
                   style="border-radius: 10px;">
                    <span class="glyphicon-plus"></span>
                </a>
            </p>

            <p>@lang('admin.count_in_database.planets'): <a href={{ URL::route('admin_planets_show') }}> {{ $planets }}</a>
                <a href={{URL::route('planets.create')}} type="button" class="btn btn-default btn-xs btn-success"
                   style="border-radius: 10px;">
                    <span class="glyphicon-plus"></span>
                </a>
            </p>

        </div>
    </div>



@stop
