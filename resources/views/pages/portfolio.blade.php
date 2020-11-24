@extends('/layouts.app', ['title' => 'Portofolio'])

@section('breadcrumbs')

    @include('/layouts.partials.breadcrumbs', ['name' => 'Portofolio', 'page' => 'Portofolio'])

@stop


@section('content')

	@include('layouts.partials._portofolio_section')

@stop