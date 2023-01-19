@extends('layouts.layout')
@section('conteudo-principal')
    <section class="section">

        <table class="highlight">
            <thead>
                <tr>
                    <th>Cidades</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($counties as $county)
                    <tr>
                        <td>{{ $county->name}}</td>
                        <td class="right-align">Excluir - Remover</td>
                    </tr>
                @empty
                    <tr>
                        <th colspan="2">Não existem cidades cadastradas</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>
    <div class="py-2">
        {{ $counties->links() }}
    </div>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light" href="{{ route('counties.create') }}">
            <i class="large material-icons">add</i>
        </a>
    </div>
@endsection
