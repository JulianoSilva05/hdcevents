@extends('layouts.main') {{-- Pega o layout do arquivo /layouts/mains --}}

@section('title', 'HDC Events')

@section('content')

<h1>Algum título</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(10 > 15)
<p>A condição é true</p>
@endif

<p>{{ $nome }}</p>

@if($nome == 'Pedro')
<p>O nome é Pedro</p>
@elseif($nome == "Matheus")
<p>O nome é {{ $nome }} e ele tem {{ $idade2 }} ano e trabalha como {{ $profissao }} </p>
@else
<p>O nome não é Pedro</p>
@endif

@for($i = 0; $i < count($arr); $i++)
<p>{{ $arr[$i] }} - {{ $i }}</p>
@if($i == 2)
<p>O i é 2</p>
@endif
@endfor

@foreach($nomes as $nome)
<p> {{ $loop->index}}
{{ $nome }}</p> 
@endforeach

@php
$name = "joão";
echo $name
@endphp

<!-- Comentário do HTML -->
{{-- Este é o comentario da Blade --}}

@endsection