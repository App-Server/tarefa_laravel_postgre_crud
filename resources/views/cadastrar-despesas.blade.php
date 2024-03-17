@extends('layouts.layout')

@section('title', 'Cadastrar Despesas')

@section('content')
{{-- Conteudo --}}

<div class="container" style="margin-top: 100px">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Cadastrar Despesas
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <form class="row g-3 needs-validation " >

                        <div class="alert alert-secondary" role="alert">
                            <h4>Cadastro de despesas</h4>
                        </div>
                
                        @csrf
                
                        <div class="col-md-6">
                
                            <label for="validationCustom02" class="form-label">Categoria da Despesa*</label>
                            <select class="form-select" id="validationCustom04"  placeholder="(Obrigatório)" name="prioridade" required>
                                <option selected disabled value=""></option>
                                <option>Energia</option>
                                <option>Agua</option>
                                <option>Internet</option>
                                <option>Aluguel</option>
                                <option>Cartão de credito</option>
                            </select>
                
                        </div>
                
                        <div class="col-md-6">
                
                            <label for="validationCustom01" class="form-label">Data da despesa*</label>
                            <input type="date" class="form-control" id="validationCustom01" placeholder="(Obrigatório)" name="data_de_entrega" required>
                       
                        </div>
                
                        <div class="col-md-6">
                
                            <label for="validationCustom01" class="form-label">Valor R$*</label>
                            <input type="number" class="form-control" id="validationCustom01" placeholder="(Obrigatório)" name="horario_da_entrega" required>
                        
                        </div>
                        
                        <div class="col-md-6">
                
                            <label for="validationCustom02" class="form-label">Metodo de pagamento*</label>
                            <select class="form-select" id="validationCustom04"  placeholder="(Obrigatório)" name="quem_vai_executar_a_tarefa" required>
                                <option selected disabled value=""></option>
                                <option>Dinheiro</option>
                                <option>Cartão de credito</option>
                                <option>Débito</option>
                                <option>Transferencia Bancária</option>
                                <option>PIX</option>
                            </select>
                        </div>

                        <div class="mb-3">

                            <label for="exampleFormControlTextarea1" class="form-label">Anotações</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="(Opcional)" name="descricao_da_atividade" required></textarea>
                        
                        </div>
                     
                        
                        <div class="col-12">
                
                          <button class="btn btn-primary" type="submit">Cadastrar Tarefa</button>
                        
                        </div>
                
                      </form>
                </div>
            </div>
        </div>
    </div>

   
</div>
<br>
<div class="container" style="margin-top: 30px;">
       

   
    <div class="card" style="width: 100%;">

        <ul class="list-group list-group-flush">
            <li class="list-group-item">

                <div class="row g-3 needs-validation">
                    <div class="col-md-1">
                        <label for="validationCustom01" class="form-label"><strong></i>Id</strong></label>
                        <br>
                        <label for="validationCustom01" class="form-label">10</label>

                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom02" class="form-label"><strong> <i
                                    class="bi bi-person-check-fill"
                                    style="margin-right: 5px;"></i>Categoria da Despesa</strong></label>
                        <br>
                        <label for="validationCustom02" class="form-label">Energia</label>

                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom02" class="form-label"><strong><i class="bi bi-envelope-at"
                                    style="margin-right: 5px;"></i>Data da despesa</strong></label>
                        <br>
                        <label for="validationCustom02" class="form-label">21/11/2023 16:25:09</label>

                    </div>
                    <div class="col-md-2">
                        <label for="validationCustomUsername" class="form-label"><strong> <i
                                    class="bi bi-calendar-check"
                                    style="margin-right: 5px;"></i>Valor R$*</strong></label>
                        <br>
                        <label for="validationCustomUsername" class="form-label">R$ 1.000</label>

                    </div>

                    <div class="col-md-3">
                        <label for="validationCustomUsername" class="form-label"><strong>Metodo de pagamento</strong></label>
                        <br>
                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-eye"></i></label>

                    </div>

                    

                </div>
            </li>
            
        </ul>
    </div>

@endsection