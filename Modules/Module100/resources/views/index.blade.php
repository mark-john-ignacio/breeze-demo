@extends('module100::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module100.name') !!}</p>
@endsection
