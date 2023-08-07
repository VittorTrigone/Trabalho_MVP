<!DOCTYPE html>

<?php include("conexao1.php");

    $grupo = selectAllPaciente();
    
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<div class="container">
    <body>
     <div class="posicionarCabecalho">
          <h1>Pacientes</h1>
      </div>
      <table class="table">
          <thead class="thead-light">
              <tr>
                  <th>Nome</th>
                  <th>Dados do Paciente</th>
                  <th>Número do Quarto</th>
                  <th>Leito</th>
                  <th>Data de Internação</th>
                  <th>Data de Alta</th>
                  <th>Data de Falecimento</th>
                  <th>Responsável</th>
                  <th>Número do Responsável</th>
                  <th>Editar</th>
                  <th>Excluir</th>
              </tr>
          </thead>
          <tbody>
             <?php 
                foreach($grupo as $paciente) { ?>

                   <tr>
                      <th><?=$paciente["nome_paciente"]?></th>
                      <th><?=$paciente["dados_pessoais"]?></th>
                      <th><?=$paciente["numero_do_quarto"]?></th>
                      <th><?=$paciente["leito"]?></th>
                      <th><?=$paciente["data_internacao"]?></th>
                      <th><?=$paciente["data_alta"]?></th>
                      <th><?=$paciente["data_falecimento"]?></th>
                      <th><?=$paciente["responsavel_paciente"]?></th>
                      <th><?=$paciente["telefone_responsavel"]?></th>
                      <th>
                          <form name="alterar" action="alterarPaciente.php" method="post">
                              <input type="hidden" name="id" value="<?=$paciente["id"]?>">
                              <input type="submit" name="editar" value="Editar">
                          </form>
                      </th>
                      <th>
                          <form name="excluir" action="conexao1.php" method="post">
                              <input type="hidden" name="id" value="<?=$paciente["id"]?>">
                              <input type="hidden" name="acao" value="excluir">
                              <input type="submit" name="excluit" value="Excluir">
                          </form>
                      </th>
                  </tr>   
                <?php }
              ?>
          </tbody>
     </table>
      <div class="text-center">
           <button type="button" class="btn btn-primary"><a href="inserirPaciente.php">Adicionar Paciente</a></button>
      </div>
       <?php
            // Função para formatar a data
            function formatoData($data) {
                $array = explode("-", $data);
                $novaData = $array[2]."/".$array[1]."/".$array[0];
                return $novaData;
            }

        ?>
    </body>
</div>
</html>