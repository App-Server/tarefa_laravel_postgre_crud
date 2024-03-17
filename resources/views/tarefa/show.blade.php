@extends('layouts.layout')

@section('title', 'Lista de Tarefa')

@section('content')
{{-- Conteudo --}}

<div class="container" style="margin-top: 120px">
    
   
    <div class="paginate" style="margin-top: 20px">
        {{ $tarefas->links() }}
    </div>

    @foreach ($tarefas as $tarefa)

    
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <p class="card-text"><strong style="margin-right: 10px">Prioridade:</strong>{{ $tarefa->prioridade }}</p>

                  </div>
                  <div class="col-md-2">
                    
                  </div>
            </div>
        </div>
        <div class="card-body">
            <p class="card-text"><strong style="margin-right: 10px">Titulo da Atividade:</strong>{{ $tarefa->titulo_da_atividade }}</p>
            <p class="card-text"><strong style="margin-right: 10px" >Quem vai executar:</strong>{{ $tarefa->quem_vai_executar_a_tarefa }}</hp>
            <p class="card-text"><strong style="margin-right: 10px">Criado:</strong>{{ $tarefa->created_at }}</p>
            <p class="card-text"><strong style="margin-right: 10px">Data de entrega:</strong>{{ $tarefa->data_de_entrega }}</p>
            <p class="card-text"><strong style="margin-right: 10px">Horario de entrega:</strong>{{ $tarefa->horario_da_entrega }}</p>
            <p class="card-text"><strong style="margin-right: 10px">Editar:</strong>
                
                <a href="{{ route('tarefa.edit', $tarefa->id) }}">
                    <i class="bi bi-pencil-square" >
                        
                    </i>
                </a>
                
            </p>

            <form method="POST" action="{{ route('tarefa.destroy', $tarefa->id) }}">
                @csrf
                @method('DELETE')
                <p class="card-text"><strong style="margin-right: 5px">Excluir:</strong>
                <button type="submit" style="background: none; border: none;"><i class="bi bi-trash3" style="cursor: pointer; color: red"></i></button>
                </p>
            </form>
      
            <hr>
            <p class="card-text"><strong style="margin-right: 10px">Descrição da atividade:</strong>{{ $tarefa->descricao_da_atividade }}</p>
            <hr>
            <div class="row">
                <div class="col-md-8 mb-1">
                    <a href="#">
                        <button type="button" class="btn btn-success btn-sm">
                            Comentar Tarefa
                        </button>
                    </a>
                  </div>
                  <div class="col-md-2  mb-1">
                    
                  </div>
                  <div class="col-md-2">
                    
                  </div>
            </div>
            <div class="row col-md-12">
                <div class="col-md-8">
                    
                </div>
                <div class="col-md-2">
                   
                </div>
                <div class="col-md-2">
                    
                </div>
            </div>
        </div>  
    </div>

    @endforeach
           
     

    <div class="paginate" style="margin-top: 20px">
        {{ $tarefas->links() }}
    </div>
    
</div>
  

<br>
<br>
<br>
<br>
@endsection