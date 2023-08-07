<?php


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
        <h2>Paciente</h2>
      </div>

      <form name="dadosVoluntario" id="form" class="form" action="conexao1.php" method="post">
      <div class="form-control">
          <label for="nome">Nome</label>
          <input
          type="text"
          id="nome"
          placeholder="Digite seu nome..."
          name="nome_paciente"
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
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="dataI">Data de Internação</label>
          <input
            type="date"
            id="dataI"
            name="data_internacao"
            placeholder="Digite a data de internação..."
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="dataA">Data de Alta</label>
          <input
            type="date"
            id="dataA"
            name="data_alta"
            placeholder="Digite a data de alta..."
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="dataF">Data de Falecimento</label>
          <input
            type="date"
            id="dataF"
            name="data_falecimento"
            placeholder="Digite a data do falecimento..."
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
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>
        <tr>
                    <td><input type="hidden" name="acao" value="inserir"></td>
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