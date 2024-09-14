@extends('module8::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module8.name') !!}</p>
@endsection
