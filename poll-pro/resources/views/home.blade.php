@extends('layouts.app')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @auth
    <script>
        var GUSER = {{ Auth::user()->id }};
        var GPOLLS = "{{ $polls }}";
    </script>
    @endauth

</head>

@section('content')

{{-- <script defer src="{{ asset('/js/app.js') }}"></script> --}}
<style src="{{ asset('/css/app.css') }}"></style>

<div id="index"></div>


@endsection