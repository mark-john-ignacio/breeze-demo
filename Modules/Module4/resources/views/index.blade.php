@extends('module4::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module4.name') !!}</p>
@endsection
