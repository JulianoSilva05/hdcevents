@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Cadastrar curso</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Imagem do curso:</label>
      <input type="file" id="image" name="image" class="from-control-file">
    </div>
    <div class="form-group">
      <label for="title">Curso:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
    </div>
        <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Duração:</label>
      <input type="duracao" class="form-control" id="duracao" name="duracao">
    </div>
    <div class="form-group">
      <label for="title">Material de apoio:</label>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="ebook"> Ebooks
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="video"> Videos
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="impresso"> Livros
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="brindes"> Brindes
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>

@endsection
