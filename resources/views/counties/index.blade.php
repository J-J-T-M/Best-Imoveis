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
                        <td>{{ $county->name }}</td>
                        <td class="right-align">
                            <a href="{{ route('counties.edit', $county) }}"
                            <i class="material-icons blue-text text-accent-2">edit</i>
                            </a>
                            <form action="{{ route('counties.destroy',$county->id) }}" method="post" style="display: inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit" style="border: 0; background: transparent;">
                                    <span style="cursor: pointer">
                                        <i class="material-icons red-text text-accent-3">delete_forever</i>
                                    </span>
                                </button>
                            </form>
                        </td>
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
