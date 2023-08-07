const form = document.getElementById("form");


form.addEventListener("submit", (e) => {
  e.preventDefault();

  checkInputs();
});

function checkInputs() {
  const nomeValue = nome.value;
  const rgValue = rg.value;
  const cpfValue = cpf.value;
  const ruaValue = rua.value;
  const bairroValue = bairro.value;
  const cidadeValue = cidade.value;
  const telefoneValue = telefone.value;

  if (nomeValue === "") {
    setErrorFor(nome, "O nome é obrigatório.");
  } else {
    setSuccessFor(nome);
  }

  if (rgValue === "") {
    setErrorFor(rg, "O RG é obrigatório.");
  } else {
    setSuccessFor(rg);
  }

  if (cpfValue === "") {
    setErrorFor(cpf, "O CPF é obrigatório.");
  } else {
    setSuccessFor(cpf);
  }

  if (ruaValue === "") {
    setErrorFor(rua, "A rua é obrigatória.");
  } else {
    setSuccessFor(rua);
  }

  if (bairroValue === "") {
    setErrorFor(bairro, "O bairro é obrigatória.");
  } else {
    setSuccessFor(bairro);
  }

  if (cidadeValue === "") {
    setErrorFor(cidade, "A cidade é obrigatória.");
  } else {
    setSuccessFor(cidade);
  }

  if (telefoneValue === "") {
    setErrorFor(telefone, "O telefone é obrigatório.");
  } else {
    setSuccessFor(telefone);
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