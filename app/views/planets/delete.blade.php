@extends('layout')

@section('title')
   Планете удалена
@stop

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Congratulations, planets "{{$planetName}}" deleted!</h1>

            <div>
                <a href="{{{URL::action('PlanetsController@store')}}}">← Create new planets</a>/
                <a href="{{Config::get('app.url')}}">Go Home → </a>
            </div>
        </div>
    </div>
@endsection