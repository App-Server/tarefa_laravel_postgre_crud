@extends('layouts.layout')

@section('title', 'Lista de Comunicado')

@section('content')
{{-- Conteudo --}}

<div class="container " style="margin-top: 150px">

    @if (session('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong></strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
    @endif
    <div class="paginate" style="margin-top: 20px">
        {{ $infos->links() }}
    </div>
    @foreach ($infos as $info)
    <div class="card mb-3">
        <div class="card-header">
            <strong>Comunicado criado:</strong>{{ $info->created_at  }}
            <form class="col-md-1" method="POST" action="{{ route('intracom.destroy', $info->id) }}">
                @csrf
                @method('DELETE')
                <label for="validationCustom01" class="form-label">
                <button type="submit" style="background: none; border: none;"><i class="bi bi-trash3" style="cursor: pointer; color: red"></i></button>
            </form>

        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $info->titulo_do_comunicado }}</h5>
            <p class="card-text">{{ $info->descricao_do_comunicado }}</p>
        </div>        
    </div>

    
    @endforeach


    <div class="paginate" style="margin-top: 20px">
        {{ $infos->links() }}
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
</div>

@endsection