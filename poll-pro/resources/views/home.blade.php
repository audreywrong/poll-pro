@extends('layouts.app')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @auth
    <script>
        var GUSER = {{ Auth::user()->id }};
    </script>
    @endauth

</head>

@section('content')

{{-- <script defer src="{{ asset('/js/app.js') }}"></script> --}}
<style src="{{ asset('/css/app.css') }}"></style>

<script>
    var decodeEntities = (function() {
  // this prevents any overhead from creating the object each time
  var element = document.createElement('div');

  function decodeHTMLEntities (str) {
    if(str && typeof str === 'string') {
      // strip script/html tags
      str = str.replace(/<script[^>]*>([\S\s]*?)<\/script>/gmi, '');
      str = str.replace(/<\/?\w(?:[^"'>]|"[^"]*"|'[^']*')*>/gmi, '');
      element.innerHTML = str;
      str = element.textContent;
      element.textContent = '';
    }

    return str;
  }

  return decodeHTMLEntities;
})();
    
    var GPOLLS_ENCODED = "{{ $polls }}";
    var GPOLLS = JSON.parse(decodeEntities(GPOLLS_ENCODED));
</script>

<div id="index"></div>


@endsection