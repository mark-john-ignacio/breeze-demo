@extends('module6::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module6.name') !!}</p>
@endsection
