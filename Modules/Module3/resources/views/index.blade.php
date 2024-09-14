@extends('module3::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module3.name') !!}</p>
@endsection
