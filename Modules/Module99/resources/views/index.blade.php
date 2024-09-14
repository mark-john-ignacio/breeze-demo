@extends('module99::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module99.name') !!}</p>
@endsection
