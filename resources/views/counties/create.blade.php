@extends('layouts.layout')
@section('conteudo-principal')
    <section class="section">
        <form action="{{ route('counties.store') }}" method="POST">
            <div class="card">
                <div class="card-title">
                    Nova cidade
                </div>
                <div class="card-body">
                    @csrf
                    @include('counties._form')
                </div>
                <div class="right-align">
                    <a href="{{ route('counties.index') }}" class="btn-flat waves-effect">Voltar</a>
                    <button type="submit" class="btn waves-effect waves-light" id="btn-ok">OK</button>
                </div>
            </div>
        </form>
    </section>
@stop
