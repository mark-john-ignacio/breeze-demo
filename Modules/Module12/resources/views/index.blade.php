@extends('module12::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module12.name') !!}</p>
@endsection
