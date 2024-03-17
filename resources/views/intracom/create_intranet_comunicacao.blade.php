@extends('layouts.layout')

@section('title', 'Criar Comunicado')

@section('content')
{{-- Conteudo --}}

<div class="container shadow p-3 mb-5 bg-body-tertiary rounded" style="margin-top: 150px">

    @if (session('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong></strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    @endif

    <div class="alert alert-warning" role="alert">
        <strong>Atenção:</strong> Este é o Intranet de Comunicações da empresa. Aqui você enviar informações importantes sobre feriados, treinamentos e outros comunicados corporativos. Por favor, utilize este espaço apenas para fins relacionados ao trabalho. Qualquer uso inadequado será monitorado e pode resultar em ações disciplinares.
    </div>
   

    <form method="POST" action="{{ route('intracom.store') }}">

        @csrf

        <div class="mb-3">

        <label for="exampleInputText1" class="form-label">Titulo do Comunicado*</label>
        <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="(Obrigatório)" name="titulo_do_comunicado" required>
        
        </div>
            
        <div class="mb-3">

            <label for="exampleFormControlTextarea1" class="form-label">Descrição do Comunicado*</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="(Obrigatório)" name="descricao_do_comunicado" required></textarea>

        </div>        
        
        <button type="submit" class="btn btn-primary">Enviar Comunicado</button>
    </form>

</div>

@endsection