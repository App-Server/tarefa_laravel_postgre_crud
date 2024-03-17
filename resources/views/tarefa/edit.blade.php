@extends('layouts.layout')

@section('title', 'Criar Tarefa')

@section('content')
{{-- Conteudo --}}

<div class="container" style="margin-top: 120px">

    <form class="row g-3 needs-validation shadow-sm p-3 mb-5 bg-body-tertiary rounded" method="POST" action="{{ route('tarefa.update', ['tarefa' => $tarefa->id]) }}">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="alert alert-warning" role="alert">
            <h5>Atenção ao atualizar a tarefa</h5>
        </div>

        @csrf

        @method('PUT')

        <div class="col-md-12">

          <label for="validationCustom01" class="form-label">Titulo da Atividade*</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="(Obrigatório)" name="titulo_da_atividade" value="{{ $tarefa['titulo_da_atividade']}}"  required>
          
        </div>

        <div class="col-md-3">

            <label for="validationCustom02" class="form-label">Prioridade*</label>
            <select class="form-select" id="validationCustom04"  placeholder="(Obrigatório)" name="prioridade"   required>
                <option value="{{ $tarefa['prioridade'] }}">{{ $tarefa['prioridade'] }}</option>
                <option>🔴 Alta</option>
                <option>🟢 Baixa</option>
                <option>🟡 Media</option>
            </select>

        </div>

        <div class="col-md-3">

            <label for="validationCustom01" class="form-label">Data de entrega*</label>
            <input type="date" class="form-control" id="validationCustom01" placeholder="(Obrigatório)" name="data_de_entrega" value="{{ $tarefa['data_de_entrega']}}" required>
       
        </div>

        <div class="col-md-3">

            <label for="validationCustom01" class="form-label">Horario da entrega*</label>
            <input type="time" class="form-control" id="validationCustom01" placeholder="(Obrigatório)" name="horario_da_entrega" value="{{ $tarefa['horario_da_entrega']}}" required>
        
        </div>
        
        <div class="col-md-3">

            <label for="validationCustom02" class="form-label">Quem vai executar a tarefa?*</label>
            <select class="form-select" id="validationCustom04"  placeholder="(Obrigatório)" name="quem_vai_executar_a_tarefa" required>
                <option  value="{{ $tarefa['quem_vai_executar_a_tarefa'] }}">{{ $tarefa['quem_vai_executar_a_tarefa'] }}</option>
                <option>Aragão</option>
                
           
            </select>
        </div>
     
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição da Atividade*</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="(Obrigatório)" name="descricao_da_atividade" required>{{ old('descricao_da_atividade', $tarefa->descricao_da_atividade) }}</textarea>
        </div>
        
        
        <div class="col-12">

          <button class="btn btn-primary" type="submit">Cadastrar Tarefa</button>
        
        </div>

    </form>


</div>


@endsection