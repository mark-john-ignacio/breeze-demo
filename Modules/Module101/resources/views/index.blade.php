@extends('module101::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module101.name') !!}</p>
@endsection
