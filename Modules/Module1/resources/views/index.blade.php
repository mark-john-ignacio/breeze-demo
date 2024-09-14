@extends('module1::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module1.name') !!}</p>
@endsection
