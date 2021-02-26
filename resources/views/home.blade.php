@extends('layouts.app')

@section('content')
    <home :friends='{{ $friends }}'></home>
@endsection