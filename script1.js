const form = document.getElementById("form");


form.addEventListener("submit", (e) => {
  e.preventDefault();

  checkInputs();
});

function checkInputs() {
  const nomeValue = nome.value;
  const dadosPValue = dadosP.value;
  const numeroQValue = numeroQ.value;
  const leitoValue = leito.value;
  const dataIValue = dataI.value;
  const dataAValue = dataA.value;
  const dataFValue = dataF.value;
  const nomeRValue = nomeR.value;
  const telefoneRValue = telefoneR.value;

  if (nomeValue === "") {
    setErrorFor(nome, "O nome é obrigatório.");
  } else {
    setSuccessFor(nome);
  }

  if (dadosPValue === "") {
    setErrorFor(dadosP, "Os dados são obrigatório.");
  } else {
    setSuccessFor(dadosP);
  }

  if (numeroQValue === "") {
    setErrorFor(numeroQ, "O número do quarto obrigatório.");
  } else {
    setSuccessFor(numeroQ);
  }

  if (leitoValue === "") {
    setErrorFor(leito, "O leito é obrigatória.");
  } else {
    setSuccessFor(leito);
  }

  if (dataIValue === "") {
    setErrorFor(dataI, "A data de internação é obrigatória.");
  } else {
    setSuccessFor(dataI);
  }

  if (dataAValue === "") {
    setErrorFor(dataA, "A data de alta é obrigatória.");
  } else {
    setSuccessFor(dataA);
  }

  if (dataFValue === "") {
    setErrorFor(dataF, "A data de falecimento é obrigatória.");
  } else {
    setSuccessFor(dataF);
  }

  if (nomeRValue === "") {
    setErrorFor(nomeR, "O nome do responsável é obrigatório.");
  } else {
    setSuccessFor(nomeR);
  }

  if (telefoneRValue === "") {
    setErrorFor(telefoneR, "O telefone do responsável é obrigatório.");
  } else {
    setSuccessFor(telefoneR);
  }

  const formControls = form.querySelectorAll(".form-control");

  const formIsValid = [...formControls].every((formControl) => {
    return formControl.className === "form-control success";
  });

  if (formIsValid) {
    console.log("O formulário está 100% válido!");
    form.submit();
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");

  // Adiciona a mensagem de erro
  small.innerText = message;

  // Adiciona a classe de erro
  formControl.className = "form-control error";
}

function setSuccessFor(input) {
  const formControl = input.parentElement;

  // Adicionar a classe de sucesso
  formControl.className = "form-control success";
}