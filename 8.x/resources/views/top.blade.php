<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="写真,ご飯,">
    <meta name="description" content="ITエンジニアがご飯を食べた写真をコメントを付けてアップする飯場です">
    <title>ITエンジニアの飯場</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('/js/common.js') }}"></script>
  </head>
  <body>
    <nav>
      <div>navigate</div>
    </nav>
    <h1>ITエンジニアの飯場</h1>



<div>
@php
  var_dump($test_1['111']);
@endphp
<br>
{{$test_1['111']}}
<br>
{{$test_2}}
</div>
    <form method="POST" action="/profile">
      @csrf
    </form>
    {{ url("/img/hoge.svg") }}
  </body>
</html>