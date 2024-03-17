@extends('layouts.layout')

@section('title', 'Home')

@section('content')
{{-- Conteudo --}}

<div class="container" style="margin-top: 120px">
    <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    
                    <p class="card-text"><i class="bi bi-list-task"></i>Total de tarefas</p>

                    <p class="card-text">--</p>

                    
                </div>
            </div>
        </div>

        <div class="col-sm-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><i class="bi bi-person-check"></i>Total de usuarios</p>

                    <p class="card-text">--</p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><i class="bi bi-exclamation-triangle"></i>Total de comunicado</p>

                    <p class="card-text">--</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            {{-- Chart code --}}
            <canvas id="myChart" width="400" height="150"></canvas>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
    const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
    const data = {
        labels: labels,
        datasets: [{
            label: 'My First Dataset',
            data: [65, 59, 80, 81, 56, 55, 40],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgb(75, 192, 192)',
                'rgb(75, 192, 192)',
                'rgb(75, 192, 192)',
                'rgb(75, 192, 192)',
                'rgb(75, 192, 192)',
                'rgb(75, 192, 192)',
                'rgb(75, 192, 192)'
            ],
            borderWidth: 1
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {}
    };

    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>

<br>
    <br>
    <br>
    <br>
    <br>

@endsection
