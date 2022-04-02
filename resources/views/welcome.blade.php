<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>

    <title>Laravel</title>

</head>
<body>
<h1>Hello World Laravel</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(10 > 15)
    <p>A condição é true</p>
@endif

<p>{{ $nome }}</p>

@if($nome == 'Pedro')
    <p>O nome é Pedro</p>
@elseif($nome == 'Paulo')
    <p>O nome é {{ $nome }} e ele tem {{$idade2}} anos, e trabalha como {{$profissao}}</p>
@else
    <p>O nome não é Pedro</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    <p>{{$arr[$i]}}</p>
    @if($i == 2)
        <p>O i é 2</p>
    @endif
@endfor

@foreach($nomes as $name)
    <p>{{$loop->index}}</p>
    <p>{{$name}}</p>
@endforeach

@php
    $name = 'Paulo';
    $idade = 35;

    echo("O {$name} tem");
@endphp

{{ $idade }} anos.

<!-- Comentário Html -->
{{-- Comentário do blade --}}

</body>
</html>
