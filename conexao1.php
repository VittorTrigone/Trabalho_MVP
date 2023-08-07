<?php

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
    function inserirPaciente() {
        $banco = abrirBanco();
        $sql = "INSERT INTO paciente(nome_paciente, dados_pessoais, numero_do_quarto, leito, data_internacao, data_alta, data_falecimento, responsavel_paciente, telefone_responsavel) 
        VALUES ('{$_POST["nome_paciente"]}','{$_POST["dados_pessoais"]}','{$_POST["numero_do_quarto"]}','{$_POST["leito"]}','{$_POST["data_internacao"]}','{$_POST["data_alta"]}','{$_POST["data_falecimento"]}','{$_POST["responsavel_paciente"]}','{$_POST["telefone_responsavel"]}')";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

// Função responsável editar uma pessoa no meu banco de dados
    function alterarPaciente() {
        $banco = abrirBanco();
        $sql = "UPDATE paciente SET nome_paciente='{$_POST["nome_paciente"]}',dados_pessoais='{$_POST["dados_pessoais"]}',numero_do_quarto='{$_POST["numero_do_quarto"]}',leito='{$_POST["leito"]}', data_internacao='{$_POST["data_internacao"]}', data_alta='{$_POST["data_alta"]}', data_falecimento='{$_POST["data_falecimento"]}', responsavel_paciente='{$_POST["responsavel_paciente"]}', telefone_responsavel='{$_POST["telefone_responsavel"]}' WHERE id='{$_POST["id"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

// Função responsável excluir uma pessoa no meu banco de dados
    function excluirPaciente() {
        $banco = abrirBanco();
        $sql = "DELETE FROM paciente WHERE id='{$_POST["id"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

    function selectAllPaciente() {
        $banco = abrirBanco();
        $sql = "SELECT * FROM paciente ORDER BY nome_paciente";
        $resultado = $banco->query($sql);
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        while($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

    function selectIdPaciente($id) {
        $banco = abrirBanco();
        $sql = "SELECT * FROM paciente WHERE id=".$id;
        $resultado = $banco->query($sql);
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        $paciente = mysqli_fetch_assoc($resultado);
        return $paciente;
    }

// Após inserir uma nova pessoa, retorna para a página principal
    function voltarIndex(){
        header("Location:Paciente.php");
    }

?>