@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Creacion de una tarea</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
            <input type="text" name="description" id="">
            <input type="submit" value="Crear">
        </form>
    </div>
</div>
@endsection

