@extends('module10::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module10.name') !!}</p>
@endsection
