@extends('layouts.main')

@section('title', 'Escalar Cursos')

@section('content')


{{-- Divs com imagemns e saiba mais com a:houver no botão saiba mais--}}

<div id="search-container" class="col-md-12">
    <form action="/">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar um curso...">
    </form>
</div>
    <div id="events-container" class="col-md-12">
    <div id="cards-container" class="row">
          <div class="card col-md3">
            <img src="/img/events/bn_trend.png" alt="Descrição">
            {{-- 
                <div class="card-body">
                <h5 class="card-title">Google Trends </h5>
                <p class="card-date">Duração</p>
                <p class="card-participants">X Alunos</p>
                <a href="/events/id" class="btn btn-primary">Saber mais</a>
            </div>
            --}}
        </div>

        <div class="card col-md3">
            <img src="/img/events/bn_asana.png" alt="Descrição">
            {{-- 
                <div class="card-body">
                <h5 class="card-title">Asana </h5>
                <p class="card-date">Duração</p>
                <p class="card-participants">X Alunos</p>
                <a href="/events/id" class="btn btn-primary">Saber mais</a>
            </div>
            --}}
        </div>

        <div class="card col-md3">
            <img src="/img/events/bn_elementor.png" alt="Descrição">
            {{-- 
                <div class="card-body">
                <h5 class="card-title">Elementor </h5>
                <p class="card-date">Duração</p>
                <p class="card-participants">X Alunos</p>
                <a href="/events/id" class="btn btn-primary">Saber mais</a>
            </div>
            --}}
        </div>

        <div class="card col-md3">
            <img src="/img/events/bn_funnelytics.png" alt="Descrição">
            {{-- 
                <div class="card-body">
                <h5 class="card-title">Funnelytics </h5>
                <p class="card-date">Duração</p>
                <p class="card-participants">X Alunos</p>
                <a href="/events/id" class="btn btn-primary">Saber mais</a>
            </div>
            --}}
        </div>


    </div>
    <div>


{{-- Divs com imgens e descrição
<div id="search-container" class="col-md-12">
    <form action="/">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar um curso...">
    </form>
</div>
    <div id="events-container" class="col-md-12">
    <div id="cards-container" class="row">
          <div class="card col-md3">
            <img src="/img/events/elementor.png" alt="Descrição">
            <div class="card-body">
                <h5 class="card-title">Ferramentas Elementor </h5>
                <p class="card-date">Duração</p>
                <p class="card-participants">X Alunos</p>
                <a href="/events/id" class="btn btn-primary">Saber mais</a>
            </div>
        </div>

        <div class="card col-md3">
            <img src="/img/events/funnelytics.png" alt="Descrição">
            <div class="card-body">
                <h5 class="card-title">Funnelytics</h5>
                <p class="card-date">Duração</p>
                <p class="card-participants">X Alunos</p>
                <a href="/events/id" class="btn btn-primary">Saber mais</a>
            </div>
        </div>

        <div class="card col-md3">
            <img src="/img/events/funnelytics.png" alt="Descrição">
            <div class="card-body">
                <h5 class="card-title">Funnelytics</h5>
                <p class="card-date">Duração</p>
                <p class="card-participants">X Alunos</p>
                <a href="/events/id" class="btn btn-primary">Saber mais</a>
            </div>
        </div>

    </div>

    -}}

   {{--
    //Codigo para puxar os cursos no banco de dados

    @if($search)
    <h2>Buscando por : {{ $search }}</h2>
    @else
    <h2>Cursos</h2>
    <p class="subtitle">Todos os Cursos</p>
    @endif
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">X Alunos</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <p>Não foi possível encontrar nenhum curso com {{ $search }}! <a href="/">Ver todos!</a>
        @elseif(count($events) == 0)
            <p>Não há cursos disponíveis</p>
        @endif

        --}}

    </div>
</div>

@endsection
