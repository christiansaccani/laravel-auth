@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1>Tutti i post</h1>

    <table class="table mb-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Contenuto</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

            @foreach($projects as $project)
            <tr>
                <th class="align-middle" scope="row">{{$loop->index + 1}}</th>
                <td class="align-middle">{{$project->title}}</td>
                <td class="align-middle">{{$project->content}}</td>
                <td><a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-info">Mostra</a></td>
                <td><a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning">Modifica</a></td>
            </tr>
            @endforeach

        </tbody>
      </table>


      <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Aggiungi un project</a>

</div>

@endsection