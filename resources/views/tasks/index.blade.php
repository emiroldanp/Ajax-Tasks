@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Lista de tareas</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
            @csrf
            <input type="text" name="description" id="">
            <input type="button" value="Crear" onclick="createTask();">
    </div>
</div>
<br>
<div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Descripcion</th>
                    <th>¿Pendiente?</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>
                        {{ $task->id }}
                    </td>
                    <td>
                        {{ $task->description }}
                    </td>
                    <td>
                        {{ $task->is_done ? 'No' : 'Si' }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('layout_end_body')
<script>
    function createTask() {
        console.log('Crea la tarea');
    }
</script>

@endpush

