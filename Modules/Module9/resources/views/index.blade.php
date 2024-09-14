@extends('module9::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module9.name') !!}</p>
@endsection
