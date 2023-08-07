<?php

include("conexao.php");
$voluntarios = selectIdVoluntario($_POST["id"]);
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

      <form name="dadosVoluntario" id="form" class="form" action="conexao.php" method="post">
        
      <div class="form-control">
          <label for="nome">Nome</label>
          <input
          type="text"
          id="nome"
          placeholder="Digite seu nome..."
          name="nomev"
          value="<?=$voluntarios["nomev"]?>" size="100"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="rg">RG</label>
          <input
          type="text"
          id="rg"
          placeholder="Digite seu RG..."
          name="rg"
          value="<?=$voluntarios["rg"]?>" size="20"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="cpf">CPF</label>
          <input
          type="text"
          id="cpf"
          placeholder="Digite seu CPF..."
          name="cpf"
          value="<?=$voluntarios["cpf"]?>" size="14"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="rua">Rua</label>
          <input
            type="text"
            id="rua"
            name="rua"
            placeholder="Digite sua rua..."
            value="<?=$voluntarios["rua"]?>" size="100"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="bairro">Bairro</label>
          <input
            type="text"
            id="bairro"
            name="bairro"
            placeholder="Digite seu bairro..."
            value="<?=$voluntarios["bairro"]?>" size="100"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="cidade">Cidade</label>
          <input
            type="text"
            id="cidade"
            name="cidade"
            placeholder="Digite sua cidade..."
            value="<?=$voluntarios["cidade"]?>" size="100"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="telefone">Telefone</label>
          <input
            type="text"
            id="telefone"
            name="telefone"
            placeholder="Digite seu telefone..."
            value="<?=$voluntarios["telefone"]?>" size="20"
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>
        <tr>
                    <td><input type="hidden" name="acao" value="alterar">
                        <input type="hidden" name="id" value="<?=$voluntarios["id"]?>">
                    </td>
                    <td><button type="submit" name="Enviar" value="Enviar">Enviar</button></td>
                </tr>
      </form>
    </div>

    <script
      src="https://kit.fontawesome.com/f9e19193d6.js"
      crossorigin="anonymous"
    ></script>

    <script src="./script.js"></script>
  </body>
</html>