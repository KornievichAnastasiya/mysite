@extends('layout')
@section('title')
    @lang('planet.title_show', array('planetName' => $planet->planet))
@stop

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h2>
                @yield('content_title')
            </h2>
        </div>
    </div>

    <div class="container">
        <table class="table table-striped">
            @yield('content_table')
        </table>
    </div>
@stop
