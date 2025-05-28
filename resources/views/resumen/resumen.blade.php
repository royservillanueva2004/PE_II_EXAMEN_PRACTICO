@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Resumen Ejecutivo del Plan Estratégico</h1>

    {{-- Empresa y Fecha --}}
    <div class="row mb-4">
        <div class="col-md-6">
            <label>Nombre de la Empresa</label>
            <input type="text" class="form-control" placeholder="Ingrese el nombre de la empresa">
        </div>
        <div class="col-md-6">
            <label>Fecha de Elaboración</label>
            <input type="date" class="form-control">
        </div>
    </div>

    {{-- Misión, Visión, Valores, Unidades Estratégicas --}}
    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <label>Misión</label>
            <textarea class="form-control" rows="3" placeholder="Ingrese la misión"></textarea>
        </div>
        <div class="col-md-6 mb-3">
            <label>Visión</label>
            <textarea class="form-control" rows="3" placeholder="Ingrese la visión"></textarea>
        </div>
        <div class="col-md-6 mb-3">
            <label>Valores</label>
            <textarea class="form-control" rows="3" placeholder="Ingrese los valores"></textarea>
        </div>
        <div class="col-md-6 mb-3">
            <label>Unidades Estratégicas</label>
            <textarea class="form-control" rows="3" placeholder="Ingrese las unidades estratégicas"></textarea>
        </div>
    </div>

    {{-- Tabla de Objetivos Estratégicos --}}
    <h4 class="mt-4">Objetivos Estratégicos</h4>
    <table class="table table-bordered mb-4">
        <thead class="table-light">
            <tr>
                <th>Misión</th>
                <th>Objetivos Generales o Estratégicos</th>
                <th>Objetivos Específicos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><textarea class="form-control" rows="2"></textarea></td>
                <td><textarea class="form-control" rows="2"></textarea></td>
                <td><textarea class="form-control" rows="2"></textarea></td>
            </tr>
        </tbody>
    </table>

    {{-- Análisis FODA --}}
    <h4 class="mt-4">Análisis FODA</h4>
    <table class="table table-bordered mb-4">
        <thead class="table-light">
            <tr>
                <th>Debilidades</th>
                <th>Amenazas</th>
                <th>Fortalezas</th>
                <th>Oportunidades</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><textarea class="form-control" rows="3"></textarea></td>
                <td><textarea class="form-control" rows="3"></textarea></td>
                <td><textarea class="form-control" rows="3"></textarea></td>
                <td><textarea class="form-control" rows="3"></textarea></td>
            </tr>
        </tbody>
    </table>

    {{-- Identificación Estratégica --}}
    <h4 class="mt-4">Identificación Estratégica</h4>
    <textarea class="form-control mb-4" rows="4" placeholder="Describa la identificación estratégica"></textarea>

    {{-- Acciones Competitivas --}}
    <h4 class="mt-4">Acciones Competitivas</h4>
    <table class="table table-bordered mb-4">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 5; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td><input type="text" class="form-control" placeholder="Ingrese acción competitiva"></td>
                </tr>
            @endfor
        </tbody>
    </table>

    {{-- Conclusiones --}}
    <h4 class="mt-4">Conclusiones del Plan</h4>
    <textarea class="form-control mb-4" rows="4" placeholder="Ingrese las conclusiones del plan estratégico"></textarea>

    {{-- Botón Guardar --}}
    <div class="text-center">
        <button class="btn btn-primary">Guardar Resumen</button>
    </div>
</div>
@endsection