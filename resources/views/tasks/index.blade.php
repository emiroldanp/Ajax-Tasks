@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Lista de tareas</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <a href="{{ route('tasks.create') }}" class="btn btn-default">
            Crea una tarea
        </a>
    </div>
</div>
@endsection

