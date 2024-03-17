@extends('layouts.layout')

@section('title', 'Criar Tarefa')

@section('content')
{{-- Conteudo --}}

<div class="container shadow p-3 mb-5 bg-body-tertiary rounded" style="margin-top: 100px">

    @if (session('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong></strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
    @endif

    <form class="row g-3 needs-validation " method="POST" action="{{ route('tarefa.store') }}">

        <div class="alert alert-secondary" role="alert">
            <h4>Criar tarefa</h4>
            É uma atividade que deve ser realizada pelo profissional dentro de um prazo. Ela está vinculada aos objetivos e às regras da empresa. No dia a dia, muitas tarefas são dependentes de outras.
        </div>

        @csrf

        <div class="col-md-12">

          <label for="validationCustom01" class="form-label">Titulo da Atividade*</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="(Obrigatório)" name="titulo_da_atividade" required>
          
        </div>

        <div class="col-md-3">

            <label for="validationCustom02" class="form-label">Prioridade*</label>
            <select class="form-select" id="validationCustom04"  placeholder="(Obrigatório)" name="prioridade" required>
                <option selected disabled value=""></option>
                <option>🔴 Alta</option>
                <option>🟢 Baixa</option>
                <option>🟡 Media</option>
            </select>

        </div>

        <div class="col-md-3">

            <label for="validationCustom01" class="form-label">Data de entrega*</label>
            <input type="date" class="form-control" id="validationCustom01" placeholder="(Obrigatório)" name="data_de_entrega" required>
       
        </div>

        <div class="col-md-3">

            <label for="validationCustom01" class="form-label">Horario da entrega*</label>
            <input type="time" class="form-control" id="validationCustom01" placeholder="(Obrigatório)" name="horario_da_entrega" required>
        
        </div>
        
        <div class="col-md-3">

            <label for="validationCustom02" class="form-label">Quem vai executar a tarefa?*</label>
            <select class="form-select" id="validationCustom04"  placeholder="(Obrigatório)" name="quem_vai_executar_a_tarefa" required>
                <option selected disabled value=""></option>
                <option>Aragão</option>
                
           
            </select>
        </div>
     
        <div class="mb-3">

            <label for="exampleFormControlTextarea1" class="form-label">Descrição da Atividade*</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="(Obrigatório)" name="descricao_da_atividade" required></textarea>
        
        </div>
        
        <div class="col-12">

          <button class="btn btn-primary" type="submit">Cadastrar Tarefa</button>
        
        </div>

      </form>

  
@endsection