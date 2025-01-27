@extends('layouts.app')

@section('content')
    <div>
        <h1>Formulario de Administrador</h1>
        <form action="{{ route('admin.form.submit') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nombre del curso/cata:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="type">Tipo:</label>
                <select id="type" name="type" required>
                    <option value="cata">Cata</option>
                    <option value="curso">Curso</option>
                </select>
            </div>
            <div>
                <label for="date">Día:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div>
                <label for="time">Hora:</label>
                <input type="time" id="time" name="time" required>
            </div>
            <div>
                <label for="location">Localización:</label>
                <input type="text" id="location" name="location" required>
            </div>
            <div>
                <label for="description">Descripción:</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
@endsection