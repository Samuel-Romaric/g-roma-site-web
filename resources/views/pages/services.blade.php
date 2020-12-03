@extends('/layouts.app', ['title' => 'Mes Services'])

@section('breadcrumbs')

    @include('/layouts.partials.breadcrumbs', ['name' => 'Services', 'page' => 'Services'])

@stop

@section('content')

  @include('layouts.partials._services')

@stop