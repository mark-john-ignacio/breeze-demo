@extends('module7::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module7.name') !!}</p>
@endsection
