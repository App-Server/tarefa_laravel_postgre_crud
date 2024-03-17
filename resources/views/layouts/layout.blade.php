<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
    background-color: #ecf1f8;
}

/* Estilo para a div que envolve a tabela */
.scrollable-table {
    overflow-y: auto; /* Adiciona uma barra de rolagem vertical quando necessário */
    height: 200px; /* Altura máxima da área visível */
    width: 300px; /* Largura máxima da área visível */
    border: 1px solid #ccc; /* Adiciona uma borda para visualização */
}

/* Estilo opcional para a tabela */
table {
    width: 100%; /* Define a largura da tabela como 100% */
    border-collapse: collapse; /* Combina as bordas das células */
    background-color: black;
}

/* Estilo opcional para as células da tabela */
th, td {
    border: 1px solid #ddd; /* Adiciona uma borda às células */
    padding: 8px; /* Adiciona um preenchimento interno às células */
    text-align: left; /* Alinha o texto à esquerda */
}


    </style>
</head>
<body >
    
    @include('layouts.navbar')

    @yield('content')

    {{-- <footer>
        <p class="d-flex justify-content-center" style="margin-top: 80px">Todos os direitos reservado &copy;2024</p>
    </footer> --}}
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
    
</body>
</html>