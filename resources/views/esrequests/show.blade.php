@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="{{ action('EsrequestsController@index') }}">Requests</a></li>
        <li class="active">Details</li>
    </ol>

    <h1>Request Details</h1>

    @if (!empty($esrequest))
        <div class="well">
        @foreach($fields as $field)
            <div class="row row-striped">
                <div class="col-xs-12 col-md-2 text-md-right"><strong>{{ $field }}</strong></div>
                <div class="col-xs-12 col-md-10">{{ $esrequest->$field }}</div>
            </div>
        @endforeach
        </div>
    @else
        <p>No request.</p>
    @endif
@endsection
