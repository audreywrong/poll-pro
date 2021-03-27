@extends('larapoll::layouts.app')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

@section('content')

{{-- <script defer src="{{ asset('/js/app.js') }}"></script> --}}
<style src="{{ asset('/css/app.css') }}"></style>

<h1>Poll Details</h1>
{{ PollWriter::draw(Poll::find(1)) }}


@endsection