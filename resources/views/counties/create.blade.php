@extends('layouts.layout')
@section('conteudo-principal')
    <section class="section">
        <form action="{{ route('counties.store') }}" method="POST">
            <div class="card">
                <div class="card-title">
                    Novo município
                </div>
                <div class="card-body">
                    @csrf
                    @include('counties._form')
                </div>
                <div class="right-align">
                    <button type="submit" class="btn waves-effect waves-light" id="btn-ok">OK</button>
                    <a href="{{ route('counties.index') }}" class="btn-flat waves-effect">Voltar</a>
                </div>
            </div>
        </form>
    </section>
@stop
