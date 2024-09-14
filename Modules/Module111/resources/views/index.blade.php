@extends('module111::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module111.name') !!}</p>
@endsection
