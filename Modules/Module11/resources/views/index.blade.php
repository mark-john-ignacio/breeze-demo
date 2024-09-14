@extends('module11::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module11.name') !!}</p>
@endsection
