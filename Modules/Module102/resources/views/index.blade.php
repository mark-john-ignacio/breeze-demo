@extends('module102::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('module102.name') !!}</p>
@endsection
