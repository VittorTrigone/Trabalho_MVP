<?php

include("conexao1.php");
$paciente = selectIdPaciente($_POST["id"]);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap"
      rel="stylesheet"
    />
    <title>(EM PROGRESSO) Formulário</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h2>Voluntariar</h2>
      </div>

      <form name="dadosVoluntario" id="form" class="form" action="conexao1.php" method="post">
        
      <div class="form-control">
          <label for="nome">Nome</label>
          <input
          type="text"
          id="nome"
          placeholder="Digite seu nome..."
          name="nome_paciente"
          value="<?=$paciente["nome_paciente"]?>" size="14"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="dadosP">Dados Pessoais</label>
          <input
          type="text"
          id="dadosP"
          placeholder="Digite os dados do paciente..."
          name="dados_pessoais"
          value="<?=$paciente["dados_pessoais"]?>" size="14"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="numeroQ">Numero do Quarto</label>
          <input
          type="text"
          id="numeroQ"
          placeholder="Digite o número do quarto..."
          name="numero_do_quarto"
          value="<?=$paciente["numero_do_quarto"]?>" size="14"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="leito">Leito</label>
          <input
            type="text"
            id="leito"
            name="leito"
            placeholder="Digite o leito..."
            value="<?=$paciente["leito"]?>" size="14"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="dataI">Data de Internação</label>
          <input
            type="text"
            id="dataI"
            name="data_internacao"
            placeholder="Digite a data de internação..."
            value="<?=$paciente["data_internacao"]?>" size="14"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="dataA">Data de Alta</label>
          <input
            type="text"
            id="dataA"
            name="data_alta"
            placeholder="Digite a data de alta..."
            value="<?=$paciente["data_alta"]?>" size="14"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="dataF">Data de Falecimento</label>
          <input
            type="text"
            id="dataF"
            name="data_falecimento"
            placeholder="Digite a data do falecimento..."
            value="<?=$paciente["data_falecimento"]?>" size="14"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="nomeR">Nome do Responsável</label>
          <input
            type="text"
            id="nomeR"
            name="responsavel_paciente"
            placeholder="Digite nome do responsável..."
            value="<?=$paciente["responsavel_paciente"]?>" size="14"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="telefoneR">Telefone do Responsável</label>
          <input
            type="text"
            id="telefoneR"
            name="telefone_responsavel"
            placeholder="Digite o telefone do responsável..."
            value="<?=$paciente["telefone_responsavel"]?>" size="14"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>
        <tr>
                    <td><input type="hidden" name="acao" value="alterar">
                        <input type="hidden" name="id" value="<?=$paciente["id"]?>">
                    </td>
                    <td><button type="submit" name="Enviar" value="Enviar">Enviar</button></td>
                </tr>
      </form>
    </div>

    <script
      src="https://kit.fontawesome.com/f9e19193d6.js"
      crossorigin="anonymous"
    ></script>

    <script src="./script1.js"></script>
  </body>
</html>