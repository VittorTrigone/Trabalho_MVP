<?php

// Verifica se o POST existe antes de inserir uma nova pessoa
if(isset($_POST["acao"])){
    if ($_POST["acao"]=="inserir"){
        inserirVoluntario();
    }
    if ($_POST["acao"]=="alterar"){
        alterarVoluntario();
    }
    if($_POST["acao"]=="excluir"){
        excluirVoluntario();
    }
}

if(isset($_POST["acao"])){
    if ($_POST["acao"]=="inserir"){
        inserirPaciente();
    }
    if ($_POST["acao"]=="alterar"){
        alterarPaciente();
    }
    if($_POST["acao"]=="excluir"){
        excluirPaciente();
    }
}

// Responsável por criar uma conexão com meu banco
function abrirBanco() {
    $conexao = new mysqli("localhost", "root", "", "aulkas");
    return $conexao;
}

// Função responsável inseir uma pessoa no meu banco de dados
    function inserirVoluntario() {
        $banco = abrirBanco();
        $sql = "INSERT INTO voluntarios(nomev, rg, cpf, rua, bairro, cidade, telefone) 
        VALUES ('{$_POST["nomev"]}','{$_POST["rg"]}','{$_POST["cpf"]}','{$_POST["rua"]}','{$_POST["bairro"]}','{$_POST["cidade"]}','{$_POST["telefone"]}')";
        $banco->query($sql);
        $banco->close();
        voltarIndex1();
    }

// Função responsável editar uma pessoa no meu banco de dados
    function alterarVoluntario() {
        $banco = abrirBanco();
        $sql = "UPDATE voluntarios SET nomev='{$_POST["nomev"]}',rg='{$_POST["rg"]}',cpf='{$_POST["cpf"]}',rua='{$_POST["rua"]}', bairro='{$_POST["bairro"]}', cidade='{$_POST["cidade"]}', telefone='{$_POST["telefone"]}' WHERE id='{$_POST["id"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex1();
    }

// Função responsável excluir uma pessoa no meu banco de dados
    function excluirVoluntario() {
        $banco = abrirBanco();
        $sql = "DELETE FROM voluntarios WHERE id='{$_POST["id"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex1();
    }

    function selectAllVoluntario() {
        $banco = abrirBanco();
        $sql = "SELECT * FROM voluntarios ORDER BY nomev";
        $resultado = $banco->query($sql);
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        while($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

    function selectIdVoluntario($id) {
        $banco = abrirBanco();
        $sql = "SELECT * FROM voluntarios WHERE id=".$id;
        $resultado = $banco->query($sql);
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        $voluntarios = mysqli_fetch_assoc($resultado);
        return $voluntarios;
    }

// Após inserir uma nova pessoa, retorna para a página principal
    function voltarIndex1(){
        header("Location:Voluntario.php");
    }
    
?>