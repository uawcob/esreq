@extends('layouts.app')

@section('content')
<h1>Administration</h1>

<ul>
    <li>
        <a href="{{ route('admin.requests.unfulfilled') }}">
            New Requests
        </a>
    </li>
</ul>

@endsection
