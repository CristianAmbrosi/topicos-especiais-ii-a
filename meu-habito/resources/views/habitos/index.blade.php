@extends('app')

@section('content')
  <div class="container">
    <h1>Habitos</h1>
    <table class="table table-striped table-houver">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Tipo</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
      @foreach($habitos as $hab)
        <tr>
          <td>{{$hab->nome}}</td>
          <td>{{$hab->descricao}}</td>
          @if($hab->tp_habito == 'B')
            <td>Bom</td>
          @elseif($hab->tp_habito == 'R')
            <td>Ruin</td>
          @endif
          <td>
            <a href="{{ route('habitos.edit', ['id'=>$hab->id]) }}" class="btn-sm btn-success">Editar</a>
            <a href="{{ route('habitos.destroy', ['id'=>$hab->id]) }}" class="btn-sm btn-danger">Remover</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    <a href="{{ route('habitos.create') }}" class="btn btn-primary">Novo hábito</a>
  </div>
@endsection

