@extends('module5::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module5.name') !!}</p>
@endsection
