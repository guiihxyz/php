<?php 
    include "conexao.php";

    $resultado = mysqli_query($conexao, "SELECT id, nome, email FROM usuarios");

    while($linha = mysqli_fetch_assoc($resultado)) {
        //$linha é o array
        echo "ID: " . $linha["id"] . "<br>";
        echo "Nome: " . $linha["nome"] . "<br>";
        echo "Email: " . $linha["email"] . "<br>";
    }
?>