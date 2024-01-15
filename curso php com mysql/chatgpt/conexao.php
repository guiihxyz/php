<?php 
    $conexao = mysqli_connect("localhost", "root", "", "database"); //retorna true ou false
    
    if(!$conexao) {
        exit("A conexão não foi bem sucedida: " . mysqli_connect_error() . "-" . mysqli_connect_errno());
    }

    echo "Conexão bem sucedida!"
?>