<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sobre mim</title>
</head>

<body>
    @extends('app')
    @section('titulo')
        SOBRE MIM
    @stop
    
    @section('conteudo')
        <h1>Meu nome é {{ $eu['nome'] }}</h1>
        <h2>Tenho {{ $eu['idade'] }} anos</h2>
    @stop
</body>

</html>