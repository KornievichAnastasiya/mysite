@extends('layout')

@section('title')
 @lang('planet_title_delete')
@stop

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>@lang('planet.deleted_planet') "{{$planetName}}" deleted!</h1>

            <div>
                <a href="{{{URL::action('PlanetsController@create')}}}">← Create new planets</a>/
                <a href="{{Config::get('app.url')}}">@lang('action.home') → </a>
            </div>
        </div>
    </div>
@endsection