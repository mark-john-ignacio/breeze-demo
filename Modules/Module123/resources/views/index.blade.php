@extends('module123::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module123.name') !!}</p>
@endsection
